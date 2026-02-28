<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lista de Tarefas')</title>
</head>

<body>
    <div>
        <header>
            <h1>@yield('title', 'Lista de Tarefas')</h1>
            <nav style="margin-top: 10px;">
                <a href="{{ route('tarefas.index') }}" style="margin-right: 20px;">📋 Tarefas</a>
                <a href="{{ route('tarefas_categorias.index') }}">🏷️ Categorias</a>
            </nav>
        </header>
    </div>

    @if(session('ok'))
    <div>
        {{ session('ok') }}
    </div>
    @endif

    @yield('content')
</body>

</html>