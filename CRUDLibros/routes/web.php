<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home'); 
Route::resource('home', LibroController::class);
Route::put('libros/{id}', [LibroController::class, 'update'])->name('libros.update');
Route::delete('libros/{id}', [LibroController::class, 'destroy'])->name('libros.destroy');
Route::post('libros', [LibroController::class, 'store'])->name('libros.store');




