
    <ul class="navbar-nav mr-4 d-flex align-items-center ">
        <li class="nav-item">
            <a class="nav-link nav-login" href="{{route('jornada.categorias')}}">Categorias</a>
        </li>
    </ul>

    <ul class="navbar-nav mr-4 d-flex align-items-center ">
        <li class="nav-item">
            <a class="nav-link nav-login" href="{{route('salao.marcas')}}">Marcas</a>
        </li>
    </ul>
    <ul class="navbar-nav mr-4 d-flex align-items-center ">
        <li class="nav-item">
            <a class="nav-link nav-login" href="{{route('salao.produtos')}}">Produtos</a>
        </li>
    </ul>


    <ul class="navbar-nav d-flex align-items-center ">
        <li class="nav-item ">
            <a class="nav-link nav-icons m-0" href="#">
                <img class="icon-nav" src="{{asset('assets/images/icon-coracao.svg')}}" alt=""></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link nav-icons m-0" href="{{route('jornada.carrinho')}}">
                <img class="icon-nav" src="{{asset('assets/images/icon-cart.svg')}}" alt=""></a>
        </li>
        <li class="nav-item">
            <a class="nav-link m-0" id="drop-navigate" href="#">
                <img class="logo-nav" src="{{asset('assets/images/icon-nav.svg')}}" alt=""></a>
        </li>
    </ul>


