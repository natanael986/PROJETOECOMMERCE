@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('site.produtos') }}"> Voltar <i class="bi bi-arrow-return-left"></i></a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img style="width: 500px; float: left; padding: 20px;" src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}">
            </div>
            <div style="height: 35rem; border: 1px solid black;">
                <div class="form-group">
                    @foreach($categorias as $categoria)
                    @if($produto->id_Categoria == $categoria->id)
                    <strong>Categoria: </strong>
                    {{ $categoria->nome }}
                    @endif
                    @endforeach
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
                    @foreach($fornecedores as $fornecedor)
                    @if($produto->id_Fornecedor == $fornecedor->id)
                    <strong>Fornecedor: </strong>
                    {{ $fornecedor->nome }}
                    @endif
                    @endforeach
                </div>
                <div class="form-group">
                    <strong>Descrição:</strong>
                    {{ $produto->descricao }}
                </div>
                <form action="{{ route('site.carrinho') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="@auth {{ Auth::user()->id }} @endauth" />
                    <input type="hidden" name="produtos_id" value="{{ $produto->id }}" />
                    @foreach($compras as $compra)
                    <input type="hidden" name="compras_id" value="{{ $compra->id }}" />
                    @endforeach
                    <input type="hidden" name="imagem" value="{{ $produto->imagem }}" />
                    <input type="hidden" name="nome" value="{{ $produto->nome }}" />
                    <input type="hidden" name="preco" value="{{ $produto->preco }}" />
                    <input class="input-style" type="number" name="quantidade" value="1" max="{{$produto->quantidade}}" />
                    <button type="submit" class="btn btn-primary text-color" style="color: #180D2B; font-weight: bold;"><i class="bi bi-cart"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection