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

    //relacion de muchos a muchos con tag
    /* public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    } */

    //relacion de muchos a muchos poliforfica con tags
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }

    //relacion de uno a uno polimorfica con image
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //relcion de uno a muchos polimorfica con comentarios
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


}
