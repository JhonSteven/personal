<header class="sticky-top">
    <nav class="navbar py-1 navbar-expand-md navbar-light bg-light bg-white">
        <div class="container-fluid px-0" id="menu">
            <a class="navbar-brand" href="{{URL::to('/')}}">
                <img class="" src="{{URL::asset('img/jhon.png')}}" alt="Logo Laboratorio Web - Páginas web"> <b class="bold">PARRAWEB.COM</b>
            </a>
            <button v-on:click="toggleMenu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" v-bind:class="{'show':showMenu}" id="menu">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item active d-md-none d-xl-inline">
                        <a class="nav-link" href="{{URL::to('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/portafolio')}}">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('parratags')}}">ParraTags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/parraimages')}}">ParraImages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/tutoriales')}}">Tutoriales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/parraimages')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/contacto')}}">Contacto</a>

                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/JhonSteven" class="icon-social  d-md-none d-xl-inline"><i class="fa fa-github-square"></i></a>
                        <a href="https://www.linkedin.com/in/jhon-stiven-parra-pe%C3%B1a-b00ab189/" class="icon-social"><i class="fa fa-linkedin-square"></i></a>
                        <a href="" class="icon-social  d-md-none d-xl-inline"><i class="fa fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
