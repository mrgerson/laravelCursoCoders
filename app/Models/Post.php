<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relación invesa de uno a uno o muchos con categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
