<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    // Query Scope

    public function scopeBusqueda($query,$correo='')
    {
        if (trim($correo) != "")
        {
            return $query->where('correo', $correo);
        }
    }    
}
