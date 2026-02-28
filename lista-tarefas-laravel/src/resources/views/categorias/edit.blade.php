@extends('layouts.app')

@section('title', 'Editar categoria')

@section('content')
<h2>Editar categoria</h2>

<form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
    @method('PUT')
    @include('categorias._form')
</form>

@endsection
