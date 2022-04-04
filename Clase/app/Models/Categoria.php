<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //Relacion de muchos a muchos
    public function Producto(){
        return $this->belongsToMany('App\Models\Producto');
    }
}
