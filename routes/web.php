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

Route::get('/', 'App\Http\Controllers\BlogControlador@index')->name("postagens");

Route::get('/form', 'App\Http\Controllers\BlogControlador@create')->name("form");

Route::post('/', 'App\Http\Controllers\BlogControlador@store');

Route::get('/editar/{id}', 'App\Http\Controllers\BlogControlador@edit');
Route::post('/editar/{id}', 'App\Http\Controllers\BlogControlador@update');

Route::get('/apagar/{id}', 'App\Http\Controllers\BlogControlador@destroy');