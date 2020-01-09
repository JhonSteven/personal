<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Goutte;
use Validator;
use DB;

class SeotagsController extends Controller
{
    private $paises = [
        'co' => 'Colombia',
        'es' => 'España',
        'mx' => 'México',
        'us' => 'Estados Unidos',
        'ar' => 'Argentina',
        'pe' => 'Perú',
        'cl' => 'Chile',
        'ec' => 'Ecuador',
    ];

    function convert_text($text) {

        $t = $text;

        $specChars = array(
            '!' => '%21',    '"' => '%22',
            '#' => '%23',    '$' => '%24',    '%' => '%25',
            '&' => '%26',    '\'' => '%27',   '(' => '%28',
            ')' => '%29',    '*' => '%2A',    '+' => '%2B',
            ',' => '%2C',    '-' => '%2D',    '.' => '%2E',
            '/' => '%2F',    ':' => '%3A',    ';' => '%3B',
            '<' => '%3C',    '=' => '%3D',    '>' => '%3E',
            '?' => '%3F',    '@' => '%40',    '[' => '%5B',
            '\\' => '%5C',   ']' => '%5D',    '^' => '%5E',
            '_' => '%5F',    '`' => '%60',    '{' => '%7B',
            '|' => '%7C',    '}' => '%7D',    '~' => '%7E',
            ',' => '%E2%80%9A',  ' ' => '%20'
        );

        foreach ($specChars as $k => $v) {
            $t = str_replace($v, $k, $t);
        }

        return $t;
    }

    function getValor($tag,$value,$node=null)
    {
        if($tag=='imgAlt')
        {
            return ($value=='name') ? 'img' : $node->attr('alt');
        }
        else
        {
            return ($value=='name') ? $tag : $node->text();
        }
    }

    public function getExtensionCountry($country)
    {
        if($country=='us')
        {
            return 'com';
        }
        if($country=='es')
        {
            return 'es';
        }
        if($country=='cl')
        {
            return 'cl';
        }
        return 'com.'.$country;
    }

    public function getPageSEOTags()
    {
        return view('home')->with(['paises'=> $this->paises]);
    }

    public function getUrls(Request $r)
    {
        $dataValidate = [
    		"termino" => "required|min:1",
    		"country" => "required|in:".implode( ",", array_keys($this->paises)),
        ];

        $validator = Validator::make($r->all(),$dataValidate);

        if ($validator->fails()) {
            return response()->json(['errors' => 'Ha ocurrido un error.']);
        }
        $crawler = Goutte::request('GET', 'https://www.google.'.($this->getExtensionCountry($r->country)).'/search?gl='.$r->country.($r->country=='us' ? '&hl=en&pws=0&gws_rd=cr' : '').'&q='.$r->termino);
        $urls = [];
        // $totalResultados = '';
        // $crawler->filter('#resultStats')->each(function ($node) {
        //     if($node->html())
        //     {
        //         $totalResultados = $node->html();
        //     }
        // });
        // $totalResultados = $crawler->filter('#resultStats')->html();

        $crawler->filter('a')->each(function ($node) use (&$urls) {
            $href = $node->extract(array('href'));
            if (!strpos($href[0], 'google.com') && !strpos($href[0], 'youtube') && strpos($href[0], '/url?q=')!==false && strtolower($node->text())!=strtolower('Iniciar Sesión')) {
                $textBefore = substr($href[0],7);
                $texto = substr($textBefore,0,strpos($textBefore, "&sa"));
                if(!in_array($texto,$urls))
                {
                    $urls[] = $this->convert_text($texto);
                }
                // $urls[] = substr($href[0],7);
                // $urls[] = $node->text();
            }
        });

        return response()->json(['urls'=>$urls]);
        // return response()->json(['urls'=>$urls,'total' => $totalResultados]);
    }


    public function getTags(Request $r)
    {
        $dataValidate = [
    		"url" => "required|url",
        ];
        $validator = Validator::make($r->all(),$dataValidate);

        if ($validator->fails()) {
            return response()->json(['errors' => 'Ha ocurrido un error.']);
        }

        $url = $r->url;
        $tags = ['title','description','keywords','h1','h2','h3','h4','imgAlt'];
        $datos = [];

            $data = [];

            $executionStartTime = microtime(true);
            $crawlerUrl = Goutte::request('GET', $url);

            foreach($tags as $tag)
            {
                $nameTag = $this->getValor($tag,'name');
                if($tag=='description' || $tag=='keywords')
                {
                    $encontrado = $crawlerUrl->filterXpath('//meta[@name="'.$tag.'"]');
                    $data[$tag] = ($encontrado->count() > 0 ) ? $encontrado->attr('content') : null;
                }
                // if($tag=='title')
                // {
                //     $encontrado = $crawlerUrl->filter($tag);
                //     $data[$tag] = ($encontrado->count() > 0 ) ? $encontrado->text() : null;
                // }
                else
                {
                    $encontrado = $crawlerUrl->filter($nameTag);
                    if($encontrado->count() > 0 )
                    {
                        if($tag=='title')
                        {
                            $data[$tag] = $encontrado->text();
                        }
                        else
                        {
                            $encontrado->each(function ($node) use (&$data,$tag) {
                                $valorEncontrado = $this->getValor($tag,'valor',$node);
                                if($valorEncontrado)
                                {
                                    $data[$tag][] = $valorEncontrado;
                                }
                            });
                        }

                    }
                    else {
                        $data[$tag] = [];
                    }

                }
            }
            $executionEndTime = microtime(true);

            return response()->json(['etiquetas' => $data,'time' => $executionEndTime - $executionStartTime]);
            // return view('home')->with(['datos' => $datos,'encontrado' =>true,'busqueda' =>$r->termino,'paises'=>$this->paises,'countrySelected'=>$this->paises[$r->country]]);
    }
}
