<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    
    public function index()
    {
        $productos = Producto::all(); 
        return view('catalogo', compact('productos'));
    }

    public function porCategoria($id)
    {
        $productos = Producto::where('IdCategoria', $id)->get();
        return view('catalogo', compact('productos'));
    }
}
