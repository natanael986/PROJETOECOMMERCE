|@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('fornecedor.index') }}"> Voltar</a>
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

    <form action="{{ route('fornecedor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="input" name="nome" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong>Telefone:</strong>
                    <input type="input" name="telefone" class="form-control" placeholder="99999-9999" maxlength="11">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong>CEP:</strong>
                    <input type="input" name="cep" class="form-control" placeholder="CEP">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong>Endereço:</strong>
                    <input type="input" name="logradouro" class="form-control" placeholder="EX: Rua Galindo Neves">
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="input" name="estado" class="form-control" placeholder="SP">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong>cidade:</strong>
                    <input type="input" name="cidade" class="form-control" placeholder="Presidente Prudente">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong>Razão Social:</strong>
                    <input type="input" name="razao_social" class="form-control" placeholder="Razão Social">
                </div>
            </div>

            <div class="mt-4 col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection