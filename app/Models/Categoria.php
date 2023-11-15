<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_categoria'];


    /* Relaciones */
    /* Categoria y posteo*/
    public function post_categoria(){
        return $this->hasMany(post_categoria::class);
    }
}
