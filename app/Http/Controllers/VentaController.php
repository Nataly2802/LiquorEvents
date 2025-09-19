<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('ventas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $venta = Venta::create([
            'cliente_id' => $request->cliente_id,
            'fecha' => now(),
            'total' => $request->total
        ]);

        // Guardar productos en la venta
        foreach ($request->productos as $producto_id => $cantidad) {
            if ($cantidad > 0) {
                $producto = Producto::find($producto_id);
                $venta->productos()->attach($producto_id, [
                    'cantidad' => $cantidad,
                    'precio' => $producto->precio
                ]);
            }
        }

        return redirect()->route('ventas.index')->with('success', 'Venta registrada');
    }

    public function show(Venta $venta)
    {
        return view('ventas.show', compact('venta'));
    }
}

