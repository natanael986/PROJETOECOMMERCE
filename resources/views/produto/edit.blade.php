|@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('produto.index') }}"> Voltar</a>
    <p></p>

    @if ($errors->any())
    <p></p>
    <div class="alert alert-danger">
        <strong>Ops!</strong> Houve algum problema com a entrada de dados.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('produto.update', $produto) }}" method="POST" nctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <strong class="text-color">Categoria: </strong>
                    <select name="id_Categoria" class="form-control" placeholder="Categoria">
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}" @if ($categoria->id == $produto->categoria_id)
                            selected
                            @endif
                            >
                            {{$categoria->nome}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong class="text-color">Nome: </strong>
                    <input type="input" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong class="text-color">Preço: </strong>
                    <input type="input" name="preco" value="{{ $produto->preco }}" class="form-control" placeholder="99999-9999" maxlength="11">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong class="text-color">Quantidade:</strong>
                    <input type="input" name="quantidade" value="{{ $produto->quantidade }}" class="form-control" placeholder="CEP">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong class="text-color">Descrição:</strong>
                    <input type="input" name="descricao" value="{{ $produto->descricao }}" class="form-control" placeholder="EX: Rua Galindo Neves">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <strong class="text-color">Fornecedor:</strong>
                    <select name="id_Fornecedor" class="form-control" placeholder="Fornecedor">
                        @foreach ($fornecedores as $fornecedor)
                        <option value="{{$fornecedor->id}}" @if ($fornecedor->id == $produto->id_Fornecedor)
                            selected
                            @endif
                            >
                            {{$fornecedor->nome}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-4">
                <div class="form-group">
                    <strong class="text-color">Imagem:</strong>
                    <input type="file" name="imagem" class="form-control-file" placeholder="Imagem">
                </div>
            </div>

            <div class="mt-4 col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection