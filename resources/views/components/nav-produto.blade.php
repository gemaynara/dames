<?php $marcas = (new \App\Services\MarcaService())->getMarcas(10) ?>
<div class="nav-options col-md-3 py-2" style="height: 100%">
    <h5 class="align-content-md-center">Filtrar Produtos</h5>
    <div class="filtro">
        <div class="item">
            <div class="d-flex justify-content-between">
                <p class="mb-0">Marca</p>
                <i class="fas fa-sort-down"></i>
            </div>

            <div class="dropdown-marca">
                @foreach($marcas as $marca)
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2" name="marcas" id="{{$marca->id}}" value="{{$marca->id}}">
                    <label for="{{$marca->id}}" class="m-0">{{$marca->nome}}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div class="item">
            <div class="mt-3">
                <div class="d-flex justify-content-between">
                    <p class="mb-0">Produto</p>
                    <i class="fas fa-sort-down"></i>
                </div>

                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
                <div class="d-flex align-items-center ">
                    <input type="checkbox" class="form-check mr-2 my-2">
                    <label for="" class="m-0">Lorem ipsum</label>
                </div>
            </div>
        </div>
    </div>
</div>
