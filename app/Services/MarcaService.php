<?php

namespace App\Services;

use App\Marca;

class MarcaService
{
    public function getMarcas($limit = null)
    {
        return Marca::where('ativo', 1)->orderBy("nome", 'asc')
            ->take($limit)->get();
    }

    public function getMarca($limit = null, $nome)
    {
        return Marca::where('ativo', 1)->orderBy("nome", 'asc')
            ->where('nome', $nome)
            ->take($limit)->get();
    }
}
