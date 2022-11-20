<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //Responsavel por exibir a página de produtos do site 

    public function index()
    {
        return view('site.produtos');
    }
}
