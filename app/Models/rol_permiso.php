<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_permiso extends Model
{
    use HasFactory;
    protected $fillable = ['id_rol','id_permiso'];


    /* Relaciones */
    /* Rol y Permiso */
    public function permiso(){
        return $this->belongsTo(permiso::class);
    }
    public function rol(){
        return $this->belongsTo(rol::class);
    }
}
