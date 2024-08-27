<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('satus');
})->name('home');
//Mortalis

Route::get('/exibirMortalis', [App\Http\Controllers\controllerVirtus::class, 'index'])->name('exibirMortalis');
Route::post('/Criarmortalis', [App\Http\Controllers\AutoresController::class, 'store'])->name('gravaNovoMortalis');
Route::get('/Editarmortalis{id}', [App\Http\Controllers\AutoresController::class, 'edit'])->name('editarMortalis');

//Virtus
Route::get('/exibirVirtus', [App\Http\Controllers\controllerVirtus::class, 'index'])->name('exibirVirtus');
Route::get('/criarVirtus', [App\Http\Controllers\controllerVirtus::class, 'create'])->name('criarVirtus');
Route::post('/salvarVirtus', [App\Http\Controllers\controllerVirtus::class, 'store'])->name('salvarVirtus');
Route::get('/editarVirtus/{id}', [App\Http\Controllers\controllerVirtus::class, 'edit'])->name('editarVirtus');
Route::post('/atualizarVirtus/{id}', [App\Http\Controllers\controllerVirtus::class, 'update'])->name('atualizarVirtus');
Route::get('/deletarVirtus/{id}', [App\Http\Controllers\controllerVirtus::class, 'destroy'])->name('deletarVirtus');
//Pecattum
Route::get('/pecattum', [App\Http\Controllers\controllerPecattum::class, 'index'])->name('pecattum');
Route::post('/pecattum', [App\Http\Controllers\AutoresController::class, 'store'])->name('gravaNovoPecado');


