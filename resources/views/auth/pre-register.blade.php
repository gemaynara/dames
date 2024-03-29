@extends('layouts.app')

@section('content')
    <div class="body-pre-cadastro" style=" background: url('{{asset('assets/images/banner-pre-cadastro.png')}}') ">
        <div class="d-flex flex-column">
            <h1 class="text-light text-center py-3">Escolha o seu perfil</h1>
            <div class="container content-pre-register d-flex align-items-center">
                <div class="body-login">
                    <div class="d-flex align-items-center justify-content-center">
                            <div class="d-flex justify-content-around w-75">
                                <div class="left">
                                    <a href="{{route('register', ['tipo'=> "S"])}}">
                                        <div class="card-tipos d-flex flex-column justify-content-between"
                                             style="height: 100%;">
                                            <div class="header-salao" style="background: url('{{asset('assets/images/salao.png')}}')">

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
                                    <a href="{{route('register', ['tipo'=> "D"])}}">
                                    <div class="">
                                        <div class="card-tipos d-flex flex-column justify-content-between"
                                             style="height: 100%;">
                                            <div class="header-distribuidor" style="background: url('{{asset('assets/images/destribuidora.png')}}')">
                                            </div>
                                            <div class="footer-distribuidor">
                                                <h2>Distribuidora</h2>
                                                <p>descrição exemplo, descrição exemplo,
                                                    descrição exemplo,descrição exemplo,</p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
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
