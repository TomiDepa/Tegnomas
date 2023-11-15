<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    /* Relaciones */
    /* User y Rol */
    public function user_rol(){
        return $this->hasMany(user_rol::class);
    }
    /* Rol y Permiso */
    public function rol_permiso(){
        return $this->hasMany(rol_permiso::class);
    }
}
