@extends('layouts.app')

@section('title', 'Categorias')
@section('header', 'Categorias')

@section('content')

<div>
    <a href="{{ route('categorias.create') }}">
        Nova categoria
    </a>
</div>

<div>
    @forelse($categorias as $categoria)
    <div>
        <div>
            <div>{{ $categoria->nome }}</div>
            @if($categoria->cor)
            <div style="color: {{ $categoria->cor }}">Cor: {{ $categoria->cor }}</div>
            @endif
            <div>{{ $categoria->descricao }}</div>
        </div>

        <div>
            <a href="{{ route('categorias.show', $categoria) }}">Ver</a>
            <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>

            <form method="POST" action="{{ route('categorias.destroy', $categoria) }}" onsubmit="return confirm('Remover esta categoria?')">
                @csrf
                @method('DELETE')
                <button>Remover</button>
            </form>
        </div>
    </div>
    @empty
    <p>Nenhuma categoria cadastrada</p>
    @endforelse
</div>
@endsection
