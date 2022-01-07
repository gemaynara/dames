<!-- Modal -->
<?php $categorias = (new \App\Services\CategoriaService())->getCategorias(); ?>
<?php $marcas = (new \App\Services\MarcaService())->getMarcas(); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog m-0" style="position: relative; left: 15%; top: 10%;">
        <div class=" modal-content" style="width: 962px;">
            <div class="modal-body">
                <h1 class="text-center mb-5 mt-3 text-color-primary font-weight-bold">Preencha os dados de seu
                    produto</h1>
                <div class="container">
                    <form action="{{route('distribuidor.add-produto')}}" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="d-flex">
                            <div id="wrapper" class="d-flex align-items-center flex-wrap">
                                <div id="image_preview"></div>
                                <label for="upload_file" class="add-img">Adicionar fotos do Produto</label>
                                <input type="file" id="upload_file" name="imagens[]" accept="image/*"
                                       onchange="preview_image();" multiple/>

                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <label for="">Nome do produto</label>
                                <input type="text" class="form-control" name="nome" maxlength="50" required>
                            </div>
                            <div class="col">
                                <label for="">Código de Barras</label>
                                <input type="text" class="form-control codigo" name="codigo" required>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label for="">Categoria</label>
                                <select name="categoria_id" id="" class="form-control" required>
                                    <option value="" selected disabled>Selecione uma categoria</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="d-flex">
                                <div class="col">
                                    <label for="">Marca</label>
                                    <select name="marca_id" id="" class="form-control" required>
                                        <option value="" selected disabled>Selecione uma marca</option>
                                        @foreach($marcas as $marca)
                                            <option value="{{$marca->id}}">{{$marca->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="">Peso (g)</label>
                                    <input type="text" class="form-control peso" name="peso" required>
                                </div>
                                <div class="col">
                                    <label for="">Comprimento (cm)</label>
                                    <input type="text" class="form-control tamanho" name="comprimento" required>
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label for="">Descrição</label>
                                <textarea name="descricao" class="form-control" id="" cols="30" row="3"></textarea>
                            </div>
                            <div class="d-flex">
                                <div class="col">
                                    <label for="">Altura (cm)</label>
                                    <input type="text" class="form-control tamanho" name="altura" required>
                                </div>
                                <div class="col">
                                    <label for="">Largura (cm)</label>
                                    <input type="text" class="form-control tamanho" name="largura" required>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <label for="">Valor Unitário</label>
                                <input type="text" class="form-control valor" name="valor" required>
                            </div>

                            <div class="col">
                                <label for="">Estoque</label>
                                <input type="text" class="form-control estoque" name="estoque" required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center my-3">
                            <button class="btn btn-primary" type="submit">Cadastrar produto</button>
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
