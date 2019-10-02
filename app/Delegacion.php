<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    protected $fillable = [
        'numero',
        'delegacion', 
        'region_id',  
    ]; 
    protected $table = 'delegacions';
    
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
