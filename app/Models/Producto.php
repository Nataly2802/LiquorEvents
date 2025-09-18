<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table = 'producto';

    
    protected $primaryKey = 'IdProducto';

    
    public $incrementing = true;
    protected $keyType = 'int';

    
    public $timestamps = false;

    
    protected $fillable = [
        'codigo',
        'Nombre',
        'Stock_total',
        'Unidad_medida',
        'Precio_compra',
        'Precio_venta',
        'Marca',
        'Referencia',
        'Estado',
        'Tipo_producto',
        'IdCategoria',
        'IdDistribuidor',
        'Foto'
    ];
}
