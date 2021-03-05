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
});
Route::get('datos', function(){
return view('datos');
});

Route::get('/estudiantes','App\Http\Controllers\ControllerEstudiantes@mostrar');
Route::post('/estudiantes','App\Http\Controllers\ControllerEstudiantes@store')->name('estudiantes.store');
Route::resource('/Lista', App\Http\Controllers\ListaController::class);