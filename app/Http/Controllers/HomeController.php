<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $categorias = Categoria::getCategorias(10);
        if (auth()->user()->perfil == "S"){
            return view('jornada-beleza.home-beleza', compact('categorias'));
        }elseif (auth()->user()->perfil == "D"){
            return view('jornada-distribuidor.home-distribuidora', compact('categorias'));
        }

    }


}
