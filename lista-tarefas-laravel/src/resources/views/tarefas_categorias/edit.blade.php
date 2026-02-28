@extends('layouts.app')
@section('title', 'Editar categoria')

@section('content')
<div>
    <form method="POST" action="{{ route('tarefas_categorias.update', $tarefasCategoria) }}">
        @csrf
        @method('PUT')
        @include('tarefas_categorias._form', ['categoria' => $tarefasCategoria])
        <div>
            <button>Atualizar</button>
            <a href="{{ route('tarefas_categorias.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection
