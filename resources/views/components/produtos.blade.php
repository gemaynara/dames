<?php $maisVendidos = (new \App\Services\ProdutoService())->maisVendidos(); ?>
<section class="py-3">
    <div class="container">
        <div class="header-best-marcas d-flex ml-3">
            <h4 class="font-weight-bold mr-2">Produtos mais vendidos</h4>
            <a href="{{route('salao.produtos')}}" class="pt-2 text-underlineo text-color-primary pb-0 m-0">Visualizar todos</a>
        </div>

        <div class="d-flex flex-wrap my-3">
            @foreach($maisVendidos as $produto)
                <a href="{{route('salao.produtos.detalhes',[ 'id'=>$produto->id,'slug'=> $produto->slug])}}">
                    <div class="card-produto">
                        <div class="header-card-produto" style="background: url('{{asset('/images/produtos/'. $produto->imagem)}}');">
                        </div>
                        <div class="footer-card-produto">
                            <h4 class="name-product">{{$produto->nome}}</h4>
                            <h5 class="marca-product">{{$produto->marca}}</h5>
                            {{--                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ @money($produto->valor)</h4>--}}
                            <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                        </div>

                    </div>
                </a>

            @endforeach
        </div>
    </div>
</section>
