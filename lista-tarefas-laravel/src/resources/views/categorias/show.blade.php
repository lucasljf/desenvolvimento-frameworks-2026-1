@extends('layouts.app')

@section('title', 'Categoria')

@section('content')

<h1>{{ $categoria->nome }}</h1>

<div>
    <div>Cor: <span style="display:inline-block;width:12px;height:12px;background:{{ $categoria->cor ?? '#ccc' }}"></span> {{ $categoria->cor }}</div>
    <div>Descrição: {{ $categoria->descricao }}</div>
</div>

<div>
    <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
    <a href="{{ route('categorias.index') }}">Voltar</a>
</div>

@endsection
