@foreach($produtos as $produto)
    <div class="d-flex justify-content-between">
        <a href="{{route('salao.produtos.detalhes',[ 'id'=>$produto->id,'slug'=> $produto->slug])}}">
            <div class="mr-2 card-product" style="">
                <img
                    src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        {{$produto->nome}}
                    </p>
                    @if(auth()->guest())
                        <h4 style="filter: blur(4px)!important;">R$ @money(rand(0,999))</h4>
                    @else
                        <h4>R$ @money($produto->valor)</h4>
                    @endif
                    <p class="product-description">{{ \Str::limit($produto->descricao,70)}}</p>
                </div>
            </div>
        </a>
    </div>
@endforeach
