<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <meta name="HandheldFriendly" content="True">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="all" />
    <meta name="organization" content="Fondesarrollo" />
    <meta name='distribution' content='Local'>
    <meta name="country" content="Colombia (COL)" />
    <meta name="geo.region" content="CO-SAN" />
    <meta name="geo.placename" content="Bucaramanga" />
    <meta name="geo.position" content="" />
    <meta name="ICBM" content="" />
    <meta http-equiv="content-language" content="ES" />
    <meta property="og:locale" content="es_LA" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <link rel="alternate" href="" hreflang="es" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{URL::asset('img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('img/favicon/favicon-16x16.png')}}">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon/apple-icon-114x114.png') }}" />
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta itemprop="name" content="" />
    <meta itemprop="description" content="" />
    <meta itemprop="image" content="" />
    <meta name="rating" content="General" />
    <meta name="author" content="Jhon Stiven Parra Peña" />
    <meta name="owner" content="" />
    <meta name="designer" content="laboratorio web" />
    <meta name="copyright" content="Copyright &copy; Todos los Derechos Reservados" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/estilos.css')}}">
    @yield('styles')
</head>
<body>
    @include('components.menu')
    <div id="contenido">
        @yield('content')
    </div>
    <hr class="my-0">
    <div class="contacto py-4">
        <div class="container text-center">
            <h2 class="bold">Contacto</h2>
            <div>
                jhonstevenparrapena@gmail.com
            </div>
            <div class="iconos-home">
                <a href="https://github.com/JhonSteven" target="_blank"><i class="fa fa-github-square"></i></a>
                <a href="https://www.linkedin.com/in/jhon-stiven-parra-pe%C3%B1a-b00ab189/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                <a href="https://api.whatsapp.com/send?phone=573144703126&amp;text=Hola, te escribo desde el sitio web de www.parraweb.com"><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    @include('components.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
