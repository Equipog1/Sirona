<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category(){  /*como se llama la tabla de la relacion*/
        return $this->belongsTo(Category::class, 'id_categoria'); /* nombre del campo de la tabla producto*/
    }

    public function provider(){  /*como se llama la tabla de la relacion*/
        return $this->belongsTo(Provider::class, 'id_proveedor'); /* nombre del campo de la tabla proveedor*/
    }
    public function sale(){  /*como se llama la tabla de la relacion cruzada*/
        return $this->hasMany(Product::class, 'id'); /* se pne el nombre del modelo */
    }
    public function decline(){  /*como se llama la tabla de la relacion cruzada*/
        return $this->hasMany(Decline::class, 'id'); /* se pne el nombre del modelo */
    }
    public function buy(){  /*como se llama la tabla de la relacion*/
        return $this->hasMany(Buy::class, 'id'); /* se pne el nombre del modelo */
    }

   


}
