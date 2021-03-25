<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Datos;

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

Route::get('/', 'App\Http\Controllers\CrudController@index')->name('datos.index');

Route::get('/crear', 'App\Http\Controllers\CrudController@crear');

Route::post('/create', 'App\Http\Controllers\CrudController@create')->name('datos.create');

Route::delete('/{id}', 'App\Http\Controllers\CrudController@delete')->name('datos.delete');

Route::get('{id}/editar', 'App\Http\Controllers\CrudController@editar')->name('datos.edit');

Route::put('{datos}/editar', 'App\Http\Controllers\CrudController@update')->name('datos.update');