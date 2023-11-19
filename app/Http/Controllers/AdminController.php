<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('administracion');
    }

    public function adminPost()
    {
        return view('admPost');
    }

    public function adminUsuario()
    {
        return view('admUsuario');
    }
}
