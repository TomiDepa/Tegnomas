<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_permiso'];

    /* Relaciones */
    /* Rol y Permiso */
    public function rol_permiso(){
        return $this->hasMany(rol_permiso::class);
    }
}
