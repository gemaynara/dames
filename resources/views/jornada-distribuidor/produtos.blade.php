@extends('layouts.app')

@section('content')
    <div class="products-distribuidora">
        <div class="container py-5">
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
                            <a href="{{route('detail')}}" class='item-produt'>
                                <div class="mr-2 card-product-distribuidora" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>


                            <a href="{{route('detail')}}" class='item-produt'>
                                <div class="mr-2 card-product-distribuidora" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{route('detail')}}" class='item-produt'>
                                <div class="mr-2 card-product-distribuidora" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{route('detail')}}" class='item-produt'>
                                <div class="mr-2 card-product-distribuidora" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>


                            <a href="{{route('detail')}}" class='item-produt'>
                                <div class="mr-2 card-product-distribuidora" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{route('detail')}}" class='item-produt'>
                                <div class="mr-2 card-product-distribuidora" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="{{route('detail')}}" class='item-produt'>
                                <div class="mr-2 card-product-distribuidora" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog m-0" style="position: relative; left: 15%; top: 10%;">
                <div class=" modal-content
            " style="width: 962px;">
                    <div class="modal-body">
                        <h1 class="text-center mb-5 mt-3 text-color-primary font-weight-bold">Preencha os dados de seu
                            produto</h1>
                        <div class="container">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex">
                                    <div id="wrapper" class="d-flex align-items-center flex-wrap">
                                        <div id="image_preview"></div>
                                        <label for="upload_file" class="add-img">Adicionar fotos do Produto</label>
                                        <input type="file" id="upload_file" name="upload_file[]"
                                               onchange="preview_image();" multiple/>

                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col">
                                        <label for="">Nome do produto</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="">Código de Barras</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col">
                                        <label for="">Categoria</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col">
                                            <label for="">Peso</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="">Comprimento</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col">
                                        <label for="">Descrição</label>
                                        <textarea name="" class="form-control" id="" cols="30" row my-2s="3"></textarea>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col">
                                            <label for="">Altura</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="">Largura</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col">
                                        <label for="">Código / Referência</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="">Estoque</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center my-3">
                                    <button class="btn btn-primary">Cadastrar produto</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function preview_image() {
                var qtd = $('#image_preview img').length;
                console.log(qtd)
                if (qtd >= 3) {
                    $('.add-img').hide()
                } else {
                    $('.add-img').show()
                }

                var total_file = document.getElementById("upload_file").files.length;
                for (var i = 0; i < total_file; i++) {
                    $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
                }
            }
        </script>

@endsection
