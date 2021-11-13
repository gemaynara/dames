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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/pre-registro', function () {
    return view('auth.pre-register');
})->name('pre-login');

Route::get('/marcas', function () {
    return view('Iniciodejornada/marcas');
})->name('marcas');





Route::get('/homebeleza', function () {
    return view('jornada_beleza/home-beleza');
})->name('homebeleza');

Route::get('/detail', function () {
    return view('jornada_beleza/detail');
})->name('detail');


Route::get('/carrinho', function () {
    return view('jornada_beleza.car');
})->name('carrinho');

Route::get('/pagamento', function () {
    return view('jornada_beleza.pay');
})->name('pagamento');

Route::get('/pesquisa', function () {
    return view('jornada_beleza.pesquisa');
})->name('pesquisa');



Route::get('/home', 'HomeController@index')->name('home');
