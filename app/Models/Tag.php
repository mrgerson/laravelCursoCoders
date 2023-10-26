<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //relacion de muchos a muchos con posts
    /* public function posts(){
        return $this->belongsToMany(Post::class)->withTimestamps();
    } */

    //reelacion de muchos a muchos inversa poliforficas con posts
    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    //reelacion de muchos a muchos inversa poliforficas con coures
    public function courses(){
        return $this->morphedByMany(CÑourse::class, 'taggable');
    }
}
