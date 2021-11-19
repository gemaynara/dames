<section class="my-3">
    <div class="container">
        <div class="header-best-marcas d-flex ml-3">
            <h4 class="font-weight-bold mr-2">Categorias</h4>
            <a href="{{route('jornada.categorias')}}" class="p-0 m-0">Visualizar todos produtos</a>
        </div>

        <div class="d-flex flex-wrap my-3">
            @foreach($categorias as $categoria)
            <div class="card-categoria-home">
                <img src="{{asset('assets/images/Vector.png')}}" alt="{{$categoria->nome}}">
                <a class="text-category" >{{$categoria->nome}}</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
