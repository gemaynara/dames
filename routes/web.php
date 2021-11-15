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
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function (){
        return view('welcome');
    })->name('welcome');

    Route::get('/pre-register', 'Auth\RegisterController@preRegister')->name('pre-register');
    Route::get('/registro/{tipo}', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/registrar', 'Auth\RegisterController@register')->name('postRegister');

    Route::get('/esqueci-senha', 'Auth\ForgotPasswordController@showForgetPasswordForm')->name('forgot-password');
    Route::post('/esqueci-senha', 'Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forgot-password');
    Route::get('alterar-senha/{token}', 'Auth\ForgotPasswordController@showResetPasswordForm')->name('reset-password-token');
    Route::post('/alterar-senha','Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset-password');


    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
});

//Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('home', 'HomeController@index')->name('home');

    Route::group(['prefix'=>'jornada'], function (){
        Route::get('/marcas', 'MarcaController@listaMarcas')->name('marcas');
    });

    Route::group(['prefix'=>'salao'], function (){
        Route::get('/categorias', 'CategoriaController@listaCategorias')->name('categorias');
        Route::get('/carrinho', 'CarrinhoController@verCarrinho')->name('ver-carrinho');

        Route::get('/detail', function () {
            return view('jornada_beleza/detail');
        })->name('detail');



        Route::get('/pagamento', function () {
            return view('jornada_beleza.pay');
        })->name('pagamento');

        Route::get('/pesquisa', function () {
            return view('jornada_beleza.pesquisa');
        })->name('pesquisa');
    });

    Route::group(['prefix'=>'distribuidor'], function (){

        Route::get('/jornada_distribuidor/detail', function () {
            return view('jornada_distribuidor/detail');
        })->name('detail');


        Route::get('/jornada_distribuidor/vendas', function () {
            return view('jornada_distribuidor.visao-vendas');
        })->name('vendas');

        Route::get('/jornada_distribuidor/pesquisa', function () {
            return view('jornada_distribuidor.pesquisa');
        })->name('pesquisa');

        Route::get('/jornada_distribuidor/categories', function () {
            return view('jornada_distribuidor.categories');
        })->name('categories');


    });


});




