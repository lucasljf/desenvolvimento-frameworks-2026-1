@extends('layouts.app')

@section('title', 'Nova Categoria')

@section('content')

<h1>Nova categoria</h1>

<form method="POST" action="{{ route('categorias.store') }}">
    @csrf

    @include('categorias._form')

    <div>
        <button>Criar</button>
    </div>
</form>

@endsection
