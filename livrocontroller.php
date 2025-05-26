<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'ano_publicacao' => 'required|digits:4|integer',
            'editora' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
        ]);

        Livro::create($request->all());

        return redirect()->route('livros.index')
            ->with('success', 'Livro criado com sucesso.');
    }

    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro'));
    }

    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'ano_publicacao' => 'required|digits:4|integer',
            'editora' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
        ]);

        $livro->update($request->all());

        return redirect()->route('livros.index')
            ->with('success', 'Livro atualizado com sucesso.');
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')
            ->with('success', 'Livro excluído com sucesso.');
    }
}
