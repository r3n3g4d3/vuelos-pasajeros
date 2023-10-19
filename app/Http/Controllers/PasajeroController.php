<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use Illuminate\Http\Request;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasajeros = Pasajero::all();
        return view('pasajeros.index', compact('pasajeros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasajeros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required',
        ]);

        Pasajero::create($request->all());

        return redirect()->route('pasajeros.index')->with('success', 'Pasajero creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasajero $pasajero)
    {
        return view('pasajeros.show', compact('pasajero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasajero $pasajero)
    {
        return view('pasajeros.edit', compact('pasajero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasajero $pasajero)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required',
        ]);

        $pasajero->update($request->all());

        return redirect()->route('pasajeros.index')->with('success', 'Pasajero actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasajero $pasajero)
    {
        $pasajero->delete();

        return redirect()->route('pasajeros.index')->with('success', 'Pasajero eliminado correctamente.');
    }
}
