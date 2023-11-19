<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        // Devuelve la vista de la página de inicio.
        return view('inicio');
    }
}
