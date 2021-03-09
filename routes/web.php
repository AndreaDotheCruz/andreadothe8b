<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;
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
Route::delete('Lista/{matricula}', 'ListaController@destroy')->name('Lista.destroy');
Route::get('destroy', [ListaController::class, 'destroy']);
