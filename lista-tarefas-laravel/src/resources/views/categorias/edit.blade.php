@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')

<div>
    <h1>Editar Categoria</h1>

    <form method="POST" action="{{ route('categorias.update', $categoria) }}">
        @csrf
        @method('PUT')

        @include('categorias._form')

        <div>
            <button type="submit">Atualizar Categoria</button>
            <a href="{{ route('categorias.index') }}">Cancelar</a>
        </div>
    </form>
</div>
@endsection
