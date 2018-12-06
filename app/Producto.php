<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $filltable = [
        'id', 'nombre' ,'receta', 'precio_in', 'precio_out', 'descripcion'
    ];
}
