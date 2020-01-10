<header class="sticky-top">
    <nav class="navbar py-1 navbar-expand-md navbar-light bg-light bg-white">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="{{URL::to('/')}}">
                <img class="" src="{{URL::asset('img/jhon.png')}}" alt="Logo Laboratorio Web - Páginas web"> <b class="bold">PARRAWEB.COM</b>
            </a>
            @if(Route::currentRouteName()=='parratags')
            <button v-on:click="toggleMenu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" v-bind:class="{'show':showMenu}" id="menu">
            @else
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
            @endif
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item {{Route::currentRouteName()=='home' ? 'active' : ''}}">
                        <a class="nav-link" href="{{URL::to('/')}}">Sobre mí</a>
                    </li>
                    <li class="nav-item d-md-none d-xl-inline">
                        <a class="nav-link" href="{{URL::to('/#portafolio')}}">Portafolio</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName()=='parratags' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('parratags')}}">ParraTags</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/parraimages')}}">ParraImages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/tutoriales')}}">Tutoriales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/parraimages')}}">Blog</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="https://github.com/JhonSteven" class="icon-social  d-md-none d-xl-inline" target="_blank"><i class="fa fa-github-square"></i></a>
                        <a href="https://www.linkedin.com/in/jhon-stiven-parra-pe%C3%B1a-b00ab189/" class="icon-social" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=573144703126&amp;text=Hola, te escribo desde el sitio web de www.parraweb.com" class="icon-social d-md-none d-xl-inline" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
