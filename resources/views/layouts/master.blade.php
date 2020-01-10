<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <meta name="HandheldFriendly" content="True">
    <meta name="description" content="" />
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
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon-parraweb.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('img/favicon-parraweb.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('img/favicon-parraweb.png') }}" />
    <link rel="apple-touch-icon" href="{{ URL::asset('img/favicon-parraweb.png') }}">
    <link rel="icon" href="{{ URL::asset('img/favicon-parraweb.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ URL::asset('img/favicon-parraweb.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('img/favicon-parraweb.png') }}">
    <meta name="msapplication-TileImage" content="{{ URL::asset('img/favicon-parraweb.png') }}">
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
    @include('components.footer')
    @yield('scripts')
</body>
</html>
