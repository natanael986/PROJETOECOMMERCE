@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-success" href="{{ route('fornecedor.create') }}">Criar Nova fornecedor</a>
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
            <th>Nome</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Telefone</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($fornecedores as $fornecedor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $fornecedor->nome }}</td>
            <td>{{ $fornecedor->estado }}</td>
            <td>{{ $fornecedor->cidade }}</td>
            <td>{{ $fornecedor->telefone }}</td>
            <td>
                <form action="{{ route('fornecedor.destroy', $fornecedor->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('fornecedor.show', $fornecedor->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('fornecedor.edit', $fornecedor->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $fornecedores->links() !!}
</div>

@endsection