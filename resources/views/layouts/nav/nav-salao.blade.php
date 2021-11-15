<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand " href="{{url('home')}}"><img class="brand-nav" src="{{asset('assets/images/logo.svg')}}"
                                                             alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex justify-content-between w-100">
                <form class="form-inline my-2 my-lg-0 ml-3">
                    <div class="form-search-custom d-flex justify-content-between">
                        <input class="form-custom mr-sm-2" type="search" placeholder="Busque um produto, loja ou marca">
                        <span class="icon-search"><i class="fas fa-search"></i></span>
                    </div>
                </form>
                <div class="d-flex">
                        <ul class="navbar-nav mr-4 d-flex align-items-center ">
                            <li class="nav-item">
                                <a class="nav-link nav-login" href="{{route('categorias')}}">Categorias</a>
                            </li>
                        </ul>

                    <ul class="navbar-nav mr-4 d-flex align-items-center ">
                        <li class="nav-item">
                            <a class="nav-link nav-login" href="{{route('marcas')}}">Marcas</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-4 d-flex align-items-center ">
                        <li class="nav-item">
                            <a class="nav-link nav-login" href="">Produtos</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-flex align-items-center ">
                        <li class="nav-item ">
                            <a class="nav-link nav-icons m-0" href="#">
                                <img class="icon-nav" src="{{asset('assets/images/icon-coracao.svg')}}" alt=""></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav-icons m-0" href="{{route('ver-carrinho')}}">
                                <img class="icon-nav" src="{{asset('assets/images/icon-cart.svg')}}" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="#">
                                <img class="logo-nav" src="{{asset('assets/images/icon-nav.svg')}}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
