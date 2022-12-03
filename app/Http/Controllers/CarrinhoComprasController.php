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

    public function CarrinhoLista()
    {
        $itens = \Darryldecode\Cart\Facades\CartFacade::getContent();
        return view('site.carrinho', compact('itens'));
    }

    public function AdicionaCarrinho(Request $request)
    {
       \Darryldecode\Cart\Facades\CartFacade::add([
            'id' => $request->id,
            'name' => $request->nome,
            'price' => $request->preco,
            'quantity' => $request->quantidade,
            // 'id_Fornecedor' => $request->id_Fornecedor,
            // 'id_Categoria' => $request->id_Categoria,
            'attributes' => array(
                'image' => $request->imagem,
            )
       ]);

       return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado com sucesso!');
        
    }

    public function RemoveCarrinho(Request $request){
       \Darryldecode\Cart\Facades\CartFacade::remove($request->id);

       return redirect()->route('site.carrinho')->with('sucesso', 'Produto removido com sucesso!');

    }

}
