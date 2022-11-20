<?php

use App\Http\Controllers\CarrinhoComprasController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoManagerController;
use App\Http\Controllers\ProdutosController;
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

Route::get('/carrinho_compras', [CarrinhoComprasController::class, 'index'])->name('site.carrinho');

Route::get('/acessar', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'store']);

Route::resource('/categoria', CategoriaController::class);

Route::resource('/fornecedor', FornecedorController::class);

Route::get('/estoque/produto', [ProdutosController::class, 'index'])->name('site.produtos');
Route::resource('/produto', ProdutoManagerController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
