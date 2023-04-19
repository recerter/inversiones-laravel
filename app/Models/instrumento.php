<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instrumento extends Model
{
    use HasFactory;

    protected $fillable = [
        'instrumento_nombre',
        'instrumento_moneda',
        'instrumento_mercado',
        'instrumento_sigla_api',
        'instrumento_sigla',
        'instrumento_tipo',
        'instrumento_descripcion',
        'instrumento_imagen',
        'instrumento_ultimoPrecio',
        'instrumento_ultimoPrecioCambio',
        'instrumento_ultimoPrecioFecha',
    ];
}
