@extends('layouts.app')

@section('content')
    <div class="fundo">
        <div class="cantainer">
            <h2 class="py-4 text-center">Marcas</h2>
            <div class="container py-4">
                <div class="d-flex flex-wrap">
                    @foreach($marcas as $marca)
                        <a class="card-marca">
                            <img src="{{asset('/images/marcas/'. $marca->imagem)}}" alt="{{$marca->nome}}" width="100px">
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
