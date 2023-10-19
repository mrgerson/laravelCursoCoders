<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //relacion de muchos a muchos con posts
    public function posts(){
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
