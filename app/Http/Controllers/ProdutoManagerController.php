<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Fornecedores;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Responsavel por exibir a página de produtos do site 
        $categorias = Categorias::all();
        $fornecedores = Fornecedores::all();
        $produtos = Produtos::latest()->simplePaginate(4);
        return view('produto.index', compact('produtos', 'categorias', 'fornecedores'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::all();
        $fornecedores = Fornecedores::all();

        return view('produto.create', compact('categorias', 'fornecedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Responsavel por adicionar ao banco o produto
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'quantidade' => 'required',
            'imagem' => 'required',
        ]);


        $produto = new Produtos;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->id_Fornecedor = $request->id_Fornecedor;
        $produto->id_Categoria = $request->id_Categoria;
        $produto->imagem = "";

        $dirImagem = "images/produtos/";

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path($dirImagem), $imageName);
            $produto->imagem = $dirImagem . $imageName;
        }

        $produto->save();

        return redirect()->route('produto.index')->with('success', 'produto adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Responsavel por exibir o conteudo selecionado
        $produto = Produtos::findOrFail($id);

        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Responsavel por editar o conteudo selecionado
        $produto = Produtos::findOrFail($id);
        $categorias = Categorias::all();
        $fornecedores = Fornecedores::all();

        return view('produto.edit', compact('produto', 'categorias', 'fornecedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Responsavel por adicionar ao banco o produto
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'quantidade' => 'required',
            'imagem' => 'required',
        ]);

        $data = $request->all();

        Produtos::findOrFail($id)->update($data);

        return redirect()->route('produto.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produtos::findOrFail($id)->delete();

        return redirect()->route('produto.index')->with('success', 'Produto excluido com sucesso!');
    }
}
