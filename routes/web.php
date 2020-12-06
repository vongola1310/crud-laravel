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
    return view('usuarios.listar');
});

Route::get('/form','App\Http\Controllers\UserController@userform');
Route::post('/save','App\Http\Controllers\UserController@save')->name('save');

