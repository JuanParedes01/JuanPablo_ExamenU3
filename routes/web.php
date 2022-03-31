<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\GeneralController;
use App\http\Controllers\ApiController;

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

Route::get('/', [GeneralController::class, 'raiz'])->name('raiz');

Route::get('/inicio', [GeneralController::class, 'inicio'])->name('inicio');

Route::get('/about', [GeneralController::class, 'about'])->name('about');

Route::get('/services1', [GeneralController::class, 'services1'])->name('services1');

Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');


//Mensaje y Comentarios
Route::post('/mensaje', [ViewsController::class,'mensaje']) ->name('mensaje');

Route::post('/api', [ApiController::class,'submit']) ->name('api');




