<?php

namespace App\Services;

use App\Categoria;
use App\Produto;
use App\ProdutoFavorito;
use App\ProdutoImagens;
use App\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProdutoService
{

    public function getProdutos($distrubuidor = null)
    {
        $produtos = Produto::where('ativo', 1)
            ->select('produtos.*',
                DB::raw('(select diretorio from produtos_imagens where produtos.id  =   produtos_imagens.produto_id  and imagem_principal = 1 order by  produtos.id desc limit 1) as imagem'))
            ->orderBy('qnt_vendida', 'desc')
            ->when(auth()->check(), function ($query) {
                $query->with(['favorito' => function ($hasMany) {
                    $hasMany->where('user_id', auth()->user()->id);
                }]);
            })
            ->when(auth()->guest(), function ($query) {
                $query->with(['favorito' => function ($hasMany) {
                    $hasMany->whereRaw('1 = 0');
                }]);
            });
        if ($distrubuidor) {
            $produtos->where('distribuidor_id', $distrubuidor);
        }
        return $produtos->paginate(9);
    }

    public function searchProduto($produto)
    {
        return Produto::where('ativo', 1)
            ->select('produtos.nome')
//                DB::raw('(select diretorio from produtos_imagens where produtos.id  =   produtos_imagens.produto_id  and imagem_principal = 1 order by  produtos.id desc limit 1) as imagem'))
            ->where("produtos.nome", "LIKE", "%$produto%")
            ->get();

    }

    public function getProdutosCategoria($categoria)
    {
        $categoria = Categoria::where('nome', $categoria)->first();
        return Produto::where('produtos.ativo', 1)
            ->orderBy('qnt_vendida', 'desc')
            ->where('categoria_id', $categoria->id)
            ->paginate(9);
    }

    public function maisVendidos()
    {
        return Produto::where('produtos.ativo', 1)
            ->join('marcas', 'marcas.id', 'produtos.marca_id')
            ->select("produtos.*", "marcas.nome as marca",
                DB::raw('(select diretorio from produtos_imagens where produtos.id  =   produtos_imagens.produto_id  and imagem_principal = 1 order by id asc limit 1) as imagem'))
            ->orderBy('qnt_vendida', 'desc')
            ->limit(10)
            ->get();
    }

    public function getDetalhesProduto($id)
    {

        $produto = Produto::where('produtos.id', $id)
            ->join('categorias', 'categorias.id', 'produtos.categoria_id')
            ->select('produtos.*', 'categorias.nome as categoria')->first();

        $produto->rating = $produto->averageRating;
        $produto->review = $produto->ratings;
        $produto->images = $produto->imagens;

        return $produto;
    }


}
