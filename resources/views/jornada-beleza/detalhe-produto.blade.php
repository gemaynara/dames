@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <nav aria-label="breadcrumb">
            {{ Breadcrumbs::render('categoria-produto', $produto['produto']->categoria, $produto['produto']->nome) }}
        </nav>

        <div class="d-flex">
            <div class="product d-flex align-items-center">
                <div class="">
                    <div class="">
                        <div class="card-img-product d-flex">
                            <div class="min-photo">
                                <ul>
                                    @foreach($produto['imagens'] as $img)
                                        <li>
                                            <img class="image-list"
                                                 src="{{asset('images/produtos/'. $img->diretorio)}}"
                                                 alt="" width="50px">

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="max-photo ml-5">
                                <img class="current-image"
                                     src="{{asset('images/produtos/' . $produto['imagens'][0]->diretorio)}}"
                                     alt="" width="100px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description-product ml-5 col-lg-5">
                <h2>{{$produto['produto']->nome}}</h2>
                <p> {{$produto['produto']->descricao}} </p>
                @if(auth()->guest())
                    <h3 style="filter: blur(4px)!important;">R$ @money(rand(0,999))
                        <sub><span>R$ @money($produto['produto']->valor_desconto)</span></sub>
                    </h3>

                @else
                    <h3> R$ @money($produto['produto']->valor)
                        @if(!is_null($produto['produto']->valor_desconto))
                            <sub><span>R$ @money($produto['produto']->valor_desconto)</span></sub>
                        @endif
                    </h3>
                @endif



                {{--                <a href="" class="btn btn-puper"><i class="fas fa-shopping-cart"></i> Comprar</a>--}}
                {{--                <hr>--}}

                <div class="options-card">
                    <label for="">
                        {{$produto['produto']->estoque > 0? 'Estoque disponível': 'Produto Esgotado'}}
                    </label>
                    <div class="d-flex">
                        <select name="qtd-produto" id="" class="form-custo-detail mr-2">
                            <option value="" class="form-custo-detail ">Quantidade</option>
                        </select>
                        <input type="text" class="form-custo-detail" placeholder="Calcular frete">
                    </div>

                    <a href="" class="btn-compra">Comprar</a>

                    <form action="{{route('salao.add-produto-carrinho')}}" method="post">
                        @csrf
                        <input type="hidden" name="produto_id" value="{{$produto['produto']->id}}">
                        <button type="submit" class="btn-add-cart">Adicionar ao carrinho</button>
                    </form>
                    <div class="d-flex">
                        <p>Vendido e entregue por: Nome da loja </p>
                        <p> Avaliação:</p>
                        <span class="stars" data-rating="{{ $produto['produto']->rating }}"></span>

                    </div>
                </div>

            </div>
        </div>
        <hr>

        <div class="">
            <div class="">
                <div class="card-body">
                    <h3 class="card-title">Informações do produto</h3>
                    <p class="card-text">
                        {{$produto['produto']->detalhes}}
                    </p>

                </div>
            </div>
        </div>

        <div class="">
            <div class="">
                <div class="card-body">
                    <h3 class="card-title">Comentários recentes</h3>
                    @foreach($produto['produto']->review as $review)
                        <p class="card-text">
                            <span class="stars" data-rating="{{ $review->rating }}"></span> -
                            {{$review->user->name}} - {{\Carbon\Carbon::parse($review->updated_at)->format('d/m/Y H:i')}}
                            <br>
                            {{$review->comment}}
                        </p>
                    @endforeach

                </div>
            </div>
        </div>


    </div>

@endsection

