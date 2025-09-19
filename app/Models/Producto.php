<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto'; // nombre de la tabla en tu BD
    protected $primaryKey = 'id'; // cambia si tu PK se llama distinto
    public $timestamps = false; // si no tienes created_at / updated_at

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id'
    ];

    // Relación con categoría (si existe)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    // Relación con ventas (muchos a muchos)
    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'detalle_mov', 'producto_id', 'venta_id');
    }
}
