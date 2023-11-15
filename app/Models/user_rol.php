<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_rol extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','id_rol'];

    /* Relaciones */
    /* User y Rol */
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function rol(){
        return $this->belongsTo(rol::class);
    }
}
