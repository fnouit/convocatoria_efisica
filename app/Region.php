<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'nombre',
        'sede',
    ];  
    protected $table = 'regions';
    public function delegaciones()
    {
        return $this->hasMany(Delegacion::class);
    }
}
