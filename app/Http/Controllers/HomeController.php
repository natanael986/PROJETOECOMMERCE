<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Responsavel por exibir a página inical do site 

    public function index()
    {
        $produtos = Produtos::orderBy("nome")->get();

        return view('site.home', compact('produtos'));
    }

    public function detalhe($id)
    {
        $produto = Produtos::findOrFail($id);

        return view("site.produto", compact('produto'));
    }
}
