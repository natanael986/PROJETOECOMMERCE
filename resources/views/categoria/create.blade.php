|@extends('site.layout')

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

    <form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection