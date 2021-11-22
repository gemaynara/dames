<?php

namespace App\Services;

use App\Pedido;
use App\PedidoProduto;

class PedidoService
{

    public function getPedidoCarrinho($user){
        $pedido = Pedido::where('user_id', $user)
            ->where('status', 'no carrinho')
            ->orderBy('id', 'desc')
            ->first();

        $produtos = PedidoProduto::where('pedido_id', $pedido->id)
            ->join('produtos', 'produtos.id', 'produtos_pedidos.produto_id')
            ->select('produtos_pedidos.*', 'produtos.nome as produto')->get();

        return ['pedido'=>$pedido, 'produtos'=>$produtos];
    }
}
