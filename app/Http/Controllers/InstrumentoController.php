<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instrumento;

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

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    $instrumentos = new instrumento($validatedData);
    $instrumentos->save();

    return redirect()->route('tasks')->with('success', 'Instrumento agregada correctamente.');
}
}
