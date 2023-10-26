<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'body',
        'commentable_id',
        'commentable_type',
    ];

    //relacion inversa polimorfica de uno a uno o muchos
    public function commentable()
    {
        return $this->morphTo();
    }
}
