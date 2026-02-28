@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')

<h1>Editar categoria</h1>

<form method="POST" action="{{ route('categorias.update', $categoria) }}">
    @csrf
    @method('PUT')

    @include('categorias._form')

    <div>
        <button>Salvar</button>
    </div>
</form>

@endsection
