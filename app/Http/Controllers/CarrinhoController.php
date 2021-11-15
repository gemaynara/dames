<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function verCarrinho(){
            return view('jornada_beleza.carrinho');
    }
}
