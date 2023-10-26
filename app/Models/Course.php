<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //relacion de uno a muchos con sections
    public function sections(){
        return $this->hasMany(Section::class);
    }

    //relacion de uno a muchos a travez de modelo section
    public function lessons(){
        return $this->hasManyThrough(Lesson::class, Section::class);
    }

    //relacion de muchos a muchos con tags
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
