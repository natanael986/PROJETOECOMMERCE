@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('fornecedor.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-color">Nome:</strong>
                <strong class="text-color">{{ $fornecedor->nome }}</strong>
            </div>
            <div class="form-group">
                <strong class="text-color">Telefone:</strong>
                <strong class="text-color">{{ $fornecedor->telefone }}</strong>
            </div>
            <div class="form-group">
                <strong class="text-color">CEP:</strong>
                <strong class="text-color">{{ $fornecedor->cep }}</strong>
            </div>
            <div class="form-group">
                <strong class="text-color">Endereço:</strong>
                <strong class="text-color">{{ $fornecedor->logradouro }}</strong>
            </div class="text-color">
            <div class="form-group">
                <strong class="text-color">Estado:</strong>
                <strong class="text-color">{{ $fornecedor->estado }}</strong>
            </div>
            <div class="form-group">
                <strong class="text-color">Cidade:</strong>
                <strong class="text-color">{{ $fornecedor->cidade }}</strong>
            </div>
            <div class="form-group">
                <strong class="text-color">Razão social:</strong>
                <strong class="text-color">{{ $fornecedor->razao_social }}</strong>
            </div>
        </div>
    </div>
</div>
@endsection