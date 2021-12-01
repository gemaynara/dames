@extends('layouts.app')

@section('content')

    <div class="container py-5 min-height-card">


        @if(!isset($carrinho['produtos']))
            <div class="header-carrinho">
                <h4 class="my-3">Carrinho Vazio</h4>
                <a href="{{route('salao.produtos')}}" class="my-2">Comece inserindo aqui</a>
            </div>

        @else
            <div class="header-carrinho">
                <h4 class="my-3">Itens do seu carrinho</h4>
                <a href="{{route('salao.produtos')}}" class="my-2">Voltar a comprar</a>
            </div>
        <div>
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
                    <?php $subtotalCarrinho = 0.00 ?>
                    @foreach($carrinho['produtos'] as $item)
                        <th class="d-flex">
                            <div class="img-product">
                                <img
                                src="{{ is_null($item->imagem) ? asset('images/no-photo.jpg'): asset('images/produtos/'.$item->imagem)}}"
                                    alt="">
                            </div>
                            <div class="descripton">
                                <h5 class="font-weight-lighter">{{$item->produto}}</h5>
                                <a class="remove-action remover-item" data-id="{{$item->id}}"
                                   data-route="{{route('salao.add-produto-favorito', $item->id)}}">Remover</a>
                            </div>


                        </th>
                        <td>@money($item->valor_unitario)</td>
                        <td>{{$item->quantidade}}</td>
                        <?php $subtotal = $item->valor_unitario * $item->quantidade;
                        $subtotalCarrinho += $subtotal; ?>
                        <td>@money($subtotal)</td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <hr>
            <div class="frete d-flex justify-content-end">

                <form action="{{route('salao.pagamento')}}" method="get">
                    <div class="valor d-flex align-items-center justify-content-center">
                        <p class="p-0 my-0 mx-2">Sub-total R$ @money($subtotalCarrinho)</p>
                        <button type="submit" class="btn-comprar-rapido">Finalizar</button>
                    </div>
                </form>

            </div>
        </div>
        @endif


    </div>
@endsection
