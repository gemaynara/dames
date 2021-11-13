@extends('layouts.app')

@section('content')
    <div class="fundo">
        <div class="container">
            <div class="title-register text-center py-4">
                <h1>Preencha os dados de sua conta.</h1>
            </div>

            <div class="data-conta py-5 ">

                <form action="" method="post" class="form-custom-register">
                    @csrf
                    <div class="header-data-conta">
                        <h4 class="p-0 m-0 title-dado">Dados da conta</h4>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Nome">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Sobrenome">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Senha">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12"
                                   placeholder="Confirmação de senha">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Email">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12"
                                   placeholder="Confirmação de email">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Telefone">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Celular">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="CPF">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="CNPJ">
                        </div>
                    </div>

                    <div class="header-data-conta">
                        <h4 class="p-0 m-0 title-endereco">Endereço residencial</h4>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <input type="text" class="form-control-register col-lg-12" placeholder="CEP">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Endereço">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Complemento">
                        </div>
                    </div>

                    <div class="header-data-conta">
                        <h4 class="p-0 m-0 title-endereco-comercial">Endereço comercial</h4>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <input type="text" class="form-control-register col-lg-12" placeholder="CEP">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Endereço">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col-lg-12" placeholder="Complemento">
                        </div>
                    </div>

                    <div class="header-data-conta">
                        <h4 class="p-0 m-0 title-CNAE">Validação de CNAE</h4>
                    </div>

                    <label for="file"
                           class="form-control-register col-lg-4 d-flex align-items-center justify-content-between my-3">
                        Anexar documento <i class="fas fa-plus"></i>
                    </label>

                    <input type="file" id="file" name="cnae" class="d-none">

                </form>

            </div>
        </div>
    </div>
@endsection
