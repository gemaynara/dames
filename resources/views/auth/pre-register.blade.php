@extends('layouts.app')

@section('content')
    <div class="body-pre-cadastro">
        <div class="d-flex flex-column">
            <h1 class="text-light text-center py-3">Escolha o seu perfil</h1>
            <div class="container content-pre-register d-flex align-items-center">
                <div class="body-login">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex justify-content-around w-75">
                            <div class="left">
                                <a href="{{route('register')}}">
                                    <div class="card-tipos d-flex flex-column justify-content-between"
                                         style="height: 100%;">
                                        <div class="header-salao">

                                        </div>
                                        <div class="footer-salao">
                                            <h2>Salão de beleza</h2>
                                            <p>descrição exemplo, descrição exemplo,
                                                descrição exemplo,descrição exemplo,</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="right">
                                <div class="">
                                    <div class="card-tipos d-flex flex-column justify-content-between"
                                         style="height: 100%;">
                                        <div class="header-distribuidor">

                                        </div>
                                        <div class="footer-distribuidor">
                                            <h2>Distribuidora</h2>
                                            <p>descrição exemplo, descrição exemplo,
                                                descrição exemplo,descrição exemplo,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center py-4">
                <a href="{{route('login')}}" class="btn-login col-3">Entrar em minha conta</a>
            </div>

        </div>
    </div>
@endsection
