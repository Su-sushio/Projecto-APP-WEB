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


Route::get('/produtos/{id}/pontodedados','DataPointController@create')->name('produtos.pontodedados.create');

Route::post('/produtos/{id}/pontodedados','DataPointController@store')->name('produtos.pontodedados');



