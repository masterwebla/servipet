<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = ['nombre','descripcion','precio','cantidad','tipo_id','animal_id','estado_id'];
}