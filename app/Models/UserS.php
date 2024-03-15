<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserS extends Model
{
    use HasFactory;

    public function users(){  /*como se llama la tabla de la relacion*/
        return $this->hasMany(UserS::class, 'id'); /* se pne el nombre del modelo */
    }
}
