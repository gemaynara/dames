<?php

namespace App\Services;

use App\Pedido;
use App\PedidoProduto;
use Illuminate\Support\Facades\DB;

class PedidoService
{

    public function getPedidoCarrinho($user)
    {
        $pedido = Pedido::where('user_id', $user)
            ->where('status', 'no carrinho')
            ->orderBy('id', 'desc')
            ->first();

        $produtos = PedidoProduto::where('pedido_id', $pedido->id)
            ->join('produtos', 'produtos.id', 'produtos_pedidos.produto_id')
            ->select('produtos_pedidos.*', 'produtos.nome as produto',
                DB::raw('(select diretorio from produtos_imagens where produtos.id  =   produtos_imagens.produto_id  and imagem_principal = 1 order by  produtos.id desc limit 1) as imagem'))
            ->get();

        return ['pedido' => $pedido, 'produtos' => $produtos];
    }
}
