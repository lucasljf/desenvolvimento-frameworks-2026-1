<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::latest()->get();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:100'],
            'cor' => ['nullable', 'string', 'max:20'],
            'descricao' => ['nullable', 'string'],
        ]);

        Categoria::create($dados);

        return redirect()->route('categorias.index')->with('ok', 'Categoria criada!');
    }

    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categorias'));
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:100'],
            'cor' => ['nullable', 'string', 'max:20'],
            'descricao' => ['nullable', 'string'],
        ]);

        $categoria->update($dados);

        return redirect()->route('categorias.index')->with('ok', 'Categoria atualizada!');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('ok', 'Categoria removida!');
    }
}
