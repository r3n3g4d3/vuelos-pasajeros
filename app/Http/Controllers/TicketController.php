<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use App\Models\Vuelo;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasajeros = Pasajero::all();
        $vuelos = Vuelo::all();

        return view('tickets.index')->with('pasajeros', $pasajeros)->with('vuelos', $vuelos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasajeros = Pasajero::all();
        $vuelos = Vuelo::all();
        return view('tickets.create', compact('pasajeros', 'vuelos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pasajero_id' => 'required',
            'vuelo_id' => 'required',
            'ticket' => 'required',
        ]);

        // Attach the relationship in the pivot table 'tickets'
        Pasajero::find($request->pasajero_id)->vuelos()->attach($request->vuelo_id, ['ticket' => $request->ticket]);

        return redirect()->route('tickets.create')->with('success', 'Ticket creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        // Encuentra el ticket en la tabla pivot 'tickets'
        $ticket = Pasajero::find($id)->vuelos()->wherePivot('id', $id)->first();

        // Elimina el ticket de la tabla pivot 'tickets'
        if ($ticket) {
            Pasajero::find($id)->vuelos()->detach($ticket->id);
            return redirect()->route('tickets.create')->with('success', 'Ticket eliminado correctamente.');
        } else {
            return redirect()->route('tickets.create')->with('error', 'Ticket no encontrado.');
        }
    }
}
