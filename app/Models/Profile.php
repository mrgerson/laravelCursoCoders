<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relacion de uno a uno o de uno a muchos  inversa con perfil
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relación uno a uno con address
    public function address(){
        return $this->hasOne(Address::class);
    }
}
