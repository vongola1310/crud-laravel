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
//listado de usuairos
Route::get('/', 'App\Http\Controllers\UserController@list');
//formulario a usuarios
Route::get('/form','App\Http\Controllers\UserController@userform');
//guarda los usuarios
Route::post('/save','App\Http\Controllers\UserController@save')->name('save');
//Eliminar usuarios
Route::delete('/delete/{id}','App\Http\Controllers\UserController@delete')->name('delete');
//Modificar usuarios
Route::get('/editform{id}','App\Http\Controllers\UserController@editform')->name('editform');
//edicion de usuarios
Route::patch('/edit/{id}','App\Http\Controllers\UserController@edit')->name('edit');

