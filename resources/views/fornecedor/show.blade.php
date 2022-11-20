@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('fornecedor.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $fornecedor->nome }}
            </div>
            <div class="form-group">
                <strong>Telefone:</strong>
                {{ $fornecedor->telefone }}
            </div>
            <div class="form-group">
                <strong>CEP:</strong>
                {{ $fornecedor->cep }}
            </div>
            <div class="form-group">
                <strong>Endereço:</strong>
                {{ $fornecedor->logradouro }}
            </div>
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $fornecedor->estado }}
            </div>
            <div class="form-group">
                <strong>Cidade:</strong>
                {{ $fornecedor->cidade }}
            </div>
            <div class="form-group">
                <strong>Razão social:</strong>
                {{ $fornecedor->razao_social }}
            </div>
        </div>
    </div>
</div>
@endsection