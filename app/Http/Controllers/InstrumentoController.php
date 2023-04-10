<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public function showInstrumentoAgregar()
    {
        return view('instrumentos.agregar');
    }

    public function showInstrumentoSplit()
    {
        return view('instrumentos.split');
    }

    
}
