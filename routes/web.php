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
    Route::get('/produtos/{categoria}', 'ProdutoController@getProdutosCategoria')->name('salao.produtos.categoria');
    Route::get('/produto/{id}/{slug}', 'ProdutoController@getDetalhesProduto')->name('salao.produtos.detalhes');
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


    });

    Route::group(['prefix' => 'distribuidor'], function () {

        Route::get('/produtos', 'ProdutoController@getProdutosDistribuidor')->name('distribuidor.produtos');


        Route::get('/jornada_distribuidor/detail', function () {
            return view('jornada-distribuidor/detail');
        })->name('detail');


        Route::get('/jornada_distribuidor/vendas', function () {
            return view('jornada_distribuidor.visao-vendas');
        })->name('vendas');


        Route::get('/jornada_distribuidor/categories', function () {
            return view('jornada_distribuidor.categories');
        })->name('categories');


    });


});




