<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Services\ProdutoService;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function getProdutosDistribuidor()
    {
        $produtos = (new ProdutoService)->getProdutos(auth()->user()->id);
        return view('jornada-distribuidor.produtos', compact($produtos));
    }

    public function getProdutosSalao(Request $request)
    {
        $produtos = (new ProdutoService)->getProdutos();

        if ($request->ajax()) {
            $view = view('components.lista-produtos', compact('produtos'))->render();
            return response()->json(['html' => $view]);
        }

        return view('jornada-beleza.produtos', compact('produtos'));
    }

    public function getDetalhesProduto(Request $request)
    {
        $id = $request->id;
        $produto = (new ProdutoService())->getDetalhesProduto($id);
        return view('jornada-beleza.detalhe-produto', ['produto' => $produto]);
    }

    public function getProdutosCategoria(Request $request)
    {
        $produtos = (new ProdutoService)->getProdutosCategoria($request->categoria);

        return view('jornada-beleza.produtos', compact('produtos'));
    }

    public function avaliarProduto(Request $request)
    {
        $rating = new Rating;
        $rating->user_id = Auth::id();
        $rating->rating = $request->input('star');
        $post->ratings()->save($rating);
        return redirect()->back();
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
