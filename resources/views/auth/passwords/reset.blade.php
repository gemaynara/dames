@extends('layouts.app')

@section('content')
    <div class="body-reset-senha">
        <div class="container content-login d-flex align-items-center">
            <div class="body-login">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="">
                        <div class="card-recuperar-senha">
                            <div class="card-body d-flex flex-column justify-content-center" style="height: 100%;">
                                <h1>Redefinir Senha</h1>
                                @include('layouts.flash-message')
                                <form action="{{route('reset-password')}}" method="POST">
                                    @method('post')
                                    @csrf
                                    <div class="d-flex flex-column form-login">
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <input type="email" class="form-input-recuperar-senha my-2" placeholder="Email"
                                               id="email_address" name="email" required >
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="d-flex flex-column form-login">
                                        <input type="password" id="password" class="form-input-recuperar-senha my-2"
                                               placeholder="Senha" name="password"
                                               required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex flex-column form-login">
                                        <input type="password" id="password-confirm"
                                               class="form-input-recuperar-senha my-2" placeholder="Repita a Senha"
                                               name="password_confirmation" required>
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                    <button class="btn-login" type="submit">Redefinir minha senha</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
