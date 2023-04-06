<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showPerfil()
    {
        return view('perfil');
    }
}
