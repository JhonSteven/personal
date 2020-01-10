@extends('layouts.master')
@section('title','Desarrollador de páginas web en Bucaramanga')
@section('content')
    <div class="banner py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-lg-3 box-img-jhon">
                    <img class="img-jhon" src="{{URL::asset('img/jhon.png')}}" alt="">
                </div>
                <div class="col-12 col-md-8 col-lg-9 text-center">
                    <h2 class="mt-0 text-white">Jhon Stiven Parra Peña</h2>
                    <h1 class="mt-0 text-white bold">Desarrollador de páginas web en Bucaramanga</h1>
                    <div class="iconos-home">
                        <a href="https://github.com/JhonSteven"><i class="fa fa-github-square"></i></a>
                        <a href="https://www.linkedin.com/in/jhon-stiven-parra-pe%C3%B1a-b00ab189/"><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-whatsapp"></i></a>
                    </div>
                    <div class="text-white text-shado-white">
                        jhonstevenparrapena@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="skills py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-5 d-none d-md-block">
                    <img class="w-100 border-img" src="{{URL::asset('img/skills.jpg')}}" alt="">
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <h2 class="bold text-center">FullStack Developer (Frontend - Backend)</h2>
                    <p class="mb-0">
                        Soy desarrollador web desde el año 2014, tengo conocimientos en HTML5 (Blade template), CSS (Preprocesador Stylus, Bootstrap, Materialize), Javascript (Vanilla.js, Jquery.js, Vue.js, PWA), Vue.js (Vuex, Vue SPA), Ionic Framework, PHP (PHP POO, Laravel), Real Time con Pusher, API Rest, MySQL, Cpanel, GIT (Github, Gitlab, Bitbucket), SEO básico e <b>Inglés intermedio</b>.
                    </p>
                    <hr>
                    <div class="list-skills text-center">
                        <img src="{{URL::asset('img/html.svg')}}" alt=""> <img src="{{URL::asset('img/css.svg')}}" alt=""> <img src="{{URL::asset('img/javascript.svg')}}" alt=""> <img src="{{URL::asset('img/vue-js.svg')}}" alt=""> <img src="{{URL::asset('img/ionic.svg')}}" alt=""> <img src="{{URL::asset('img/php.svg')}}" alt=""> <img src="{{URL::asset('img/laravel.svg')}}" alt=""> <img src="{{URL::asset('img/mysql.svg')}}" alt=""> <img src="{{URL::asset('img/cpanel.svg')}}" alt=""> <img src="{{URL::asset('img/git.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="servicios py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <h2 class="bold">Servicios</h2>
                    <h3 class="mt-0 mb-1">Desarrollador Web Freelance</h3>
                    <h3 class="mt-0 mb-1">Administrador de Sitios Webs</h3>
                    <h3 class="mt-0 mb-1">Creatividad y planeación en ejecución de proyectos web</h3>
                    <h3 class="mt-0 mb-1">Asesoría Web</h3>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <h2 class="bold">Educación</h2>
                    <h3 class="mt-0 mb-1">Platzi <i>(Certificados Frontend Developer, Git, Laravel, Programación, entre otros).</i></h3>
                    <h3 class="mt-0 mb-1">Udemy <i>(Vue.js - Laravel).</i></h3>
                    <h3 class="mt-0 mb-1">Ingeniería del Software <i>(2018 - Actualidad) / Politécnico Grancolombiano.</i></h3>
                    <h3 class="mt-0 mb-1">Ingeniería Mecánica <i>(2011 - 2014) / Universidad Industrial de Santander.</i></h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="servicios py-4">
        <div class="container">
            <h2 class="bold">Portafolio</h2>
            <a href="" class="btn btn-dark">Todos</a>
            <a href="" class="btn btn-outline-dark">Páginas Web</a>
            <a href="" class="btn btn-outline-dark">Aplicaciones Web</a>
            <a href="" class="btn btn-outline-dark">Aplicaciones Móviles</a>
            <a href="" class="btn btn-outline-dark">PWA</a>
        </div>
    </div>
    <hr class="my-0">
    <div class="contacto bg-gris py-4">
        <div class="container text-center">
            <h2 class="bold">Contacto</h2>
            <div>
                jhonstevenparrapena@gmail.com
            </div>
            <div class="iconos-home">
                <a href="https://github.com/JhonSteven"><i class="fa fa-github-square"></i></a>
                <a href="https://www.linkedin.com/in/jhon-stiven-parra-pe%C3%B1a-b00ab189/"><i class="fa fa-linkedin-square"></i></a>
                <a href=""><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
