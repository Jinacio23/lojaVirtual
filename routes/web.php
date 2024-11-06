<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('telacliente');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//teste
Route::get('/teste' , [TesteController::class, 'index'])->name('teste.index');

//loja
Route::get('/loja' , [LojaController::class, 'index'])->name('loja.index');

//login
Route::get('/login' , [LoginController::class, 'index'])->name('login.index');

//estoque
Route::get('/estoque' , [EstoqueController::class, 'index'])->name('estoque.index');
Route::get('create', [EstoqueController::class, 'create'])->name('estoque.create');
Route::post('store', [EstoqueController::class, 'store'])->name('estoque.store');
Route::get('edit/{id}', [EstoqueController::class, 'edit'])->name('estoque.edit');
Route::put('update/{id}', [EstoqueController::class, 'update'])->name('estoque.update');
Route::get('show', [EstoqueController::class, 'show'])->name('estoque.show');
Route::delete('destroy/{id}', [EstoqueController::class, 'destroy'])->name('estoque.destroy');


//cadastro
Route::get('/cadastro' , [CadastroController::class, 'index'])->name('cadastro.index');

//Recibo
//Route::get('/recibo' , [ReciboController::class, 'index'])->name('recibo.index');

//carrinho
Route::get('/carrinho' , [CarrinhoController::class, 'index'])->name('carrinho.index');

require __DIR__.'/auth.php';
