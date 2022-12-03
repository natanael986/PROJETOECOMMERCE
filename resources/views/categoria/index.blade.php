@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-success" href="{{ route('categoria.create') }}">Criar Nova categoria</a>
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
            <th>Nome </th>
            <th>Descrição</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $categoria->nome }}</td>
            <td>{{ $categoria->descricao }}</td>
            <td>
                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categoria.show', $categoria->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('categoria.edit', $categoria->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $categorias->links() !!}
</div>

@endsection