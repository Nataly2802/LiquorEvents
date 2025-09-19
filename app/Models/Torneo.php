<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;

    protected $table = 'torneos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'fecha',
        'lugar',
        'descripcion'
    ];

    // Relación con participantes
    public function participantes()
    {
        return $this->hasMany(Participante::class, 'torneo_id');
    }
}
