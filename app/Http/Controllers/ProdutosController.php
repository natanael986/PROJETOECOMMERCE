<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Compra;
use App\Models\Filtros;
use App\Models\Fornecedores;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //Responsavel por exibir a página de produtos do site 

    public function index()
    {
        $compras = Compra::all();
        $produtos = Produtos::orderBy("nome")->get();

        return view('site.produtos', compact('produtos', 'compras'));
    }

    public function show($id)
    {
        $categorias = Categorias::all();
        $fornecedores = Fornecedores::all();
        $compras = Compra::all();


        $produto = Produtos::findOrFail($id);


        return view('site.showproduto', compact('produto', 'categorias', 'fornecedores', 'compras'));
    }

}
