<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'mensaje' => 'required|string'
        ]);

        Contacto::create($request->all());

        return redirect()->route('contacto.index')->with('success', 'Gracias por contactarnos, pronto te responderemos.');
    }
}
