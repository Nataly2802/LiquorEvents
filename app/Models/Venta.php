<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'venta';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'cliente_id',
        'fecha',
        'total'
    ];

    // Relación con cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Relación con productos (muchos a muchos)
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'detalle_mov', 'venta_id', 'producto_id')
                    ->withPivot('cantidad', 'precio');
    }
}
