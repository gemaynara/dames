@extends('layouts.app')

@section('content')
    <header class="content-banner">
        <div class="container">
            <div class="banner d-flex justify-content-between">
                <div class="left d-flex flex-column">
                    <h1 class="title-salao">O lugar perfeito para <br> seu salão beleza!</h1>
                    <div class="options d-flex">
                        <a class="nav-link btn-primary-banner text-light" href="{{route('pre-register')}}">Efetuar
                            cadastro</a>
                        <a class="nav-link nav-login" href="{{route('login')}}">Já tenho conta</a>
                    </div>
                </div>
                <div class="right">
                    <img src="{{asset('assets/images/celular.png')}}" alt="">
                </div>
            </div>
        </div>
    </header>
    {{--    <div class="container passos">--}}
    {{--        <options class="d-flex justify-content-around">--}}
    {{--            <div class="card-passos d-flex align-items-center">--}}
    {{--                <div class="icon-card">--}}
    {{--                    <img src="{{asset('assets/images/veiculo.svg')}}" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="content-card-passos">--}}
    {{--                    <h4>Compras rapidas </h4>--}}
    {{--                    <p>Entregamos em até 24hrs após a confirmação da compra</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="card-passos d-flex align-items-center">--}}
    {{--                <div class="icon-card">--}}
    {{--                    <img src="{{asset('assets/images/veiculo.svg')}}" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="content-card-passos mt-3">--}}
    {{--                    <h4>Compras rapidas </h4>--}}
    {{--                    <p>Entregamos em até 24hrs após a confirmação da compra</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="card-passos d-flex align-items-center">--}}
    {{--                <div class="icon-card">--}}
    {{--                    <img src="{{asset('assets/images/veiculo.svg')}}" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="content-card-passos">--}}
    {{--                    <h4>Compras rapidas </h4>--}}
    {{--                    <p>Entregamos em até 24hrs após a confirmação da compra</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </options>--}}
    {{--    </div>--}}


    {{--    <section class="my-3">--}}
    {{--        <div class="container">--}}
    {{--            <div class="header-best-marcas d-flex">--}}
    {{--                <h4 class="font-weight-bold mr-2">As melhores marcas</h4>--}}
    {{--                <a href="" class="p-0 m-0">Visualizar todas</a>--}}
    {{--            </div>--}}

    {{--            <div class="slider"></div>--}}

    {{--        </div>--}}
    {{--    </section>--}}

    <div class="bg-primary">
        @include('components.products')
    </div>
    <section class="banner-landerpage">
        <div class="container">
            <div class="content-banner-landerpage align-items-center">
                <div class="col-md-6 content-banner-landerpage-text">
                    <h1 class="text-light mb-5">Tenha as melhores marcas com o melhor preço!</h1>
                    <div class="d-flex align-items-center">
                        <a href="{{route('pre-register')}}" class="btn-outline mr-4">Quero me cadastrar</a>
                        <a href="{{route('login')}}" class="text-light">Já tenho minha conta</a>
                    </div>
                </div>
                <img src="{{asset('assets/images/banner-aux.png')}}" class="foto-banner" alt="">
            </div>
        </div>
    </section>



    @include('components.categorias')



@endsection
