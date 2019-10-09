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

use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect()->route('Inicio');
});


//Inicio
Route::get('/Inicio', 'InicioController@index')->name('Inicio');
Route::post('/comentario', 'InicioController@comentario')->name('comentario');
//Cadastro
Route::get('/Cadastro', 'CadastroController@index')->name('Cadastro');
Route::post('/realizaCadastro', 'CadastroController@realizaCadastro')->name('realizaCadastro');
//Login
Route::get('/Login/{erro?}', 'LoginController@index')->name('Login');
Route::post('/verificaLogin', 'LoginController@verificaLogin')->name('verificaLogin');
Route::get('/Logout', 'LoginController@logout')->name('Logout');
//Usuario
Route::get('/Usuario', 'UsuarioController@index')->name('Usuario');
Route::post('/atualizarCadastro', 'UsuarioController@atualizarCadastro')->name('atualizarCadastro');