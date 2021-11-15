@extends('layouts.app')

@section('content')
    <div class="body-reset-senha">
        <div class="container content-login d-flex align-items-center">
            <div class="body-login">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="">
                        <div class="card-recuperar-senha">
                            <div class="card-body d-flex flex-column justify-content-center" style="height: 100%;">
                                <h1>Redefinição de Senha</h1>
                                <p>Foi solicitado no site um reset de senha para este e-mail</p>
                                <a class="btn-login" href="{{ route('reset-password-token', ['token'=>$token]) }}">Clique
                                    aqui para alterar a senha.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


