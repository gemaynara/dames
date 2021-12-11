@extends('layouts.app')

@section('content')


    @include('components.slider-header')


    <section class="my-3">
        <div class="container">
            <div class="header-best-marcas d-flex">
                <h4 class="font-weight-bold mr-2">As melhores marcas</h4>
                <a href="{{route('salao.marcas')}}" class="p-0 m-0">Visualizar todas</a>
            </div>

            <div class="slider"></div>

        </div>
    </section>

    @include('components.produtos')

    <section class="banner-landerpage my-5">
        <div class="container">
            <div class="content-banner-landerpage align-items-center">
                <div class="col-md-6 content-banner-landerpage-text">
                    <h1 class="text-light mb-5">Busque por categorias</h1>
                    <p class="text-light mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore</p>
                    <a href="" class="btn-ver-categorias ">Ver categorias</a>
                </div>

                <img src="{{asset('assets/images/logo-gg.svg')}}" class="foto-fundo-line" alt="">
                <img src="{{asset('assets/images/banner-categorias.png')}}" class="foto-category" alt="">
            </div>
        </div>
    </section>



    @include('components.categorias')



@endsection
