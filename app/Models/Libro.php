<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado_id',
        'titulo',
        'autor',
        'genero',
        'ano_publicacion',
    ];
}
