<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    protected $table = "tipo_usuario";
    protected $fillable = ['nombre'];
}
