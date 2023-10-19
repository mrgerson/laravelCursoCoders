<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    //relacion de uno a muchos inversa con sectiones
    public function sections(){
        return $this->belongsTo(Section::class);
    }
}
