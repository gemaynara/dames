<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\PedidoProduto;
use App\Produto;
use App\Services\PedidoService;
use App\Services\ProdutoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PedidoController extends Controller
{
    public function addProdutoCarrinho(Request $request)
    {
        try {
            DB::beginTransaction();

            $produto = Produto::find($request->produto_id);

            $carrinho = Pedido::where('status', 'no carrinho')
                ->where('user_id', auth()->user()->id)
                ->first();

            if (empty($carrinho)) {
                $carrinho = Pedido::create([
                    'user_id' => auth()->user()->id,
                    'endereco_id' => null,
                    'cupom_id' => null
                ]);
            }

            $produtoCarrinho = PedidoProduto::where('pedido_id', $carrinho->id)
                ->where('produto_id', $produto->id)
                ->first();

            if (empty($produtoCarrinho)) {
                PedidoProduto::create([
                    'pedido_id' => $carrinho->id,
                    'produto_id' => $produto->id,
                    'quantidade' => 1,
                    'valor_unitario' => $produto->valor,
                    'subtotal' => 1 * $produto->valor
                ]);
            } else {
                PedidoProduto::where('pedido_id', $carrinho->id)
                    ->where('produto_id', $produto->id)
                    ->update(['subtotal' => DB::raw('subtotal+valor_unitario'),
                        'quantidade'=> DB::raw('quantidade+1')]);
            }


            DB::commit();

            return redirect()->route('jornada.carrinho');

        } catch (\Exception $e) {
            Log::error('Ocorreu um erro ao inserir produto no carrinho: ' . $e->getMessage());
            DB::rollBack();
        }

    }

    public function verCarrinho()
    {
        if (auth()->guest()){
            $carrinho = [];
        }else{
            $user =  auth()->user()->id;
            $carrinho = (new PedidoService())->getPedidoCarrinho($user);
        }

        return view('jornada-beleza.carrinho', compact('carrinho'));
    }

    public function removerItemCarrinho($id)
    {
        PedidoProduto::where('id', $id)->delete();

    }
}
