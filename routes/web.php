<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'jornada'], function () {
    Route::get('/marcas', 'MarcaController@listaMarcas')->name('jornada.marcas');
    Route::get('/categorias', 'CategoriaController@listaCategorias')->name('jornada.categorias');
    Route::get('/carrinho', 'PedidoController@verCarrinho')->name('jornada.carrinho');

    Route::get('/produtos', 'ProdutoController@getProdutosSalao')->name('salao.produtos');
    Route::get('/produtos/categoria/{categoria}', 'ProdutoController@getProdutosCategoria')->name('salao.produtos.categoria');
    Route::get('/produto/{id}/{slug}', 'ProdutoController@getDetalhesProduto')->name('salao.produtos.detalhes');
    Route::get('/busca-produto', 'ProdutoController@searchProduto')->name('salao.produtos.busca');

    Route::get('/marcas', 'MarcaController@getMarcas')->name('salao.marcas');
    Route::get('/produtos/marca/{marca}', 'ProdutoController@getProdutosMarca')->name('salao.produtos.marca');
    Route::get('/produtos/busca/{marca}', 'ProdutoController@filtroProdutos')->name('salao.produtos.filtro');
});


Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'HomeController@welcome')->name('welcome')->middleware('guest');

    Route::get('/pre-registro', 'Auth\RegisterController@preRegister')->name('pre-register');
    Route::get('/registro/{tipo}', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/registrar', 'Auth\RegisterController@register')->name('postRegister');

    Route::get('/esqueci-senha', 'Auth\ForgotPasswordController@showForgetPasswordForm')->name('forgot-password');
    Route::post('/esqueci-senha', 'Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forgot-password');
    Route::get('alterar-senha/{token}', 'Auth\ForgotPasswordController@showResetPasswordForm')->name('reset-password-token');
    Route::post('/alterar-senha', 'Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset-password');


    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
});

//Auth::routes();


Route::group(['middleware' => ['auth']], function () {

    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'salao'], function () {

        Route::post('/add-produto-carrinho', 'PedidoController@addProdutoCarrinho')->name('salao.add-produto-carrinho');
        Route::delete('/remover/{id}', 'PedidoController@removerItemCarrinho')->name('salao.remover-produto-carrinho');
        Route::get('/pagamento', 'PagamentoController@inicioPagamento')->name('salao.pagamento');

        Route::post('/produto-favorito', 'ProdutoController@addProdutofavorito')->name('salao.produto-favorito');
        Route::post('/produto-estrelas', 'ProdutoController@avaliarProduto')->name('salao.produto-estrelas');


    });

    Route::group(['prefix' => 'distribuidor'], function () {

        Route::get('/produtos', 'ProdutoController@getProdutosDistribuidor')->name('distribuidor.produtos');
        Route::post('/add-produto', 'ProdutoController@store')->name('distribuidor.add-produto');



        Route::get('/jornada_distribuidor/vendas', function () {
            return view('jornada_distribuidor.visao-vendas');
        })->name('vendas');


        Route::get('/jornada_distribuidor/categories', function () {
            return view('jornada_distribuidor.categories');
        })->name('categories');


        Route::group(['prefix'=>'api'], function (){
            Route::get('/borzo', 'BorzoController@index');
        });


    });


});




