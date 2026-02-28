@extends('layouts.app')

@section('title', 'Lista de Categorias')

@section('content')

<div>
    <a href="{{ route('tarefas_categorias.create') }}">
        Nova categoria
    </a>
</div>

<div>
    @forelse($categorias as $categoria)
    <div>
        <div>
            <div>{{ $categoria->nome }}</div>
            @if($categoria->cor)
            <div style="background-color: {{ $categoria->cor }}; width: 30px; height: 30px; border-radius: 50%;"></div>
            @endif
            <div>{{ $categoria->descricao }}</div>
        </div>

        <div>
            <a href="{{ route('tarefas_categorias.show', $categoria) }}">Ver</a>
            <a href="{{ route('tarefas_categorias.edit', $categoria) }}">Editar</a>

            <form method="POST" action="{{ route('tarefas_categorias.destroy', $categoria) }}" onsubmit="return confirm('Remover esta categoria?')">
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
