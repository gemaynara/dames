@extends('layouts.app')
@section('content')
    @include('jornada-distribuidor.modal-produto')
    <div class="products-distribuidora">
        <div class="container py-5">
            @include('layouts.flash-message')
            <div class="d-flex mt-5 justify-content-between" style="width: 100%;flex: 1">
                <div class="products flex-1  col">
                    <div class="d-flex justify-content-between">
                        <h1 class="">Meus Produtos</h1>
                        <div class="d-flex col justify-content-end align-items-center">
                            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mr-2">
                                Adicionar produto
                            </button>
                            <select name="" id="" class="form-control col-2">
                                <option value="">Categorias</option>
                            </select>
                        </div>
                    </div>
                    <hr>

                    <div class="body-product mt-3">
                        <div class="d-flex flex-wrap ">
                            @foreach($produtos as $produto)
                                <a href="#"
                                   class='item-produt'>
                                    <div class="mr-2 card-product-distribuidora" style="">
                                        <img
                                            src="{{ is_null($produto->imagem) ? asset('images/no-photo.jpg'): asset('images/produtos/'.$produto->imagem) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">
                                                {{$produto->nome}}
                                            </p>
                                            <h4>R$ @money($produto->valor)</h4>
                                            <p>{{ \Str::limit($produto->descricao,70)}}</p>
                                        </div>
                                    </div>
                                </a>

                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>




@endsection
