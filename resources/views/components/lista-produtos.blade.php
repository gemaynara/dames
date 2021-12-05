@foreach($produtos as $produto)
    <div class="d-flex justify-content-between scrolling-pagination">

        <div class="mr-2 card-product">
            <img
                src="{{ is_null($produto->imagem) ? asset('images/no-photo.jpg'): asset('images/produtos/'.$produto->imagem) }}"
                class="card-img-top" alt="">
            <div class="card-body">
                <a href="{{route('salao.produtos.detalhes',[ 'id'=>$produto->id,'slug'=> $produto->slug])}}">
                    <p class="card-text">
                        {{$produto->nome}}
                    </p>
                    @if(auth()->guest())
                        <h4 style="filter: blur(4px)!important;">R$ @money(rand(0,999))</h4>
                    @else
                        <h4>R$ @money($produto->valor)</h4>
                    @endif
                    <p class="product-description">{{ \Str::limit($produto->descricao,70)}}</p>
                </a>

                <div class="d-flex justify-content-between">
                    <div class="avaliacao ">
                        <span class="stars" data-rating="{{ $produto->averageRating }}"></span>
                    </div>
                    <div class="add_list favorito-action" data-id="{{$produto->id}}"
                         data-route="{{route('salao.produto-favorito')}}">
                        @if(count($produto->favorito))
                            <i class="fas fa-heart text-danger"></i>
                        @else
                            <i class="fas fa-heart bg-transparent"></i>
                        @endif
                        + <span class="p-0 m-0">lista</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach

