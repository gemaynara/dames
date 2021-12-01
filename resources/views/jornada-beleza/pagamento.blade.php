@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <div class="right-pay col-lg-5 py-5">
            <nav aria-label="breadcrumb p-0 m-0">
                <ol class="breadcrumb bg-none px-0 mx-0">
                    <li class="breadcrumb-item font-weight-bold "><a href="#">Home</a></li>
                    <li class="breadcrumb-item font-weight-bold "><a href="#">Informatica</a></li>
                    <li class="breadcrumb-item font-weight-bold  active" aria-current="page">Apple</li>
                </ol>
            </nav>

            <div class="header-contact d-flex justify-content-between">
                <h4>Contato</h4>
                <a href="{{route('login')}}">Já possui uma conta? <strong>Login</strong></a>
            </div>
            <input type="text" placeholder="E-mail ou número de telefone" class="form-control">
            <div class="d-flex align-items-center">
                <input type="checkbox" class="mr-2" name="" id="">
                <label for="" class="my-2 mr-2">Me adicionar no newsletter da Dames para obter 10%
                    desconto</label>
            </div>

            <div class="mt-5">
                <h3>Informações do Endereço</h3>

                <form>
                    <div class="row my-2">
                        <div class="col">
                            <input type="text" class="form-control-register col" placeholder="Nome">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-register col" placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <input type="text" class="form-control-register col " placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <input type="text" class="form-control-register col" placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <select name="" class="form-control-register col" id="">
                                <option value="">Cidade</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="" class="form-control-register col" id="">
                                <option value="">CEP</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="" class="form-control-register col" id="">
                                <option value="">Estado</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <input type="checkbox" class="mr-2" name="" id="">
                        <label for="" class="my-2 mr-2">Salvar informações para próxima compra</label>
                    </div>

                </form>

            </div>


            <div class="d-flex align-items-center my-5">
                <a href="{{route('jornada.carrinho')}}" class="mr-4 voltar">Voltar para o carrinho</a>
                <a href="" class="btn-prosseguir">Prosseguir</a>
            </div>

        </div>

        <div class="left-pay col-md-5 py-5">

            <div class="header-products pb-5">
                <?php $subtotalItems = 0.00 ; $frete = 185.33?>
                @foreach($items['produtos'] as $item)
                    <div class="card-product-pay d-flex  ">
                        <img src="{{ is_null($item->imagem) ? asset('images/no-photo.jpg'): asset('images/produtos/'.$item->imagem)}}" class="img-product-pay" alt="" >
                        <div class="d-flex flex-column detalhe-product-pay">
                            <h3>{{$item->produto}}</h3>
                            <h4>R$ @money($item->subtotal)</h4>
                            <?php $subtotalItems+=$item->subtotal?>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="cupom d-flex py-3">
                <input type="text" placeholder="Código de cupom" class="form-control-register col mr-2">
                <button class="btn-add-cupom">Adicionar cupom</button>
            </div>

            <div class="price py-1 ">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="pb-0 pt-2">Subtotal</p>
                    <p class="pb-0 pt-2">R$ @money($subtotalItems)</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="pb-0 pt-2">Frete</p>
                    <p class="pb-0 pt-2">R$ @money($frete)</p>
                </div>
            </div>

            <div class="total">
                <div class="d-flex justify-content-between  align-items-center">
                    <p class="pb-0 pt-2">Total</p>
                    <p class="pb-0 pt-2">R$ @money($subtotalItems+$frete)</p>
                </div>
            </div>

        </div>


    </div>
@endsection
