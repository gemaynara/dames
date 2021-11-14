@extends('layouts.app')

@section('content')


    <header class="header-graficos">
        <div class="container">
            <div class="cards-grafico d-flex flex-column">
                <h1 class="my-4 text-light">Visão geral de vendas</h1>
                <div class="d-flex">
                    <div class="left-grafico col"></div>
                    <div class="right-grafico col">

                        <div class="grafico-meta-vendas d-flex justify-content-between">
                            <div class="grafico-vendas col">
                                <div class="circle" id="circle1" style="width: 100%;">
                                    <canvas class="style-canvas"></canvas>
                                    <strong>25 Vendas</strong>
                                    <span>(75%)</span>
                                </div>
                            </div>
                            <div class="detail-graficos col">
                                <div class="header-detail-vendas text-left pt-3">
                                    <h3 class="mb-1">Meta de vendas</h3>
                                    <p class="m-0">Total arrecadado:</p>
                                    <h4>R$XXXX,XX</h4>
                                    <a href="">Definir nova meta</a>
                                </div>
                            </div>

                        </div>


                        <div class="status-pagamento mt-3 ">
                            <p class="text-light text-left mb-0">Status de pagamento: </p>
                            <div class="d-flex">
                                <div class="card-status-pag">
                                    <div class="header-status" style="background:#56C2FF "></div>

                                    <h3>32</h3>
                                    <p>Em andamento</p>
                                    <a href="">visualizar detalhes</a>
                                </div>
                                <div class="card-status-pag">
                                    <div class="header-status" style="background:#FF9217 "></div>
                                    <h3>52</h3>
                                    <p>Vencido</p>
                                    <a href="">visualizar detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section class="my-3">
        <div class="container">
            <div class="header-best-marcas d-flex">
                <h4 class="font-weight-bold mr-2">As melhores marcas</h4>
                <a href="" class="p-0 m-0">Visualizar todas</a>
            </div>

            <div class="slider"></div>

        </div>
    </section>

    @include('components.products')

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



    @include('components.category')



@endsection
