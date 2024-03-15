<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decline extends Model
{
    use HasFactory;

    public function decline(){  /*como se llama la tabla de la relacion*/
        return $this->belongsTo(Decline::class, 'id_producto'); /* nombre del campo de la tabla producto*/
    }
}
