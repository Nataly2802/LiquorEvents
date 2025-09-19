<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function index()
    {
        $torneos = Torneo::all();
        return view('torneos.index', compact('torneos'));
    }

    public function create()
    {
        return view('torneos.create');
    }

    public function store(Request $request)
    {
        Torneo::create($request->all());
        return redirect()->route('torneos.index')->with('success', 'Torneo creado');
    }

    public function show(Torneo $torneo)
    {
        return view('torneos.show', compact('torneo'));
    }

    public function edit(Torneo $torneo)
    {
        return view('torneos.edit', compact('torneo'));
    }

    public function update(Request $request, Torneo $torneo)
    {
        $torneo->update($request->all());
        return redirect()->route('torneos.index')->with('success', 'Torneo actualizado');
    }

    public function destroy(Torneo $torneo)
    {
        $torneo->delete();
        return redirect()->route('torneos.index')->with('success', 'Torneo eliminado');
    }
}
