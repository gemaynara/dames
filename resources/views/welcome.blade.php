@extends('layouts.app')

@section('content')
    <header class="content-banner">
        <div class="container">
            <div class="banner d-flex justify-content-between">
                <div class="left d-flex flex-column">
                    <h1>O lugar perfeito para seu salão beleza!</h1>
                    <div class="options d-flex">
                        <a class="nav-link btn-primary-banner text-light" href="#">Efetuar cadastro</a>
                        <a class="nav-link nav-login" href="{{route('login')}}">Já tenho conta</a>
                    </div>
                </div>
                <div class="right">
                    <img src="{{asset('assets/images/celular.png')}}" alt="">
                </div>
            </div>
        </div>
    </header>
    <div class="container passos">
        <options class="d-flex justify-content-around">
            <div class="card-passos d-flex align-items-center">
                <div class="icon-card">
                    <img src="{{asset('assets/images/veiculo.svg')}}" alt="">
                </div>
                <div class="content-card-passos">
                    <h4>Compras rapidas </h4>
                    <p>Entregamos em até 24hrs após a confirmação da compra</p>
                </div>
            </div>

            <div class="card-passos d-flex align-items-center">
                <div class="icon-card">
                    <img src="{{asset('assets/images/veiculo.svg')}}" alt="">
                </div>
                <div class="content-card-passos mt-3">
                    <h4>Compras rapidas </h4>
                    <p>Entregamos em até 24hrs após a confirmação da compra</p>
                </div>
            </div>

            <div class="card-passos d-flex align-items-center">
                <div class="icon-card">
                    <img src="{{asset('assets/images/veiculo.svg')}}" alt="">
                </div>
                <div class="content-card-passos">
                    <h4>Compras rapidas </h4>
                    <p>Entregamos em até 24hrs após a confirmação da compra</p>
                </div>
            </div>

        </options>
    </div>


    <section class="my-3">
        <div class="container">
            <div class="header-best-marcas d-flex">
                <h4 class="font-weight-bold mr-2">As melhores marcas</h4>
                <a href="" class="p-0 m-0">Visualizar todas</a>
            </div>

            <div class="slider"></div>

        </div>
    </section>

    <section class="my-3">
        <div class="container">
            <div class="header-best-marcas d-flex">
                <h4 class="font-weight-bold mr-2">Produtos mais vendidos</h4>
                <a href="" class="p-0 m-0">Visualizar todas</a>
            </div>

            <div class="d-flex flex-wrap my-3">
                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

                <div class="card-produto">
                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">Hi Bio-Fiber 2</h4>
                        <h5 class="marca-product">Hi hair care</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ 120,00</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="banner-landerpage">
        <div class="container">
            <div class="content-banner-landerpage align-items-center">
                <div class="col-md-6">
                    <h1 class="text-light mb-5">Tenha as melhores marcas com o melhor preço!</h1>
                    <div class="d-flex align-items-center">
                        <a href="" class="btn-outline mr-4">Quero me cadastrar</a>
                        <a href="" class="text-light">Já tenho minha conta</a>
                    </div>
                </div>
                <img src="{{asset('assets/images/banner-aux.png')}}" class="foto-banner" alt="">
            </div>
        </div>
    </section>




    <section class="my-3">
        <div class="container">
            <div class="header-best-marcas d-flex ml-3">
                <h4 class="font-weight-bold mr-2">Categorias</h4>
                <a href="" class="p-0 m-0">Visualizar todos produtos</a>
            </div>

            <div class="d-flex flex-wrap my-3">
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>

                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>

                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
                <div class="card-categoria-home">
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                    <a class="text-category" >Exemplo</a>
                </div>
            </div>
        </div>
    </section>



@endsection
