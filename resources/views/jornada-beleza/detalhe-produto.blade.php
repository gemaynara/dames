@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <nav aria-label="breadcrumb">
            {{ Breadcrumbs::render('categoria-produto', $produto->categoria->nome, $produto->nome) }}
        </nav>

        <div class="d-flex">
            <div class="product d-flex align-items-center">
                <div class="">
                    <div class="">
                        <div class="card-img-product d-flex">
                            <div class="min-photo">

                                @if(count($produto->images)> 0)
                                    <ul>
                                        @foreach($produto->images as $img)
                                            <li>
                                                <img class="image-list"
                                                     src="{{asset('images/produtos/'. $img->diretorio)}}"
                                                     alt="" width="50px">
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <ul>
                                        <li>
                                            <img class="image-list"
                                                 src="{{asset('images/no-photo.jpg')}}"
                                                 alt="" width="50px">
                                        </li>
                                    </ul>

                                @endif
                            </div>
                            <div class="max-photo ml-5">
                                <img class="current-image"
                                     src="{{isset($produto->images[0]->diretorio)? (asset('images/produtos/' . $produto['imagens'][0]->diretorio)): asset('images/no-photo.jpg')}}"
                                     alt="" width="100px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description-product ml-5 col-lg-5">
                <h2>{{$produto->nome}}</h2>
                <p> {{$produto->descricao}} </p>
                @if(auth()->guest())
                    <h3 style="filter: blur(4px)!important;">R$ @money(rand(0,999))
                        <sub><span>R$ @money($produto->valor_desconto)</span></sub>
                    </h3>

                @else
                    <h3> R$ @money($produto->valor)
                        @if(($produto->valor_desconto > 0))
                            <sub><span>R$ @money($produto->valor_desconto)</span></sub>
                        @endif
                    </h3>
                @endif
                <div class="options-card">
                    <label for="">
                        {{$produto->estoque > 0? 'Estoque disponível': 'Produto Esgotado'}}
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
                        <input type="hidden" name="produto_id" value="{{$produto->id}}">
                        <button type="submit" class="btn-add-cart">Adicionar ao carrinho</button>
                    </form>
                    <div class="d-flex">
                        <p class="mr-2">Vendido e entregue por: <strong> {{$produto->distribuidor->name}} </strong></p>
                        <p>Avaliação:</p>
                        <span class="stars" data-rating="{{ $produto->rating }}"></span>

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
                        {{$produto->detalhes}}
                    </p>

                </div>
            </div>
        </div>

        <div class="">
            <div class="">
                <div class="card-body">
                    <h3 class="card-title">Comentários recentes</h3>

                    <form action="" class="mt-2 mb-4 d-flex">
                        <input type="text" placeholder="Escreva sua pergunta" class="form-control col mr-2">
                        <button type="submit" class="btn btn-primary">Enviar pergunta</button>
                    </form>

                    @foreach($produto->review as $review)
                        <p class="card-text">
                            <span class="stars" data-rating="{{ $review->rating }}"></span> -
                            {{$review->user->name}}
                            - {{\Carbon\Carbon::parse($review->updated_at)->format('d/m/Y H:i')}}
                            <br>
                            {{$review->comment}}
                        </p>
                    @endforeach

                </div>
            </div>
        </div>


    </div>

@endsection

