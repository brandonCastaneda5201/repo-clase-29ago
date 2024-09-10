<?php

use App\Models\Contacto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactoController;

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

Route::post('/guardar-formulario', [ContactoController::class, 'guardarFormulario']);
Route::get('/clientes', [ContactoController::class, 'listado']);
Route::get('/contacto/{tipo_usuario?}', [ContactoController::class, 'formularioContacto']);