@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('produto.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                {{ $produto->id_Categoria}}
            </div>
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $produto->nome }}
            </div>
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $produto->preco }}
            </div>
            <div class="form-group">
                <strong>Quantidade:</strong>
                {{ $produto->quantidade }}
            </div>
            <div class="form-group">
                <strong>Fornecedor:</strong>
                {{ $produto->id_Fornecedor }}
            </div>
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $produto->descricao }}
            </div>
            <div class="form-group">
                <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}">
            </div>
        </div>
    </div>
</div>
@endsection