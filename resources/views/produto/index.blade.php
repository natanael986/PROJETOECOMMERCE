@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-success" href="{{ route('produto.create') }}">Adicionar novo produto</a>
    <p></p>
    @if ($message = Session::get('success'))
    <p></p>
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Fornecedor</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ ++$i }}</td>
            @foreach($categorias as $categoria)
            @if($produto->id_Categoria == $categoria->id)
            <td>{{ $categoria->nome }}</td>
            @endif
            @endforeach
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->preco }}</td>
            <td>{{ $produto->quantidade }}</td>
            @foreach($fornecedores as $fornecedor)
            @if($produto->id_Fornecedor == $fornecedor->id)
            <td>{{ $fornecedor->nome }}</td>
            @endif
            @endforeach
            <td>
                <form action="{{ route('produto.destroy', $produto->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('produto.show', $produto->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('produto.edit', $produto->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div id="sytleButtonPaginate">
        {!! $produtos->links() !!}
    </div>

</div>

@endsection