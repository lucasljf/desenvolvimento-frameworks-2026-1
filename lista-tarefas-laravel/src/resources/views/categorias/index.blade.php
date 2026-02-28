@extends('layouts.app')

@section('title', 'Categorias') {{-- Define o título e o cabeçalho do layout --}}

@section('content')
<div class="container">
    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($categorias->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td><span style="background-color: {{ $categoria->cor }}; padding: 5px 10px; color: white;">{{ $categoria->cor }}</span></td>
                <td>
                    <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhuma categoria cadastrada.</p>
    @endif
</div>
@endsection