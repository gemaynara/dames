@extends('layouts.app')

@section('content')
    <div class="fundo">
        <div class="cantainer">
            <h2 class="py-4 text-center">Marcas</h2>
            <div class="container py-4">
                <div class="d-flex flex-wrap">
                    @foreach($marcas as $marca)
                        <a class="card-marca" href="{{route('salao.produtos.marca', $marca->nome)}}">
                            @if(is_null($marca->imagem))
                                <img src="{{asset('images/no-photo.jpg')}}" alt="" width="100px" >
                            @else
                                <img src="{{asset('images/marcas/'. $marca->imagem)}}" alt="" width="150px">
                            @endif
                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
