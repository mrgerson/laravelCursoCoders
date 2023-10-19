<?php

namespace App\Models;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    //relacion de uno a muchos inversa con Course
    public function courses(){
        return $this->belongsTo(Course::class);
    }

    //relacion de uno a muchos con lessons
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
