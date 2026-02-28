@extends('layouts.app')

@section('title', 'Ver categoria')

@section('content')
<h2>{{ $categoria->nome }}</h2>

<p><b>Cor:</b> {{ $categoria->cor }}</p>
<p><b>Descrição:</b> {{ $categoria->descricao }}</p>

<a href="{{ route('categorias.index') }}">Voltar</a>
@endsection