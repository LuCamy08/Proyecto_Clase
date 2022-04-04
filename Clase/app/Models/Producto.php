<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa) con la tabla Users
    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    //Relacion de muchos a muchos
    public function Categoria(){
        return $this->belongsToMany('App\Models\Categoria');
    }
}
