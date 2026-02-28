<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Category::latest()->get();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:80'],
            'cor' => ['nullable', 'string', 'max:20'],
            'descricao' => ['nullable', 'string'],
        ]);

        Category::create($dados);

        return redirect()->route('categorias.index')->with('ok', 'Categoria criada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $categoria)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:80'],
            'cor' => ['nullable', 'string', 'max:20'],
            'descricao' => ['nullable', 'string'],
        ]);

        $categoria->update($dados);

        return redirect()->route('categorias.index')->with('ok', 'Categoria atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('ok', 'Categoria removida!');
    }
}
