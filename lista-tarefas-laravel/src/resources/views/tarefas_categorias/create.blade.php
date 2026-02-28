@extends('layouts.app')
@section('title', 'Nova categoria')

@section('content')
<div>
    <form method="POST" action="{{ route('tarefas_categorias.store') }}">
        @csrf
        @include('tarefas_categorias._form')
        <div>
            <button>Salvar</button>
            <a href="{{ route('tarefas_categorias.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection
