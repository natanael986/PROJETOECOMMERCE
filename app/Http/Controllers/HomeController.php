<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Responsavel por exibir a página inical do site 

    public function index()
    {
        $produtos = Produtos::orderBy("nome")->get();
        $compras = Compra::all();

        return view('site.home', compact('produtos', 'compras'));
    }

    public function detalhe($id)
    {
        $produto = Produtos::findOrFail($id);

        return view("site.produtos", compact('produto'));
    }
}
