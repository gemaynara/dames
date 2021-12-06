<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand mr-2 " href="{{url('/')}}"><img class="brand-nav"
                                                               src="{{asset('assets/images/logo.svg')}}"
                                                               alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex justify-content-between w-100">
                @include('layouts.nav.busca')
                <div class="d-flex">

                    <ul class="navbar-nav mr-4 d-flex align-items-center ">
                        <li class="nav-item mr-3">
                            <a class="btn-primary-nav text-light" href="{{route('pre-register')}}">Cadastrar-me</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-color-primary nav-login" href="{{route('login')}}">Faça Login</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-flex align-items-center ">
                        <li class="nav-item ">
                            <a class="nav-link nav-icons m-0" href="{{route('jornada.carrinho')}}">
                                <img class="icon-nav" src="{{asset('assets/images/icon-cart.svg')}}" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" id="drop-navigate" href="#">
                                <img class="logo-nav" src="{{asset('assets/images/icon-nav.svg')}}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>


{{--<div class="card drop-nav hide-master" id="drop-nav">--}}
{{--    <ul class="">--}}
{{--        <li><a href="" class="border-custom">Ajustes</a></li>--}}
{{--        <li><a href="" class="border-custom">Perfil</a></li>--}}
{{--        <li><a href="">Sair</a></li>--}}
{{--    </ul>--}}
{{--</div>--}}
