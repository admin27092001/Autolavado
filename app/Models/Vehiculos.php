<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    protected $fillable = [
        'placa',
        'tipo',
        'marca',
        'modelo',
        'color',
        'puertas',
        'estatus',
        'fechareg'


    ];
}
