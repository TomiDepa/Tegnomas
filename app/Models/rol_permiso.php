<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_permiso extends Model
{
    use HasFactory;
    protected $fillable = ['id_rol','id_permiso'];
}
