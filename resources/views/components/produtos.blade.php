<?php $maisVendidos = (new \App\Services\ProdutoService())->maisVendidos(); ?>
<section class="my-3">
    <div class="container">
        <div class="header-best-marcas d-flex">
            <h4 class="font-weight-bold mr-2">Produtos mais vendidos</h4>
            <a href="{{route('salao.produtos')}}" class="p-0 m-0">Visualizar todos</a>
        </div>

        <div class="d-flex flex-wrap my-3">
            @foreach($maisVendidos as $produto)
                <div class="card-produto">

                    <div class="header-card-produto" style="background: url('{{asset('assets/images/produto.png')}}')">
                    </div>
                    <div class="footer-card-produto">
                        <h4 class="name-product">{{$produto->nome}}</h4>
                        <h5 class="marca-product">{{$produto->marca}}]</h5>
                        <h4 class="preco-produto p-0 mb-0 mt-3">R$ @money($produto->valor)</h4>
                        <p class="qtd-parcelas p-0 m-0">Em até 12x sem juros</p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
