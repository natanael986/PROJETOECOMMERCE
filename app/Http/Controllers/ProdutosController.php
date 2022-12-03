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
        $search = request('search');

        if ($search) {
            $produtos = Produtos::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $produtos = Produtos::all();
        }

        $compras = Compra::all();
        // $produtos = Produtos::all();

        return view('site.produtos', compact('produtos', 'compras'),  ['produtos' => $produtos, 'search' => $search]);
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
