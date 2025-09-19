<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Producto extends Model

  {  
    protected $table = 'producto';

    
    protected $primaryKey = 'IdProducto';

    
    public $incrementing = true;
    protected $keyType = 'int';

    
    public $timestamps = false;

     public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }


    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'detalle_mov', 'producto_id', 'venta_id');
    }

    
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
