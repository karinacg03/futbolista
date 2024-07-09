<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $equipo = Equipo::create($request->all());
        return redirect()->route('equipos.index');
    }

    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $equipo->update($request->all());
        return redirect()->route('equipos.index');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index');
    }
}

