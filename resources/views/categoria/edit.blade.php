@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('categoria.index') }}"> Voltar</a>
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

    <form action="{{ route('categoria.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin: auto">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-color">Nome:</strong>
                        <input class="form-control" name="nome" value="{{ $categoria->nome }}" placeholder="Nome" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-color">Descrição:</strong>
                        <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição">{{ $categoria->descricao }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection