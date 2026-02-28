@extends('layouts.app')

@section('title', $categoria->nome)

@section('content')

<div>
    <div>
        <h1>{{ $categoria->nome }}</h1>
        <p>{{ $categoria->descricao }}</p>
        <small>Criado em: {{ $categoria->created_at->format('d/m/Y H:i') }}</small>
        <small>Atualizado em: {{ $categoria->updated_at->format('d/m/Y H:i') }}</small>
    </div>

    <div>
        <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
        <a href="{{ route('categorias.index') }}">Voltar</a>

        <form method="POST" action="{{ route('categorias.destroy', $categoria) }}" onsubmit="return confirm('Remover esta categoria?')">
            @csrf
            @method('DELETE')
            <button>Remover</button>
        </form>
    </div>
</div>
@endsection
