<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $fillable = [
        'titulo',
        'sipnosis',
        'anio_estreno',
        'id_categoria',
        'costo_de_renta_dia',
        'estado',
        'cantidad'
    ];


}
