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

    <form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <strong>Categoria: </strong>
                    <select name="id_Categoria" class="form-control" placeholder="Fornecedor">
                        @foreach ($data['categorias'] as $categoria)
                        <option value="{{$categoria->id}}">
                            {{$categoria->nome}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong>Nome: </strong>
                    <input type="input" name="nome" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong>Preço: </strong>
                    <input type="input" name="preco" class="form-control" placeholder="EX: 99.99" maxlength="11">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="input" name="quantidade" class="form-control" placeholder="EX: 12">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="input" name="descricao" class="form-control" placeholder="Informe a descrição">
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <strong>Fornecedor:</strong>
                    <select name="id_Fornecedor" class="form-control" placeholder="Fornecedor">
                        @foreach ($data['fornecedores'] as $fornecedor)
                        <option value="{{$fornecedor->id}}">
                            {{$fornecedor->nome}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-4">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="imagem" class="form-control-file">
                </div>
            </div>

            <div class="mt-4 col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection