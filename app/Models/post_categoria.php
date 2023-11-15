<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_categoria extends Model
{
    use HasFactory;
    protected $fillable = ['id_post','id_categoria'];


    /* Relaciones */
    /* Categoria y posteo*/
    public function Categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function post(){
        return $this->belongsTo(post::class);
    }
}
