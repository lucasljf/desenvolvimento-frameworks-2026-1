@extends('layouts.app')
@section('title', 'Detalhes')

@section('content')
<div>
    <div><span>Título:</span> {{ $categoria->titulo }}</div>
    <div><span>Descrição:</span> {{ $categoria->descricao }}</div>
    <div><span>Status:</span> {{ $categoria->status }}</div>

    <div>
        <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
        <a href="{{ route('categorias.index') }}">Voltar</a>
    </div>
</div>
@endsection