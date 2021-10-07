<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desarolladores extends Model
{
    protected $table = "desarrolladores";
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'proyectoId'
    ];
    use HasFactory;
}
