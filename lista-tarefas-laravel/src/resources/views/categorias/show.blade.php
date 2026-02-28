@extends('layouts.app')
@section('nome', 'Detalhes')

@section('content')
<div>
    <div><span>nome:</span> {{ $categoria->nome }}</div>
    <div><span>cor:</span> {{ $categoria->cor }}</div>
    <div><span>descricao:</span> {{ $categoria->descricao }}</div>

    <div>
        <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
        <a href="{{ route('categorias.index') }}">Voltar</a>
    </div>
</div>
@endsection