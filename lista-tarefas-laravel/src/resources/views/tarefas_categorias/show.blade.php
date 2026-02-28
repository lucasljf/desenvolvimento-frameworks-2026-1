@extends('layouts.app')
@section('title', 'Detalhes da Categoria')

@section('content')
<div>
    <div><span>Nome:</span> {{ $tarefasCategoria->nome }}</div>
    @if($tarefasCategoria->cor)
    <div>
        <span>Cor:</span> 
        <div style="background-color: {{ $tarefasCategoria->cor }}; width: 30px; height: 30px; border-radius: 50%; display: inline-block;"></div>
        {{ $tarefasCategoria->cor }}
    </div>
    @endif
    <div><span>Descrição:</span> {{ $tarefasCategoria->descricao }}</div>

    <div>
        <a href="{{ route('tarefas_categorias.edit', $tarefasCategoria) }}">Editar</a>
        <a href="{{ route('tarefas_categorias.index') }}">Voltar</a>
    </div>
</div>
@endsection
