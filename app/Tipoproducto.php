<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    protected $table = "tipos_productos";
    protected $fillable = ['nombre'];
}