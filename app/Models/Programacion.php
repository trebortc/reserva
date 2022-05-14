<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programacion extends Model
{
    use HasFactory;
    protected $fillable = ['idcliente','idtarea','idtecnico','tiempo_inicio','tiempo_fin','fecha','estado','latitud','longitud','observaciones'];
}
