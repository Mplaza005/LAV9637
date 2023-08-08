<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    
    public function estudiante(){
        return $this->belongsTo('App\Models\Estudiante');
    }

}
