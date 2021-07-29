<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\seccionesController;

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


Route::get('/' , [seccionesController::class , 'inicio'])->name('inicio');
Route::get('/sobremi' , [seccionesController::class , 'sobremi'])->name('sobremi');
Route::get('/entrevistas' , [seccionesController::class , 'entrevistas'])->name('entrevistas');
Route::get('/radio' , [seccionesController::class , 'radio'])->name('radio');
Route::get('/proyectos' , [seccionesController::class , 'proyectos'])->name('proyectos');
Route::get('/contacto' , [seccionesController::class , 'contacto'])->name('contacto');

