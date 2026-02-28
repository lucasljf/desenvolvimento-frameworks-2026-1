@extends('layouts.app')
@section('title', 'Nova Categoria')

@section('content')
<div>
    <form method="POST" action="{{ route('categorias.store') }}">
        @csrf
        @include('categoria._form')
        <div>
            <button>Salvar</button>
            <a href="{{ route('categorias.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection