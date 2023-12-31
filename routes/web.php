<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasEstaticasController;
use App\Http\Controllers\AdminController;


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
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// paginas estaticas
Route::get('/', [PaginasEstaticasController::class, 'inicio']);
Route::get('/nosotros', [PaginasEstaticasController::class, 'nosotros']);
Route::get('/contacto', [PaginasEstaticasController::class, 'contacto']);

//rutas de administracion 
Route::get('/administracion', [AdminController::class, 'index']);
Route::get('/admPost', [AdminController::class, 'adminPost']);
Route::get('/admUsuario', [AdminController::class, 'adminUsuario']);





// ruta productos
Route::get('/productos', 'ProductosController@index');

// ruta registro 
Route::get('/registrar', 'RegistrarController@index');
