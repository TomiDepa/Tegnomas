<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','contenido','fecha_publicacion','id_user'];

    /* Relaciones */
    /* Categoria y posteo*/
    public function post_categoria(){
        return $this->hasMany(post_categoria::class);
    }
}
