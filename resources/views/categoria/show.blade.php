@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('categoria.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Nome:</strong>
                <strong class="text-color">{{ $categoria->nome }}</strong>
            </div>
            <div class="form-group">
                <strong>Descrição:</strong>
                <strong class="text-color">{{ $categoria->descricao }}</strong>
            </div>
        </div>
    </div>
</div>
@endsection