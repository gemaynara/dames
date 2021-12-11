<?php

namespace App\Services;

use App\Categoria;

class CategoriaService
{
    public function getCategorias($limit = null)
    {
        return Categoria::where('ativo', 1)->orderBy("nome", 'asc')
            ->take($limit)->get();
    }
}
