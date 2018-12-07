<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $filltable = [
        'id', 'nombre' ,'receta', 'precio_in', 'precio_out', 'descripcion'
    ];

    /**
     * Get the Quesero that owns the Lote.
     */
    public function lote()
    {
        return $this->belongsTo('App\Lote');
    }
}
