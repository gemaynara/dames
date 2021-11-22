<?php

namespace App\Services;

use App\Categoria;
use App\Produto;
use App\ProdutoImagens;

class ProdutoService
{

    public function getProdutos($distrubuidor = null)
    {
        $produtos = Produto::where('ativo', 1)
            ->orderBy('qnt_vendida', 'desc');
        if ($distrubuidor) {
            $produtos->where('distribuidor_id', $distrubuidor);
        }
        return $produtos->get();
    }

    public function getProdutosCategoria($categoria)
    {
        $categoria = Categoria::where('nome', $categoria)->first();
        return Produto::where('produtos.ativo', 1)
            ->orderBy('qnt_vendida', 'desc')
            ->where('categoria_id', $categoria->id)
            ->get();
    }

    public function maisVendidos()
    {
        return Produto::where('produtos.ativo', 1)
            ->join('marcas', 'marcas.id', 'produtos.marca_id')
            ->select("produtos.*", "marcas.nome as marca")
            ->orderBy('qnt_vendida', 'desc')
            ->limit(6)
            ->get();
    }

    public function getDetalhesProduto($id)
    {
        $produto = Produto::where('produtos.id', $id)
            ->join('categorias', 'categorias.id', 'produtos.categoria_id')
            ->select('produtos.*', 'categorias.nome as categoria')->first();

        $imagens = ProdutoImagens::where('produto_id', $id)->get();
        return ['produto' => $produto, 'imagens' => $imagens];
    }
}
