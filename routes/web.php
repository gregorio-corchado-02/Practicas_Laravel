<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerCRUDD;

Route::get('recuerdo/create', [ControllerCRUDD::class,'create'])->name('recuerdo.create');
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::post('/recuerdo', [ControllerCRUDD::class,'store'])->name('recuerdo.store');
Route::get('/recuerdo', [ControllerCRUDD::class,'index'])->name('recuerdo.index');
Route::post('/recuerdo/{id}/confirm', [ControllerCRUDD::class,'update'])->name('recuerdo.update');



/*
Route::controller(diarioController::class)->group(function (){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/formulario','metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos','metodoRecuerdos')->name('apodoRecuerdos');

});
*/

/*Route::get('/formulario', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');*/
/*Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');*/

/*Route::post('/guardarRecuerdo', [diarioController::class,'metodoGuardar'])->name('guardarFormulario');*/


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

/*
 El primer parametro es el nombre de la ruta y el segundo parametro es el nombre del archivo

    Route::view('/','inicio')->name('rutaInicio');
    Route::view('/vista1','vista1')->name('rutavista1');
    Route::get('/vista2', function () {
        return view('vista2');
    });
    Route::get('/vista3', function () {
        return view('vista3');
    });

*/