<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all(); // pega todas as categorias
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create'); // exibe formulário
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'cor' => 'required|string|max:7'
        ]);

        // cria categoria
        Categoria::create($request->only('nome', 'cor'));

        return redirect()->route('categorias.index')->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria')); // opcional, se quiser mostrar detalhes
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria')); // exibe formulário de edição
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        // validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'cor' => 'required|string|max:7'
        ]);

        // atualiza categoria
        $categoria->update($request->only('nome', 'cor'));

        return redirect()->route('categorias.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoria deletada com sucesso!');
    }
}