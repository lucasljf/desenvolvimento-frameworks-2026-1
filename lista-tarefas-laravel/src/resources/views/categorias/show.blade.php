@extends('layouts.app')
@section('title', 'Detalhes')
@section('header', 'Categorias')

@section('content')
<div>
    <div><span>Nome:</span> {{ $categoria->nome }}</div>
    @if($categoria->cor)
    <div><span>Cor:</span> <span style="color: {{ $categoria->cor }}">{{ $categoria->cor }}</span></div>
    @endif
    <div><span>Descrição:</span> {{ $categoria->descricao }}</div>

    <div>
        <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
        <a href="{{ route('categorias.index') }}">Voltar</a>
    </div>
</div>
@endsection
