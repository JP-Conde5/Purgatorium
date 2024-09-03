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
Route::get('/exibirMortalis', [App\Http\Controllers\controllerMortalis::class, 'index'])->name('exibirMortalis');
Route::get('/pecattumMortalis/{id}', [App\Http\Controllers\controllerMortalis::class, 'pecattum'])->name('pecattumMortalis');
Route::post('/criarMortalis', [App\Http\Controllers\controllerMortalis::class, 'store'])->name('salvarMortalis');
Route::post('/salvarMortalis', [App\Http\Controllers\controllerMortalis::class, 'store'])->name('salvarMortalis');
Route::get('/editarMortalis/{id}', [App\Http\Controllers\controllerMortalis::class, 'edit'])->name('editarMortalis');
Route::post('/atualizarMortalis/{id}', [App\Http\Controllers\controllerMortalis::class, 'update'])->name('atualizarMortalis');
Route::get('/deletarMortalis/{id}', [App\Http\Controllers\controllerMortalis::class, 'destroy'])->name('deletarMortalis');

//Virtus
Route::get('/exibirVirtus', [App\Http\Controllers\controllerVirtus::class, 'index'])->name('exibirVirtus');
Route::get('/criarVirtus', [App\Http\Controllers\controllerVirtus::class, 'create'])->name('criarVirtus');
Route::post('/salvarVirtus', [App\Http\Controllers\controllerVirtus::class, 'store'])->name('salvarVirtus');
Route::get('/editarVirtus/{id}', [App\Http\Controllers\controllerVirtus::class, 'edit'])->name('editarVirtus');
Route::post('/atualizarVirtus/{id}', [App\Http\Controllers\controllerVirtus::class, 'update'])->name('atualizarVirtus');
Route::get('/deletarVirtus/{id}', [App\Http\Controllers\controllerVirtus::class, 'destroy'])->name('deletarVirtus');

//Pecattum
Route::get('/exibirPecattum', [App\Http\Controllers\controllerPecattum::class, 'index'])->name('exibirPecattum');
Route::get('/criarPecattum', [App\Http\Controllers\controllerPecattum::class, 'create'])->name('criarPecattum');
Route::post('/salvaPecattum', [App\Http\Controllers\controllerPecattum::class, 'store'])->name('salvarPecattum');
Route::get('/editarPecattum{id}', [App\Http\Controllers\controllerPecattum::class, 'edit'])->name('editarPecattum');
Route::post('atualizarPecattum/{id}', [App\Http\Controllers\controllerPecattum::class, 'update'])->name('atualizarPecattum');
Route::get('deletarPecattum/{id}', [App\Http\Controllers\controllerPecattum::class, 'destroy'])->name('deletarPecattum');

//VirtusMortalis
Route::get('/vitusMortalis/{id}', [App\Http\Controllers\controllerMortalis::class, 'virtus'])->name('virtusMortalis');
