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
            <h1>@yield('header', 'Lista de Tarefas')</h1>
            <nav>
                <a href="{{ route('tarefas.index') }}">Tarefas</a> | 
                <a href="{{ route('categorias.index') }}">Categorias</a>
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