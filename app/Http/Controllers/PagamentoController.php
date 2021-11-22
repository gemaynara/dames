<?php

namespace App\Http\Controllers;

use App\Services\PedidoService;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
   public function inicioPagamento(Request $request){
       $user = auth()->user()->id;

       $items = (new PedidoService())->getPedidoCarrinho($user);

       return view('jornada-beleza.pagamento', compact('items'));
   }
}
