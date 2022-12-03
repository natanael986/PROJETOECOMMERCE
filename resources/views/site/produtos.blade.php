@extends('site.layout')

@section('content')

<div style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <div class="FiltrosDIV">
                    <div class="Filtros">
                        <form action="{{ route('site.produtos') }}" method="POST">
                            <select name="filtro" class="form-control" placeholder="Fornecedor">
                                @foreach ($produtos as $produto)
                                <option value="{{$produto->id}}">
                                    {{$produto->nome}}
                                </option>
                                @endforeach
                            </select>
                            <button style="width: 100%" type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
                @foreach($produtos as $produto)
                <div>
                    <ul>
                        @if($produto->id == $produto->id)
                        <li><a type="radius">{{ $produto->nome }}</a></li>
                        @endif
                    </ul>
                </div>
                @endforeach -->
                <div class="row m-auto">
                    @foreach($produtos as $produto)
                    <div class="col ms-5">
                        <div class="card shadow-cards" style="width: 20rem; height: 30rem; margin-bottom: 50px;">
                            <img src="{{ asset($produto->imagem) }}" style="height: 20rem;" class="card-img-top" alt="{{ $produto->nome }}">
                            <div class="card-body cards-all">
                                <h5 class="card-title">{{ $produto->nome }}</h5>
                                <p class="card-text">{{ $produto->preco }}</p>
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
                                    <div class="produtoCompra">
                                        <input class="input-style" type="number" name="quantidade" value="1" max="{{$produto->quantidade}}" />
                                        <button type="submit" class="btn btn-primary text-color" style="color: #180D2B; font-weight: bold;"><i class="bi bi-cart"></i></button>
                                        <a href="{{ route('showproduto.show', $produto->id) }}" style="text-decoration: none; border: none; background-color: transparent">
                                            <button type="button" class="btn btn-primary text-color" style="color: #180D2B; margin-left: 2px; font-weight: bold;">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

@endsection