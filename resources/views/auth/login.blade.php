@extends('layouts.app')

@section('content')
    <div class="container content-login d-flex align-items-center">
        <div class="body-login">
            <div class="d-flex align-items-center justify-content-between">
                <div class="left-login col-md-6 col-lg-4">
                    <h1>O lugar perfeito para seu salão beleza!</h1>
                    <p>Não tem cadastro ainda?<a href="{{route('pre-register')}}"> Clique aqui e cadastre-se</a></p>
                </div>
                <div class="right">
                        <div class="card-login">
                            <div class="card-body d-flex flex-column justify-content-center" style="height: 100%;">
                                @include('layouts.flash-message')
                                <h1>Seja bem vindo</h1>
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="d-flex flex-column form-login">
                                        <input type="email" class="form-input-login my-2" placeholder="E-mail" name="email" value="{{old('email')}}" required>
                                        <input type="password" class="form-input-login my-2" placeholder="Senha" name="password" id="password" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="d-flex check-login justify-content-between">
                                        <label class="m-o p-0">
                                            <input class="m-o p-0" type="checkbox">
                                            Lembrar de mim
                                        </label>
                                        <a href="{{ route('forgot-password') }}">Esqueci minha senha</a>
                                    </div>

                                    <button class="btn-login" type="submit">Entrar em minha conta</button>
                                </form>
                            </div>
                        </div>

                </div>
            </div>

        </div>


        {{--    <div class="row justify-content-center">--}}
        {{--        <div class="col-md-8">--}}
        {{--            <div class="card">--}}
        {{--                <div class="card-header">{{ __('Login') }}</div>--}}

        {{--                <div class="card-body">--}}
        {{--                    <form method="POST" action="{{ route('login') }}">--}}
        {{--                        @csrf--}}

        {{--                        <div class="form-group row">--}}
        {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

        {{--                            <div class="col-md-6">--}}
        {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

        {{--                                @error('email')--}}
        {{--                                    <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                                @enderror--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="form-group row">--}}
        {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

        {{--                            <div class="col-md-6">--}}
        {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

        {{--                                @error('password')--}}
        {{--                                    <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                                @enderror--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="form-group row">--}}
        {{--                            <div class="col-md-6 offset-md-4">--}}
        {{--                                <div class="form-check">--}}
        {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

        {{--                                    <label class="form-check-label" for="remember">--}}
        {{--                                        {{ __('Remember Me') }}--}}
        {{--                                    </label>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="form-group row mb-0">--}}
        {{--                            <div class="col-md-8 offset-md-4">--}}
        {{--                                <button type="submit" class="btn btn-primary">--}}
        {{--                                    {{ __('Login') }}--}}
        {{--                                </button>--}}

        {{--                                @if (Route::has('password.request'))--}}
        {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
        {{--                                        {{ __('Forgot Your Password?') }}--}}
        {{--                                    </a>--}}
        {{--                                @endif--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </form>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
    </div>
@endsection
