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
})->name('Bienvenido');
//Rutas genero
Route::get('/genero/registro',function () {
    return view('genero.registro');
})->name('genero-Registro');
Route::post('/genero/registrar','GeneroController@create')->name('genero-Registrar');
Route::get('/genero/registros','GeneroController@index')->name('genero-Tabla');
Route::get('/genero/eliminar/{id}','GeneroController@delete')->name('genero-Eliminar');
//Rutas categoria
Route::get('/categoria/registro',function () {
    return view('categoria.registro');
})->name('categoria-Registro');
Route::post('/categoria/registrar','CategoriaController@create')->name('categoria-Registrar');
Route::get('/categoria/registros','CategoriaController@index')->name('categoria-Tabla');
Route::get('/categoria/eliminar/{id}','CategoriaController@delete')->name('categoria-Eliminar');
//Rutas departamento
Route::get('/departamento/registro',function () {
    return view('departamento.registro');
})->name('departamento-Registro');
Route::post('/departamento/registrar','DepartamentoController@create')->name('departamento-Registrar');
Route::get('/departamento/registros','DepartamentoController@index')->name('departamento-Tabla');
Route::get('/departamento/eliminar/{id}','DepartamentoController@delete')->name('departamento-Eliminar');

//Rutas cliente
Route::get('/cliente/registro',function () {
    $departamentos = \App\Models\Departamento::all();
    $generos = \App\Models\Genero::all();
    $categorias = \App\Models\Categoria::all();
    return view('cliente.registro',compact('generos','categorias','departamentos'));
})->name('cliente-Registro');
Route::post('/cliente/registrar','ClienteController@create')->name('cliente-Registrar');
Route::get('/cliente/registros','ClienteController@index')->name('cliente-Tabla');
Route::get('/cliente/eliminar/{id}','ClienteController@delete')->name('cliente-Eliminar');
