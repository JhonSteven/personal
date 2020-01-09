<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SEO TAGS</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body{
                font-family: 'Nunito';
            }
            .bg-gris{
                background: #f5f5f5;
            }
            .bold{
                font-weight: bold;
            }
            .pointer{
                cursor: pointer;
            }
            .navbar-brand img{
                width:100%;
                max-width: 2.75rem;
            }
            .navbar-brand b{
                font-size:0.9rem;
            }
            .navbar-nav .nav-item{
                padding: 0 0.25rem;
            }
            @media only screen and (min-width:993px)
            {
                .navbar-nav .nav-item{
                    padding: 0 1rem;
                }
            }
            .icon-social{
                display: none;
                font-size: 1.45rem;
                margin-left:0.5rem;
                color: #717171 !important;
            }
            .icon-social:hover{
                color:black !important;
            }
            @media only screen and (min-width:768px)
            {
                .icon-social{
                    display: inline;
                }
                .navbar-brand b{
                    font-size:1.2rem;
                }
                .seotags .row >div{
                    padding-left:0;
                }
                .seotags .row >div:last-child{
                    padding-right:0;
                }
            }
        </style>
    </head>
    <body>
        <header class="sticky-top">
            <nav class="navbar py-1 navbar-expand-md navbar-light bg-light bg-white">
                <div class="container-fluid px-0">
                    <a class="navbar-brand" href="#">
                        <img class="" src="{{URL::asset('img/jhon.png')}}" alt="Logo Laboratorio Web - Páginas web"> <b class="bold">PARRAWEB.COM</b>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ParraTags</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ParraImages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="icon-social"><i class="fa fa-github-square"></i></a>
                                <a href="" class="icon-social"><i class="fa fa-linkedin-square"></i></a>
                                <a href="" class="icon-social"><i class="fa fa-facebook-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="bg-gris py-4">
            <div class="seotags">
                <div class="container">
                    <div class="content py-2">
                        <h1 class="text-center mt-0 bold">PARRATAGS</h1>

                        <p class="text-center">Herramienta para análisis de etiquetas de la competencia, según el término de búsqueda.<br>https://www.google.XX/search?gl=XX&lr=lang_XX&hl=en&q=cars</p>
                        <form method="post" action="/">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-6 pb-2">
                                    <input name="termino" autocomplete="off" type="text" class="form-control" id="busqueda" placeholder="Ingrese su búsqueda">
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 pb-2">
                                    <div class="form-group mb-0">
                                        <select class="form-control">
                                            <option value="co">Colombia</option>
                                            <option value="es">España</option>
                                            <option value="mx">México</option>
                                            <option value="us">Estados Unidos</option>
                                            <option value="ar">Argentina</option>
                                            <option value="pe">Perú</option>
                                            <option value="cl">Chile</option>
                                            <option value="ec">Ecuador</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <button type="submit" class="btn btn-success btn-block">Buscar en SERP'S</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if(isset($encontrado))
            <div class="text-center py-4">
                <h2>RESULTADOS PARA <b>{{$busqueda}}</b></h2>
            </div>
            @if(!empty($datos))
            <div class="bg-white py-4">
                <div class="container-fluid">
                    <div class="content">
                        <nav class="nav nav-pills nav-justified">
                            <a class="nav-item nav-link pointer" id="url-encontrada" onclick="change()">POR URL ENCONTRADA</a>
                            <a class="nav-item nav-link active pointer" id="etiqueta-seo" onclick="change()">POR ETIQUETA SEO</a>
                        </nav>
                    </div>
                </div>
            </div>
            @endif
            <div class="py-4 d-none" id="content-url">
                <div class="container-fluid">
                    @if(!empty($datos))
                        @foreach ($datos as $key => $dato)
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h2 class="text-success bold"><span class="badge badge-warning">#{{$key+1}}</span> {{$dato['url']}}</h2>
                                    <hr>
                                    <div class="pb-2">
                                        <h3>TITLE</h3>
                                        @if($dato['title'])
                                        {{$dato['title']}}
                                        @else
                                        No tiene title.
                                        @endif
                                    </div>
                                    <div class="pb-2">
                                        <h3>DESCRIPTION</h3>
                                        @if($dato['description'])
                                        {{$dato['description']}}
                                        @else
                                        <p>No tiene description.</p>
                                        @endif
                                    </div>
                                    <div class="pb-2">
                                        <h3>KEYWORDS</h3>
                                        @if($dato['keywords'])
                                        {{$dato['keywords']}}
                                        @else
                                        No tiene keywords.
                                        @endif
                                    </div>
                                    <div class="pb-2">
                                        <h3>H1</h3>
                                        @if(array_key_exists('h1',$dato))
                                            @forelse($dato['h1'] as $h1tag)
                                            - {{$h1tag}}<br>
                                            @empty
                                            No tiene h1.
                                            @endforelse
                                        @else
                                        No tiene h1.
                                        @endif
                                    </div>
                                    <div class="pb-2">
                                        <h3>H2</h3>
                                        @if(array_key_exists('h2',$dato))
                                            @forelse($dato['h2'] as $h2tag)
                                            - {{$h2tag}}<br>
                                            @empty
                                            No tiene h2.
                                            @endforelse
                                        @else
                                        No tiene h2.
                                        @endif
                                    </div>
                                    <div class="pb-2">
                                        <h3>H3</h3>
                                        @if(array_key_exists('h3',$dato))
                                            @forelse($dato['h3'] as $h3tag)
                                            - {{$h3tag}}<br>
                                            @empty
                                            No tiene h3.
                                            @endforelse
                                        @else
                                        No tiene h3.
                                        @endif
                                    </div>
                                    <div class="pb-2">
                                        <h3>ALT DE IMÁGENES</h3>
                                        @if(array_key_exists('imgAlt',$dato))
                                            @forelse($dato['imgAlt'] as $alt)
                                            - {{$alt}}<br>
                                            @empty
                                            No tiene alt.
                                            @endforelse
                                        @else
                                        No tiene alt.
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <h3 class="text-center">No hay búsquedas disponibles.</h3>
                    @endif
                </div>
            </div>
            <div class="py-4" id="content-etiqueta">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="text-success bold">TITLE</h2>
                            <hr>
                            <div class="pb-2">
                                @forelse ($datos as $key=>$dato)
                                    <span class="badge badge-warning">#{{$key+1}}</span>
                                    @if($dato['title'])
                                        {{$dato['title']}}
                                    @else
                                    <i>NO TIENE - </i>
                                    @endif
                                     <span class="text-primary">({{$dato['url']}})</span><br>
                                @empty
                                No hay title en los resultados.
                                @endforelse
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-success bold">DESCRIPTION</h2>
                            <hr>
                            <div class="pb-2">
                                @forelse ($datos as $key=>$dato)
                                    <span class="badge badge-warning">#{{$key+1}}</span>
                                    @if($dato['description'])
                                        {{$dato['description']}}
                                    @else
                                    <i>NO TIENE - </i>
                                    @endif
                                     <span class="text-primary">({{$dato['url']}})</span><br>
                                @empty
                                No hay description en los resultados.
                                @endforelse
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-success bold">KEYWORDS</h2>
                            <hr>
                            <div class="pb-2">
                                @forelse ($datos as $key=>$dato)
                                    <span class="badge badge-warning">#{{$key+1}}</span>
                                    @if($dato['keywords'])
                                        {{$dato['keywords']}}
                                    @else
                                    <i>NO TIENE - </i>
                                    @endif
                                     <span class="text-primary">({{$dato['url']}})</span><br>
                                @empty
                                No hay keywords en los resultados.
                                @endforelse
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-success bold">H1</h2>
                            <hr>
                            <div class="pb-2">
                                @forelse ($datos as $key=>$dato)
                                    <span class="badge badge-warning">#{{$key+1}}</span>
                                    <span class="text-primary">({{$dato['url']}})</span><br>
                                    @if(array_key_exists('h1',$dato))
                                        @forelse($dato['h1'] as $h1tag)
                                        - {{$h1tag}}<br>
                                        @empty
                                        <i>NO TIENE.</i><br>
                                        @endforelse
                                    @else
                                    <i>NO TIENE.</i><br>
                                    @endif
                                @empty
                                No hay h1 en los resultados.
                                @endforelse
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-success bold">H2</h2>
                            <hr>
                            <div class="pb-2">
                                @forelse ($datos as $key=>$dato)
                                    <span class="badge badge-warning">#{{$key+1}}</span>
                                    <span class="text-primary">({{$dato['url']}})</span><br>
                                    @if(array_key_exists('h2',$dato))
                                        @forelse($dato['h2'] as $h2tag)
                                        - {{$h2tag}}<br>
                                        @empty
                                        <i>NO TIENE.</i><br>
                                        @endforelse
                                    @else
                                    <i>NO TIENE.</i><br>
                                    @endif
                                @empty
                                No hay h1 en los resultados.
                                @endforelse
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-success bold">H3</h2>
                            <hr>
                            <div class="pb-2">
                                @forelse ($datos as $key=>$dato)
                                    <span class="badge badge-warning">#{{$key+1}}</span>
                                    <span class="text-primary">({{$dato['url']}})</span><br>
                                    @if(array_key_exists('h3',$dato))
                                        @forelse($dato['h3'] as $h3tag)
                                        - {{$h3tag}}<br>
                                        @empty
                                        <i>NO TIENE.</i><br>
                                        @endforelse
                                    @else
                                    <i>NO TIENE.</i><br>
                                    @endif
                                @empty
                                No hay h1 en los resultados.
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script>
            function change(){
                if($('#url-encontrada').hasClass('active'))
                {
                    $('#url-encontrada').addClass('active')
                    $('#etiqueta-seo').removeClass('active')

                    $('#content-etiqueta').addClass('d-none');
                    $('#content-url').removeClass('d-none');
                }
                else
                {
                    $('#url-encontrada').removeClass('active')
                    $('#etiqueta-seo').addClass('active')

                    $('#content-etiqueta').removeClass('d-none');
                    $('#content-url').addClass('d-none');
                }
            }
        </script>
    </body>
</html>
