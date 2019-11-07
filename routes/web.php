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

Route::get('/', function () {//Esta route permite devolver a view welcome, automaticamente ele reconhece como sendo welcome.blade.php
    return view('welcome');  
});


Auth::routes();

Route::get('/pass_value/{value}','Controller@pass_value');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('inimigos','InimigoController');
Route::resource('culturas','CulturaController');
Route::resource('variedades','VariedadeController');
Route::resource('adubos','AduboController');
Route::resource('empresas','EmpresaController');


Route::get('/culturas/{id}/inimigos','VariedadeController@show')->name('culturas.inimigos');






Route::resource('utilizadores', 'UserController', ['parameters' => ['utilizadores' => 'utilizador']])->middleware(['auth','admin']);
//Route::put('utilizadores/{utilizador}', 'UserController@update')->name('utilizadores.update')->middleware(['auth','admin']);

Route::get('/notauth', function () {
    return view('notauth');
})->name('notauth');
