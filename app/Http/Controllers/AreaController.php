<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Oficina;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas['areas'] = Area::paginate(100);
        return view('area.index', $areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oficinas = Oficina::all();

        //$nueva_area = Area::all();
        return view('area.form.create', compact('oficinas'));
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
           // 'oficina_id' => 'required|exists:oficinas, id',
        ]);

        $area = new Area();
        $area->nombre = $request->nombre;
        $area->oficina_id = $request->oficina_id;

        $area->save();

        return redirect()->route('areas.index', $area);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        $oficinas = Oficina::all();
        return view('area.form.edit', compact('area', 'oficinas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $area->nombre = $request->nombre;
        $area->oficina_id = $request->oficina_id;
        $area->save();

        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Oficina::destroy($id);

        return redirect('areas')->with('eliminar', 'delete');
    }
}
