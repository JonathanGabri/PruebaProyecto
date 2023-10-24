<?php

use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Comentario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', HomeController::class)->name('home');


//ACA ESTAMOS LLAMANDO A TODOS LOS CONTROLADORES DE COMENTARIOS CONTROLLER

Route::controller(ComentariosController::class)->group(function(){

Route::get('Comentarios', 'index')->name('comentarios.home');

Route::post('Comentarios', 'GenerarComentario')->name('comentarios.generar');

Route::delete('Comentarios/{comentario}', [ComentariosController::class, 'destroy'] )->name('comentarios.delete');
    //muestra el Comentario a detalle
Route::get('Comentarios/{comentario}', 'show')->name('comentarios.show');

//EDITAR EL Comentario
Route::get('Comentarios/{comentario}/edit', 'edit') ->name('comentarios.edit');

//PARA GUARDAR LOS DATOS
Route::put('Comentarios/{comentario}', 'update')->name('comentarios.update');

}); 

//Route::resource('Comentarios', ComentariosController::class);