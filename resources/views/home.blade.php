@extends('layouts.master')
@section('title','Desarrollador de páginas web en Bucaramanga')
@section('description','Desarrollador de páginas web, tiendas online, frontend y backend en Bucaramanga')
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
                        <a href="https://github.com/JhonSteven" target="_blank"><i class="fa fa-github-square"></i></a>
                        <a href="https://www.linkedin.com/in/jhon-stiven-parra-pe%C3%B1a-b00ab189/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
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
                        Soy desarrollador web desde el año 2014, tengo conocimientos en HTML5 (Blade template), CSS (Preprocesador Stylus, Bootstrap, Materialize), Responsive design (Mobile First), Javascript (Vanilla.js, Jquery.js, Vue.js, PWA), Vue.js (Vuex, Vue SPA), Ionic Framework, PHP (PHP POO, Laravel), Real Time con Pusher, API Rest, MySQL, Cpanel, GIT (Github, Gitlab, Bitbucket), SEO básico e <b>Inglés intermedio</b>.
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
                    <h3 class="mt-0 mb-1">Optimización de sitios web</h3>
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
    <hr class="my-0" id="portafolio">
    <div class="servicios py-4 bg-gris" id="portafolio-content">
        <div class="container">
            <h2 class="bold">Portafolio</h2>
            <p>Algunos de los proyectos más destacados que he realizado o acompañado.</p>
            <div class="buttons-portafolio">
                <a onclick="mostrar('all')" id="all" class="btn btn-dark mb-2">Todos</a>
                <a onclick="mostrar('emprendimientos')" id="emprendimientos" class="btn btn-outline-dark mb-2">Emprendimientos</a>
                <a onclick="mostrar('corporativas')" id="corporativas" class="btn btn-outline-dark mb-2">Páginas Corporativas</a>
                <a onclick="mostrar('tiendas')" id="tiendas" class="btn btn-outline-dark mb-2">Tiendas online</a>
                <a onclick="mostrar('appweb')" id="appweb" class="btn btn-outline-dark mb-2">Aplicaciones Web</a>
                <a onclick="mostrar('appmovil')" id="appmovil" class="btn btn-outline-dark mb-2">Aplicaciones Móviles</a>
                <a onclick="mostrar('pwa')" id="pwa" class="btn btn-outline-dark mb-2">PWA</a>
                <a onclick="mostrar('otros')" id="otros" class="btn btn-outline-dark mb-2">Otros</a>
            </div>
            <div class="row pt-4">
                <a class="col-12 col-md-4 col-lg-3 box-portafolio emprendimientos tiendas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/babymar.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Babymar</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio corporativas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/web-labweb.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Laboratorio Web / Sitioswebs.co</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio emprendimientos tiendas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/web-mercampo.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Mercampo.co</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio emprendimientos tiendas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/mercabastos.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Mercabastos.co</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio emprendimientos" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/web-pokemon.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Pokemon-go.com.co</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio tiendas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/riegoplast.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Riegoplast.com</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio corporativas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/web-hotel.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Hotelprincipe.com.co</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/software-hotel.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Administración de contenido a la medida</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio corporativas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/web-lash.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Lashstudio.com.co</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio corporativas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/imc.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>IMC Soluciones Integrales</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio corporativas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/radioprimavera.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Radio Primavera</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio corporativas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/fondesarrollo.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Fondesarrollo - Fondo de empleados</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/software-polla.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Apuestas deportivas</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/software-halloween.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Concurso de Halloween</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/navidad-2.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Concurso de Navidad</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/software-elecciones.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Software votación de delegados</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/credito.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Software gestión de usuarios y créditos</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appmovil" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/app-seguro.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>App seguro de vida</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb pwa" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/pos.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Software POS - Inventario</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb pwa" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/administracion-negocio.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Administración de punto de venta físico</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/babymar.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Software de compras</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/checklist-2.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Software de mantenimiento- Checklist</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio corporativas" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/ayclimitada.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>AYClimitada.com</h4>
                        </div>
                    </div>
                </a>
                {{-- <a class="col-12 col-md-4 col-lg-3 box-portafolio" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/motocascos.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Motocascos.co</h4>
                        </div>
                    </div>
                </a> --}}
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb otros" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/extension-chrome.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Extensión Chrome para extraer datos de Amazon</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/software-dropshipping.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Dropshipping Mercadolibre</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio appweb" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/parratags.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Parratags - Herramienta SEO</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio otros" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/pagespeed.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Optimización páginas webs</h4>
                        </div>
                    </div>
                </a>
                {{-- <a class="col-12 col-md-4 col-lg-3 box-portafolio" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/babymar.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>App centro</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12 col-md-4 col-lg-3 box-portafolio" href="#!">
                    <div class="bg-white">
                        <figure class="img-portafolio">
                            <img src="{{URL::asset('img/portafolio/babymar.jpg')}}" alt="">
                        </figure>
                        <div class="p-2">
                            <h4>Parra images</h4>
                        </div>
                    </div>
                </a> --}}
            </div>
        </div>
    </div>


@endsection
@section('scripts')
<script>
    function mostrar(event)
    {
        $('.buttons-portafolio a').removeClass('btn-dark').addClass('btn-outline-dark');
        $('.buttons-portafolio #'+event).removeClass('btn-outline-dark').addClass('btn-dark');

        if(event=='all')
        {
            $('#portafolio-content .box-portafolio').show();
        }
        else
        {
            $('#portafolio-content .box-portafolio').hide();
            $('#portafolio-content .box-portafolio.'+event).show();
        }
    }
</script>
@endsection
