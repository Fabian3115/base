<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all(); 
        return view('Interfaz.libros.index', compact('libros')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Interfaz.libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'estado_id' => 'required|integer|min:1',
            'titulo' => 'required|string|min:10',
            'autor' => 'required|string|min:5',
            'genero' => 'required|string|min:1',
            'ano_publicacion' => 'required|date',

        ]);

        Libro::create($request->all());

        return redirect()->route('libro.index')->with('success', 'Nuevo libro creado Exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libro = Libro::findOrFail($id);
        
        return view('Interfaz.libros.edit', compact('libro')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'estado_id' => 'required|integer|min:1',
            'titulo' => 'required|string|min:10',
            'autor' => 'required|string|min:5',
            'genero' => 'required|string|min:1',
            'ano_publicacion' => 'required|date',

        ]);

        $libro = Libro::findOrFail($id);
        $libro->update($request->all());

        return redirect()->route('libro.index')->with('success', 'Libro Actualizado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)    
    {
    
        $libro = Libro::findOrFail($id);
        $libro ->delete();

        return redirect()->route('libro.index')->with('danger', 'Registro Eliminado correctamente');
    }   
}
