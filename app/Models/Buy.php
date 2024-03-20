<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    // public function provider(){  /*como se llama la tabla de la relacion*/
    //     return $this->belongsTo(Provider::class, 'id_proveedor'); /* nombre del campo de la tabla producto*/
    // }

    public function product(){  /*como se llama la tabla de la relacion*/
        return $this->belongsTo(Product::class, 'id_producto'); /* nombre del campo de la tabla producto*/
    }

    // public function category(){  /*como se llama la tabla de la relacion*/
    //     return $this->belongsTo(Category::class, 'id_categoria'); /* nombre del campo de la tabla producto*/
    // }
}
