<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedores::latest()->paginate(5);

        return view('fornecedor.index', compact('fornecedores'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'razao_social' => 'required',
        ]);


        $fornecedor = new Fornecedores;
        $fornecedor->nome = $request->nome;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->cep = $request->cep;
        $fornecedor->logradouro = $request->logradouro;
        $fornecedor->cidade = $request->cidade;
        $fornecedor->estado = $request->estado;
        $fornecedor->razao_social = $request->razao_social;

        $fornecedor->save();

        return redirect()->route('fornecedor.index')->with('success', 'fornecedor cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor = Fornecedores::findOrFail($id);

        return view('fornecedor.show', compact('fornecedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = Fornecedores::findOrFail($id);

        return view('fornecedor.edit', compact('fornecedor'));
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
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'razao_social' => 'required',
        ]);

        $data = $request->all();

        Fornecedores::findOrFail($id)->update($data);

        return redirect()->route('fornecedor.index')->with('success', 'fornecedor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fornecedores::findOrFail($id)->delete();

        return redirect()->route('fornecedor.index')->with('success', 'fornecedor excluido com sucesso!');
    }
}
