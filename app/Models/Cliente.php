<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente'; // nombre de la tabla en tu BD
    protected $primaryKey = 'id'; // cambia si tu PK es distinta
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'direccion',
        'documento'
    ];

    // Relación con ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'cliente_id');
    }
}
