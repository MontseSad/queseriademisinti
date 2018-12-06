<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $filltable = [
        'id', 'nombre' ,'cantidad', 'precio_u', 'precio_t', 'fecha', 'estado'
    ];
}