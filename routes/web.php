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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('produtos','ProductController');
Route::resource('pontodedados','DataPointController');
Route::resource('opcoes','OptionController');



Route::get('/produtos/{id}/pontodedados','DataPointController@create')->name('produtos.pontodedados.create');

Route::post('/produtos/{id}/pontodedados','DataPointController@store')->name('produtos.pontodedados');


Route::post('/produtos/{id}','OptionController@store')->name('produtos.opcoes');
Route::post('/produtos/{product}','OptionController@store')->name('produtos.opcoes');




Route::resource('utilizadores', 'UserController', ['parameters' => ['utilizadores' => 'utilizador']])->middleware(['auth','admin']);
//Route::put('utilizadores/{utilizador}', 'UserController@update')->name('utilizadores.update')->middleware(['auth','admin']);

Route::get('/notauth', function () {
    return view('notauth');
})->name('notauth');