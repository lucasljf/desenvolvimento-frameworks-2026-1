@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
<div class="container">
    <h1>Categorias</h1>

    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $categoria->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="color" name="cor" id="cor" class="form-control" value="{{ $categoria->cor }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection