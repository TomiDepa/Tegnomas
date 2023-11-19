<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductosController extends Controller
{
    public function index()
    {
        // Devuelve la vista de la página de productos.
        return view('productos');
    }
}
