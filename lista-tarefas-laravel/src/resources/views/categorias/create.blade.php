@extends('layouts.app')

@section('title', 'Nova Categoria')

@section('content')

<div>
    <h1>Nova Categoria</h1>

    <form method="POST" action="{{ route('categorias.store') }}">
        @csrf

        @include('categorias._form')

        <div>
            <button type="submit">Criar Categoria</button>
            <a href="{{ route('categorias.index') }}">Cancelar</a>
        </div>
    </form>
</div>
@endsection
