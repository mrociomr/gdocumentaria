<?php

namespace App\Http\Controllers;

use App\Models\Indicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IndicacionController extends Controller
{
    
    public function index()
    {
        $indicaciones = Indicacion::all();

        return view('indicaciones.index', compact('indicaciones'));
    }

   
    public function create()
    {
        return view('indicaciones.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
        
        $indicacion = new Indicacion();
        $indicacion->nombre = $request->nombre;

        $indicacion->save();

        return Redirect::route('indicaciones.index');
    }

  
    public function show(Indicacion $indicacione)
    {
        //
    }


    public function edit(Indicacion $indicacione)
    {
        return view('indicaciones.edit', compact('indicacione'));
    }

 
    public function update(Request $request, Indicacion $indicacione)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
        
        $indicacione->nombre = $request->nombre;

        $indicacione->save();

        return Redirect::route('indicaciones.index');
    }

    public function destroy(Indicacion $indicacione)
    {
        $indicacione->delete();

        return Redirect::back();
    }
}
