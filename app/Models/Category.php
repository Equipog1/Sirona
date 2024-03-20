<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function product(){  /*como se llama la tabla de la relacion*/
        return $this->hasMany(Product::class, 'id'); /* se pne el nombre del modelo */
    }

    // public function buy(){  /*como se llama la tabla de la relacion*/
    //     return $this->hasMany(Buy::class, 'id'); /* se pne el nombre del modelo */
    // }
}
