<?php

namespace App\Http\Controllers;
use App\Models\Oficina;
use App\Models\Area;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
             /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficinas['oficinas'] = Oficina::paginate(100);
        return view('oficina.index', $oficinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nueva_oficina = Oficina::all();
        return view('oficina.form.create', compact('nueva_oficina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $oficina = new Oficina();

        $oficina->nombre = $request->nombre;
        
        $oficina->save();

        return redirect()->route('oficinas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oficina $oficina
     * @return \Illuminate\Http\Response
     */
    public function show(Oficina $oficina)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function edit(Oficina $oficina)
    {
        return view('oficina.form.edit', compact('oficina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $oficina->nombre = $request->nombre;

        $oficina->save();

        return redirect()->route('oficinas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Oficina
     */
    public function destroy($id)
    {
        Oficina::destroy($id);

        return redirect('oficinas')->with('eliminar', 'delete');
    }
}
