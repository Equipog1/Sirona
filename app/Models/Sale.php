<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function product(){  /*como se llama la tabla de la relacion*/
        return $this->belongsTo(Product::class, 'id_producto'); /* nombre del campo de la tabla proveedor*/
    }

    public function users(){  /*como se llama la tabla de la relacion*/
        return $this->belongsTo(UserS::class, 'id_usuario'); /* nombre del campo de la tabla proveedor*/
    }
}
