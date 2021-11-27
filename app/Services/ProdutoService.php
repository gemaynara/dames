<?php

namespace App\Services;

use App\Categoria;
use App\Produto;
use App\ProdutoFavorito;
use App\ProdutoImagens;
use Illuminate\Support\Facades\Auth;

class ProdutoService
{

    public function getProdutos($distrubuidor = null)
    {
        $produtos = Produto::where('ativo', 1)
            ->orderBy('qnt_vendida', 'desc');
        if ($distrubuidor) {
            $produtos->where('distribuidor_id', $distrubuidor);
        }
        return $produtos->paginate(9);
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
            ->limit(10)
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

    public function getProdutosFavaritos()
    {
        if (\auth()->check()) {
            return ProdutoFavorito::where('user_id', Auth::user()->id)->get();
        } else {
            return $produtos = ['produto_id' => 0];
        }

    }
}
