@extends('layouts.app')

@section('content')
    <div class="body-reset-senha">
        <div class="container content-login d-flex align-items-center">
            <div class="body-login">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="">
                        <div class="card-recuperar-senha">
                            <div class="card-body d-flex flex-column justify-content-center" style="height: 100%;">
                                <h1>Esqueceu sua senha?</h1>
                                <p>Fique tranquilo, iremos te ajudar na recuperação de sua senha em poucos instantes.
                                    Insira
                                    o seu email de cadastro e enviaremos uma código de recuperação.</p>
                                <form action="{{route('password.email')}}">
                                    <div class="d-flex flex-column form-login">
                                        <input type="email" class="form-input-recuperar-senha my-2" placeholder="Email"
                                               name="email">
                                    </div>
                                    <button class="btn-login">Recuperar minha senha</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
