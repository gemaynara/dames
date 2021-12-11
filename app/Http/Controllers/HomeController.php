<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Services\CategoriaService;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $categorias = (new CategoriaService())->getCategorias(10);
        if (auth()->user()->perfil == "S"){
            return view('jornada-beleza.home-beleza', compact('categorias'));
        }elseif (auth()->user()->perfil == "D"){
            return view('jornada-distribuidor.home-distribuidora', compact('categorias'));
        }

    }

    public function welcome(){

        $categorias = (new CategoriaService())->getCategorias(10);
        return view('welcome', compact('categorias'));
    }


}
