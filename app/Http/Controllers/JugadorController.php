<?php

namespace App\Http\Controllers;

use App\Models\jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    public function create()
    {
        return view('jugadores.create');
    }

    public function store(Request $request)
    {
        $jugador = jugador::create($request->all());
        return redirect()->route('jugadores.index');
    }

    public function show(jugador $jugador)
    {
        return view('jugadores.show', compact('jugador'));
    }

    public function edit(jugador $jugador)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    public function update(Request $request, jugador $jugador)
    {
        $jugador->update($request->all());
        return redirect()->route('jugadores.index');
    }

    public function destroy(jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugadores.index');
    }
}

