<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- O título do navegador será o definido na view --}}
    <title>@yield('title', 'Categorias')</title>
</head>

<body>
    <div class="container">
        <header>
            {{-- Se a view definir um título, use; senão, padrão "Categorias" --}}
            <h1>@yield('title', 'Categorias')</h1>
        </header>

        {{-- Mensagem de sucesso --}}
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        {{-- Conteúdo da view --}}
        @yield('content')
    </div>
</body>

</html>