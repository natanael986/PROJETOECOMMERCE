@extends('site.layout')

@section('content')

<div style="padding-top: 100px;">
    @if($carrinhos->count() == 0)
    <h5>Seu carrinho está vazio</h5>
    <a href="{{ route('site.produtos') }}" style="text-decoration: none; border: none; background-color: transparent">
        <button type="button" class="btn btn-primary text-color" style="color: #180D2B; margin-left: 2px; font-weight: bold; margin-bottom: 3rem;">
            Voltar
            <i class="bi bi-arrow-return-left"></i>
        </button>
    </a>
    <div>
        <img src="{{ asset('images/carrinho_vazio.png') }}" alt="carrinho Vazio" margin="auto" max-width="900rem" height="500rem">
    </div>
    @else
    <h5>Seu carrinho possui {{ $carrinhos->count() }} produtos.</h5>
    <a href="{{ route('site.produtos') }}" style="text-decoration: none; border: none; background-color: transparent">
        <button type="button" class="btn btn-primary text-color" style="color: #180D2B; margin-left: 2px; font-weight: bold; margin-bottom: 3rem;">
            Voltar
            <i class="bi bi-arrow-return-left"></i>
        </button>
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Preços</th>
                <th scope="col">Quantidade</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carrinhos as $carrinho)
            <tr>
                @foreach ($produtos as $produto)
                @if($carrinho->produtos_id == $produto->id)
                <td><img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" width="70px" class="responsive-img circle"></td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td><input type="number" name="quantity" value="{{ $carrinho->quantidade }}" maxlength="{{$produto->quantidade}}"></td>
                @endif
                @endforeach
                <td>
                    <form action="{{ route('carrinho.destroy', $carrinho->id) }}" method="post">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection