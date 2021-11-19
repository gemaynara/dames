@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <nav aria-label="breadcrumb p-0 m-0">
            <ol class="breadcrumb bg-none px-0 mx-0">
                <li class="breadcrumb-item font-weight-bold "><a href="#">Home</a></li>
                <li class="breadcrumb-item font-weight-bold "><a href="#">Categorias</a></li>
            </ol>
        </nav>


        <h2 class="mb-3">Categorias</h2>

        @foreach($categorias as $categoria)
            <div class="card-categoria-home">
                @if(!empty($categoria->caminho_imagem))
                    <img src="{{asset('assets/images/categorias/'. $categoria->caminho_imagem)}}" alt="">
                @else
                    <img src="{{asset('assets/images/Vector.png')}}" alt="">
                @endif
                <a class="text-category">{{$categoria->nome}}</a>
            </div>
        @endforeach>


    </div>
@endsection
