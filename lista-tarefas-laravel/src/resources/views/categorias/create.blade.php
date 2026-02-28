@extends('layouts.app')

@section('title', 'Nova categoria')

@section('content')
<h2>Nova categoria</h2>

<form action="{{ route('categorias.store') }}" method="POST">
    @include('categorias._form')
</form>

@endsection