
@extends('layouts.app')

@section('title', 'Categorias')

@section('content')

<div>
    <a href="{{ route('categorias.create') }}">Nova categoria</a>
</div>

<div>
    @forelse($categorias as $categoria)
    <div>
        <div>
            <div style="display:flex;align-items:center;gap:8px;">
                <div style="width:16px;height:16px;background:{{ $categoria->cor ?? '#ccc' }}"></div>
                <div>{{ $categoria->nome }}</div>
            </div>
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
