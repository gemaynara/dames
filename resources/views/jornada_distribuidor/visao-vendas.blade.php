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

    <div class=" py-5">
        <div class="container">
            <h1>Status de pagamentos:</h1>
            <div class="d-flex justify-content-between">
                <div class="card-status-pag box-shadow-card-pag">
                    <div class="header-status" style="background:#FF6363 "></div>
                    <h3>10</h3>
                    <p>Cancelados</p>
                    <a href="">visualizar detalhes</a>
                </div>
                <div class="card-status-pag box-shadow-card-pag">
                    <div class="header-status" style="background:#59D499 "></div>
                    <h3>222</h3>
                    <p>Aprovados</p>
                    <a href="">visualizar detalhes</a>
                </div>
                <div class="card-status-pag box-shadow-card-pag">
                    <div class="header-status" style="background:#FF9217 "></div>
                    <h3>52</h3>
                    <p>Vencido</p>
                    <a href="">visualizar detalhes</a>
                </div>
                <div class="card-status-pag box-shadow-card-pag">
                    <div class="header-status" style="background: #56C2FF"></div>
                    <h3>32</h3>
                    <p>Em aguardo</p>
                    <a href="">visualizar detalhes</a>
                </div>
            </div>
        </div>
    </div>

@endsection
