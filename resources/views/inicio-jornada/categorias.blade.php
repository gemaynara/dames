@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <nav aria-label="breadcrumb p-0 m-0">
            {{ Breadcrumbs::render('categorias') }}
        </nav>

        <h2 class="mb-3">Categorias</h2>-

        <div class="d-flex flex-wrap ">
            @foreach($categorias as $categoria)
                <div class="card-categoria-home">
                    @if(!empty($categoria->imagem))
                        <img src="{{asset('images/categorias/'. $categoria->imagem)}}" alt="{{$categoria->nome}}" width="100px">
                    @else
                        <img src="{{asset('assets/images/Vector.png')}}" alt="{{$categoria->nome}}">
                    @endif
                    <a class="text-category">{{$categoria->nome}}</a>
                </div>
            @endforeach

        </div>


    </div>
@endsection
