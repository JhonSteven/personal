<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SEO TAGS</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> --}}

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
            .d-none-partial{
                display: none;
            }
        </style>
    </head>
    <body>
        <header class="sticky-top">
            <nav class="navbar py-1 navbar-expand-md navbar-light bg-light bg-white">
                <div class="container-fluid px-0" id="menu">
                    <a class="navbar-brand" href="#">
                        <img class="" src="{{URL::asset('img/jhon.png')}}" alt="Logo Laboratorio Web - Páginas web"> <b class="bold">PARRAWEB.COM</b>
                    </a>
                    <button v-on:click="toggleMenu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" v-bind:class="{'show':showMenu}" id="menu">
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
        <div id="parratags">
            <div class="bg-gris py-4">
                <div class="seotags">
                    <div class="container">
                        <div class="content py-2">
                            <h1 class="text-center mt-0 bold">PARRATAGS</h1>

                            <p class="text-center">Herramienta para análisis de etiquetas en los SERP's de Google, según el término de búsqueda.</p>
                            <form method="post" action="/" v-on:submit.prevent="getURLs">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12 col-md-8 col-lg-6 pb-2">
                                        <input name="termino" autocomplete="off" type="text" v-bind:disabled="loading" v-model="search.termino" class="form-control" id="busqueda" placeholder="Ingrese su búsqueda">
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 pb-2">
                                        <div class="form-group mb-0">
                                            <select class="form-control" name="country" id="selectCountry" v-bind:disabled="loading" v-model="search.country">
                                                @foreach ($paises as $key => $pais)
                                                <option value="{{$key}}" id="select-{{$key}}">{{$pais}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <button type="submit" v-bind:disabled="loading" class="btn btn-success btn-block">
                                            <span v-if="!loading">Buscar en SERP'S</span>
                                            <span v-if="loading" class="d-none-partial"><i class="fa fa-spin fa-spinner"></i> Un momento por favor...</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center d-none-partial" v-if="loading">
                    <span v-if="urls.length>0"> Obteniendo etiquetas en @{{urls[progress.actual-1]}}...</span>
                    <span v-if="urls.length==0"> Obteniendo SERP's...</span>
                </div>
            </div>
            <div class="progress d-none-partial">
                <div class="progress-bar" v-bind:class="{'progress-bar-animated progress-bar-striped':progress.actual<progress.total}" role="progressbar" v-bind:aria-valuenow="barProgress" aria-valuemin="0" aria-valuemax="progress.total" v-bind:style="'width:'+barProgress+'%'">
                    <span v-if="barProgress">@{{barProgress}}%</span>
                </div>
            </div>
            <resultados class="d-none-partial" v-bind:resultados="resultados" v-bind:loading="loading" v-bind:urls="urls"></resultados>
        </div>



        {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
        <script src="{{URL::asset('js/seotags.js')}}"></script>

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
        <style>
            .d-none-partial{
                display: inherit;
            }
        </style>
    </body>
</html>
