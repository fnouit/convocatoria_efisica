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

    public function scopeCodigo($query, string $codigo) {
        return $query->where('codigo_confirmacion', $codigo);
     }

    public function scopeNum($query, string $num) {
    return $query->where('num_personal', $num);
    }     
     

}
