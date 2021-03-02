<?php

use App\Http\Controllers\PeliculasController;
use App\Models\Pelicula;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function($numero=''){
    return view('index');
})->name('index');

Route::get('peliculas/{numero?}', [PeliculasController::class,'inicio'])->name('movie');
Route::post('pelicula/insertar_pelicula', [PeliculasController::class, 'crear_pelicula'])->name('create_movie');
Route::get('pelicula/form_pelicula', [PeliculasController::class, 'form_pelicula'])->name('new_movie');
Route::get('peliculas/detalle_pelicula/{id}', [PeliculasController::class, 'detalle_pelicula'])->name('detalle_movie');
Route::get('peliculas/editar_pelicula/{id}', [PeliculasController::class, 'edit'])->name('edit_movie');
Route::post('peliculas/update_movie/{id}', [PeliculasController::class, 'update'])->name('update_movie');
Route::get('peliculas/eliminar_pelicula/{id}', [PeliculasController::class, 'eliminar_pelicula'])->name('del_movie');
/*Route::get('peliculas/{numero?}', function($numero=''){
    $equipo=['1','2','3'];
    return view('peliculas',compact('equipo'));
})->name('movie');/*

/*Route::get('peliculas/{numero?}', function($numero='Sin Numero'){
    return 'Estas en las peliculas: '.$numero;
});*/
