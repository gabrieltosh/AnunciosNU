<?php

namespace anuncios;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = 'clases';

    protected $fillable= ['nombre','descripcion','imagen'];
}
