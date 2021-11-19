<?php

namespace App\Services;

use App\Produto;

class ProdutoService
{

    public function getProdutos($distrubuidor= null){
        return Produto::where('distribuidor_id', $distrubuidor)
            ->where('ativo', 1)
            ->get();
    }

    public function maisVendidos(){
        return Produto::where('produtos.ativo', 1)
            ->join('marcas', 'marcas.id', 'produtos.marca_id')
            ->select("produtos.*", "marcas.nome as marca")
            ->orderBy('qnt_vendida', 'desc')
            ->take(9)
            ->get();
    }
}
