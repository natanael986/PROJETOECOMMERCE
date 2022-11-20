<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoComprasController extends Controller
{
    //Responsavel por exibir a página do carrinho de compras do site 

    public function index()
    {
        return view('site.carrinho');
    }
}
