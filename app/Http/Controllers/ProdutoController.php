<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\ProdutoRequest;
use App\Produto;
use App\ProdutoFavorito;
use App\ProdutoImagens;
use App\Services\ProdutoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class ProdutoController extends Controller
{
    public function getProdutosDistribuidor()
    {
        $produtos = (new ProdutoService)->getProdutos();
        return view('jornada-distribuidor.produtos', compact('produtos'));
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

        return view('jornada-beleza.detalhe-produto', compact('produto'));
    }

    public function getProdutosCategoria(Request $request)
    {
        $produtos = (new ProdutoService)->getProdutosCategoria($request->categoria);
        if ($request->ajax()) {
            $view = view('components.lista-produtos', compact('produtos'));
            return response()->json(['html' => $view]);
        }
        return view('jornada-beleza.produtos', compact('produtos'));

    }

    public function getProdutosMarca(Request $request)
    {
        $produtos = (new ProdutoService)->getProdutosMarca($request->marca);
        if ($request->ajax()) {
            $view = view('components.lista-produtos', compact('produtos'));
            return response()->json(['html' => $view]);
        }
        return view('jornada-beleza.produtos', compact('produtos'));
    }

    public function filtroProdutos(Request $request)
    {
        $marcas = $request->marca;
        $produtos = Produto::whereIn('marca_id', [$marcas])->paginate(9);

        return view('jornada-beleza.produtos', compact('produtos'));


    }

    public function avaliarProduto(Request $request)
    {
        $post = Produto::first();

        $post->rate(5);
        dd($post->averageRating);

    }

    public function addProdutofavorito(Request $request)
    {

        $produto = ProdutoFavorito::where('produto_id', $request->id)->where('user_id', auth()->user()->id)->first();

        if (empty($produto)) {
            ProdutoFavorito::query()->create([
                'user_id' => auth()->user()->id,
                'produto_id' => $request->id
            ]);
        } else {
            ProdutoFavorito::query()->where(
                'user_id', auth()->user()->id)
                ->where('produto_id', $request->id)
                ->delete();
        }


    }

    public function searchProduto(Request $request)
    {
        $search = $request->input('query');
        $data = (new ProdutoService())->searchProduto($search);

        return response()->json($data);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProdutoRequest $request)
    {
        try {
            DB::beginTransaction();
            $produto = new Produto();
            $produto->distribuidor_id = auth()->user()->id;
            $produto->categoria_id = $request->categoria_id;
            $produto->marca_id = $request->marca_id;
            $produto->codigo = $request->codigo;
            $produto->nome = $request->nome;
            $produto->descricao = $request->descricao;
            $produto->detalhes = $request->detalhes;
            $produto->valor = $request->valor;
            $produto->estoque = $request->estoque;
            $produto->peso = $request->peso;
            $produto->altura = $request->altura;
            $produto->largura = $request->largura;
            $produto->comprimento = $request->comprimento;
            $produto->slug = Str::slug($request->nome);
            $produto->save();

            if ($request->hasFile('imagens')) {
                foreach ($request->imagens as $key => $imagem) {
                    $img = new ProdutoImagens();
                    $img->produto_id = $produto->id;
                    $img->imagem_principal = $key == 0 ? 1 : 0;
                    $img->diretorio = Helper::uploadImage($imagem, 'produtos');
                    $img->save();
                }
            }
            DB::commit();
            return redirect()->back()->with('success', 'Produto cadastrado com sucesso');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Ocorreu um erro ao registrar o produto: " . $e->getMessage());
            return redirect()->back()->with('error', 'Ocorreu um erro ao registrar o produto');
        }
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
