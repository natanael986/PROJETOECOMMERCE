<?php

use App\Http\Controllers\CarrinhoComprasController;
use App\Http\Controllers\CarrinhoManagerController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoManagerController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Sobre_nosController;
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

Route::get('/', [HomeController::class, 'index'])->name('site.home');

// Route::get('/carrinho_compras', [CarrinhoComprasController::class, 'CarrinhoLista'])->name('site.carrinho');
// Route::post('/carrinho_compras', [CarrinhoComprasController::class, 'AdicionaCarrinho'])->name('site.addcarrinho');
// Route::post('/remover', [CarrinhoComprasController::class, 'RemoveCarrinho'])->name('site.removecarrinho');

Route::get('/carrinho_compras', [CarrinhoManagerController::class, 'index'])->name('site.carrinho');
Route::post('/carrinho_compras', [CarrinhoManagerController::class, 'store'])->name('site.carrinho');
Route::resource('/carrinho', CarrinhoManagerController::class);
// Route::post('/carrinho_compras', [CarrinhoManagerController::class, 'destroy'])->name('site.carrinho');

Route::resource('/categoria', CategoriaController::class);

Route::get('/sobre-nos', [Sobre_nosController::class, 'index'])->name('site.sobre');

Route::resource('/fornecedor', FornecedorController::class);

Route::get('/estoque/produto', [ProdutosController::class, 'index'])->name('site.produtos');

Route::resource('/produto', ProdutoManagerController::class);
Route::resource('/showproduto', ProdutosController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
