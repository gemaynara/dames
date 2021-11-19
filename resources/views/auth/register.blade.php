@extends('layouts.app')

@section('content')
    <div class="fundo">
        <div class="container">
            <div class="title-register text-center py-4">
                <h1>Preencha os dados de sua conta.</h1>
            </div>

            <div class="data-conta py-5 ">
                @include('layouts.flash-message')
                <form action="{{route('postRegister')}}" method="POST" class="form-custom-register" enctype="multipart/form-data">
                    @method("post")
                    @csrf
                    <input type="hidden" name="perfil" value="{{$tipo}}">
                    <div class="header-data-conta">
                        <h4 class="p-0 m-0 title-dado">Dados da conta</h4>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Nome" name="nome"
                                   value="{{old('nome')}}" required>
                            @if ($errors->has('nome'))
                                <span class="text-danger">{{ $errors->first('nome') }}</span>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Sobrenome"
                                   name="sobrenome" value="{{old('sobrenome')}}" required>
                            @if ($errors->has('sobrenome'))
                                <span class="text-danger">{{ $errors->first('sobrenome') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="password" class="form-control-register col-lg-12" placeholder="Senha"
                                   name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col">
                            <input type="password" class="form-control-register col-lg-12"
                                   placeholder="Confirmação de senha" name="confirm_password" required>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="email" class="form-control-register col-lg-12" placeholder="Email" name="email"
                                   value="{{old('email')}}" required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col">
                            <input type="email" class="form-control-register col-lg-12"
                                   placeholder="Confirmação de email" name="confirm_email" required>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12 telefone" placeholder="Telefone"
                                   name="telefone" value="{{old('telefone')}}" minlength="11" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12 celular" placeholder="Celular" minlength="13"
                                   name="celular" value="{{old('celular')}}">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12 cpf" placeholder="CPF" name="cpf"
                                   value="{{old('cpf')}}" required>
                            @if ($errors->has('cpf'))
                                <span class="text-danger">{{ $errors->first('cpf') }}</span>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12 cnpj" placeholder="CNPJ"
                                   name="cnpj" value="{{old('cnpj')}}" required>
                            @if ($errors->has('cnpj'))
                                <span class="text-danger">{{ $errors->first('cnpj') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="header-data-conta">
                        <h4 class="p-0 m-0 title-endereco">Endereço residencial</h4>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-3">
                            <input type="text" class="form-control-register col-lg-12 cep" placeholder="CEP"
                                   id="cep-residencial" name="residencial[cep]" value="{{old('residencial[cep]')}}"
                                   required>
                            <span class="text-danger cep-residencial"></span>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Endereço"
                                   id="residencial-end" name="residencial[endereco]"
                                   value="{{old('residencial[endereco]')}}" required>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="form-control-register col-lg-12 numero" placeholder="Número"
                                   name="residencial[numero]" value="{{old('residencial[numero]')}}" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Bairro"
                                   name="residencial[bairro]" id="residencial-bairro"
                                   value="{{old('residencial[bairro]')}}" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Complemento"
                                   name="residencial[complemento]" value="{{old('residencial[complemento]')}}">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Cidade"
                                   name="residencial[cidade]" id="residencial-cidade"
                                   value="{{old('residencial[cidade]')}}" required>
                        </div>
                        <div class="col">
                            {{--                            <input type="text" class="form-control-register col-lg-12" placeholder="Estado" name="residencial[estado]"  id="residencial-uf" value="{{old('residencial[estado]')}}">--}}
                            <select name="residencial[estado]" id="residencial-uf"
                                    class="form-control-register col-lg-12" required>
                                <option value="" selected>Estado</option>
                                @foreach($estados as $uf)
                                    <option value="{{$uf->abreviacao}}">{{$uf->estado}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="header-data-conta">
                        <h4 class="p-0 m-0 title-endereco-comercial">Endereço comercial</h4>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-3">
                            <input type="text" class="form-control-register col-lg-12 cep" placeholder="CEP"
                                   name="comercial[cep]" id="cep-comercial" value="{{old('comercial[cep]')}}" required>
                            <span class="text-danger cep-comercial"></span>
                        </div>
                        <div class="col-lg-7">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Endereço"
                                   name="comercial[endereco]" id="comercial-end" value="{{old('comercial[endereco]')}}"
                                   required>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="form-control-register col-lg-12 numero " placeholder="Número"
                                   name="comercial[numero]" value="{{old('comercial[numero]')}}" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Bairro"
                                   name="comercial[bairro]" id="comercial-bairro" value="{{old('comercial[bairro]')}}"
                                   required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Complemento"
                                   name="comercial[complemento]" value="{{old('comercial[complemento]')}}">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Cidade"
                                   name="comercial[cidade]" id="comercial-cidade" value="{{old('comercial[cidade]')}}" required>
                        </div>
                        <div class="col">
                            {{--                            <input type="text" class="form-control-register col-lg-12" placeholder="Estado" name="comercial[estado]" id="comercial-uf" value="{{old('comercial[estado]')}}">--}}
                            <select name="comercial[estado]" id="comercial-uf" class="form-control-register col-lg-12"
                                    required>
                                <option value="" selected>Estado</option>
                                @foreach($estados as $uf)
                                    <option value="{{$uf->abreviacao}}">{{$uf->estado}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div style="display: {{$tipo == "S" ? 'block': 'none'}}" class="div-cnae">
                        <div class="header-data-conta">
                            <h4 class="p-0 m-0 title-CNAE">Validação de CNAE</h4>
                        </div>

                        <label for="file"
                               class="form-control-register col-lg-4 d-flex align-items-center justify-content-between my-3">
                            Anexar documento <i class="fas fa-plus"></i>
                        </label>
                        <input type="file" id="file" name="file" class="d-none file-cnae" accept=".pdf">
                        <span class="name-file">Nenhum arquivo selecionado.</span>

                    </div>
                    <div class="d-flex align-items-center justify-content-center py-4">
                        <button type="submit" class="btn-login col-3">Confirmar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
