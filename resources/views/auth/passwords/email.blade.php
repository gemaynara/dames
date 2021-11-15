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
                                @include('layouts.flash-message')
                                <form action="{{route('forgot-password')}}" method="POST">
                                    @csrf
                                    <div class="d-flex flex-column form-login">
                                        <input type="email" class="form-input-recuperar-senha my-2" placeholder="Email"
                                               id="email_address" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <button class="btn-login" type="submit">Recuperar minha senha</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
