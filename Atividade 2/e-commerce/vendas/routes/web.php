<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'LojaController@index');
Route::get('/loja/view/{produto}','LojaController@view');
Route::post('/carrinho/adicionar/{produto}', 'CarrinhoController@add');
Route::get('/carrinho/comprar', 'CarrinhoController@store');
Route::get('/carrinho', 'CarrinhoController@view');
Route::resource('/produtos','ProdutosController');
Route::resource('/entradas','EntradaController');


Route::resource('/fornecedores','FornecedoresController', ['parameters' => ['fornecedores' => 'fornecedor']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
