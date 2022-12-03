<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Compra;
use App\Models\Produtos;
use Illuminate\Http\Request;

class CarrinhoManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carrinhos = Carrinho::all();
        $produtos = Produtos::all();

        return view('site.carrinho', compact('carrinhos', 'produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //     \Darryldecode\Cart\Facades\CartFacade::add([
        //         'id' => $request->id,
        //         'name' => $request->nome,
        //         'price' => $request->preco,
        //         'quantity' => $request->quantidade,
        //         'attributes' => array(
        //             'image' => $request->imagem,
        //         )
        //    ]);

        $compras = new Compra;
        $compras->user_id = $request->user_id;
        $compras->status = true;

        $compras->save();

        $carrinho = new Carrinho;
        $carrinho->compras_id = $request->compras_id;
        $carrinho->produtos_id = $request->produtos_id;
        $carrinho->quantidade = $request->quantidade;
        $carrinho->preco = $request->preco;
        $carrinho->imagem = $request->imagem;

        $carrinho->save();

        return redirect()->route('site.carrinho');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Carrinho::findOrFail($id)->delete();
        
        return redirect()->route('site.carrinho');
    }
}
