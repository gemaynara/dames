<section class="my-3">
    <div class="container">
        <div class="header-best-marcas d-flex ml-3">
            <h4 class="font-weight-bold mr-2">Categorias</h4>
            <a href="{{route('jornada.categorias')}}" class="p-0 m-0">Visualizar todas as categoriaas</a>
        </div>

        <div class="d-flex flex-wrap my-3">
            @foreach($categorias as $categoria)
            <div class="card-categoria-home">
                <img src="{{asset('images/categorias/'. $categoria->imagem)}}" alt="{{$categoria->nome}}" width="100px">
                <a class="text-category"  href="{{route('salao.produtos.categoria', $categoria->nome)}}">{{$categoria->nome}}</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
