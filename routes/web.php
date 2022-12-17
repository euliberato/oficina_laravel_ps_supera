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

use App\Http\Controllers\OficinaController;

Route::get('/', [OficinaController::class, 'index']);

Route::get('/veiculos/revisao', [OficinaController::class, 'create'])->middleware('auth');

Route::post('/veiculos',[OficinaController::class, 'store'])->name('oficina.veiculos')->middleware('auth');

Route::get('/veiculos', [OficinaController::class, 'veiculos'])->middleware('auth');

Route::get('/veiculos/{id}', [OficinaController::class, 'show'])->middleware('auth');

Route::delete('/veiculos/{id}', [OficinaController::class, 'destroy'])->middleware('auth');

Route::get('/veiculos/editar/{id}', [OficinaController::class, 'edit'])->middleware('auth');

Route::put('/veiculos/atualizar/{id}', [OficinaController::class, 'update'])->middleware('auth');

Route::get('/veiculos', [OficinaController::class, 'dashboard'])->middleware('auth');