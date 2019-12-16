<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{   
    protected $table = "tiendas";
    protected $primaryKey = 'id';
    protected $fillable=['nombre_tienda','direccion','telefono','nit'];

}
