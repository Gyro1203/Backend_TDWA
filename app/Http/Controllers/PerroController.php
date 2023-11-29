<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Http\Request;

class PerroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perros = Perro::all();
        return view('perros.index', compact('perros'));
        // pagina de inicio
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perro = new Perro();
        return view('perros.create', compact('perro'));
        // formulario para crear un nuevo perro
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // guardar el nuevo perro en la base de datos
    }

    /**
     * Display the specified resource.
     */
    public function show(Perro $perro)
    {
        // mostrar la información de un perro
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perro $perro)
    {
        // formulario para editar un perro
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perro $perro)
    {
        // guardar los cambios del perro en la base de datos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perro $perro)
    {
        // eliminar el perro de la base de datos
    }
}
