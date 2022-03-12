<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apaterno',
        'amaterno',
        'direccion',
        'telefono',
        'correo',
        'fechareg',
        'estatus'


    ];
}
