<?php

namespace App\Http\Controllers;
use App\Models\Asignacion;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Ui\Presets\React;

class AsignacionController extends Controller
{
     
    public function index()
    {
        $asignacion = Asignacion::all();

        return view('asignaciones.index', compact('asignacion'));
    }

    
    public function create()
    {
        $user = User::all();
        return view('asignaciones.create', compact('user'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'rol_id' => 'required'
        ]);

        $asignar = new Asignacion();

        $asignar->user_id = $request->user_id;
        $asignar->rol_id = $request->rol_id;
        $asignar->fecha_inicio = Carbon::now();
        $asignar->user_id = $request->user_id;

        $asignar->save();

        return Redirect::route('asignaciones.index');

    }

    
    public function show(Asignacion $asignacione)
    {
        //
    }

    
    public function edit(Asignacion $asignacione)
    {
        $user = User::all();

        return view('asignaciones.edit', compact('asignacione', 'user'));
    }

   
    public function update(Request $request, Asignacion $asignacione)
    {
        $request->validate([
            'rol_id' => 'required'
        ]);

        // $asignar = new Asignacion();

        $asignacione->user_id = $request->user_id;
        $asignacione->rol_id = $request->rol_id;
        $asignacione->fecha_fin = Carbon::now();
        $asignacione->user_id = $request->user_id;

        $asignacione->save();

        return Redirect::route('asignaciones.index');
    }

    
    public function destroy(Asignacion $asignacion)
    {
        $asignacion->delete();

        return Redirect::route('asignaciones.index');
    }
}
