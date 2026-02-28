<?php

namespace App\Http\Controllers;

use App\Models\TarefaCategoria;
use Illuminate\Http\Request;

class TarefaCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = TarefaCategoria::latest()->get();
        return view('tarefas_categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefas_categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:20'],
            'cor' => ['nullable', 'string', 'max:20'],
            'descricao' => ['nullable', 'string'],
        ]);

        TarefaCategoria::create($dados);

        return redirect()->route('tarefas_categorias.index')->with('ok', 'Categoria criada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TarefaCategoria $tarefasCategoria)
    {
        return view('tarefas_categorias.show', compact('tarefasCategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TarefaCategoria $tarefasCategoria)
    {
        return view('tarefas_categorias.edit', compact('tarefasCategoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TarefaCategoria $tarefasCategoria)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:20'],
            'cor' => ['nullable', 'string', 'max:20'],
            'descricao' => ['nullable', 'string'],
        ]);

        $tarefasCategoria->update($dados);

        return redirect()->route('tarefas_categorias.index')->with('ok', 'Categoria atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TarefaCategoria $tarefasCategoria)
    {
        $tarefasCategoria->delete();
        return redirect()->route('tarefas_categorias.index')->with('ok', 'Categoria removida!');
    }
}
