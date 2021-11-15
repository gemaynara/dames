@extends('layouts.app')

@section('content')

    <div class="container py-5 min-height-card">
        <div class="header-carrinho">
            <h4 class="my-3">Itens do seu carrinho</h4>
            <a href="" class="my-2">Voltar a comprar</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Valor</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class="d-flex">
                    <div class="img-product">
                        <img
                            src="https://www.nagem.com.br/produto/imagens/534951"
                            alt="">
                    </div>
                    <div class="descripton">
                        <h5 class="font-weight-lighter">Smart TV Samsung 55" Q60A 4K QLED Som em Movimento Virtual
                            Design sem Limites Visual Livre
                            de Cabos Alexa Built In</h5>
                        <a href="" class="remove-action">Remover</a>
                    </div>

                </th>
                <td>4.199,00</td>
                <td>1</td>
                <td>4.199,00</td>
            </tr>
            </tbody>
        </table>

        <hr>
        <div class="frete d-flex justify-content-end">

            <div class="valor d-flex align-items-center justify-content-center">
                <p class="p-0 my-0 mx-2">Sub-total  R$ 6.000,00</p>
                <button class="btn-comprar-rapido">Comprar</button>
            </div>
        </div>


    </div>
@endsection
