<?php

namespace App\Http\Controllers;

use App\Models\Administrado;
use Illuminate\Http\Request;


class AdministradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrados = Administrado::all();
        return view('administrado.index', compact('administrados'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrado $administrado
     * @return \Illuminate\Http\Response
     */
    public function show(Administrado $administrado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrado  $administrado
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrado $administrado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrado  $administrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrado $administrado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrado  $area
     * @return \Illuminate\Http\Administrado
     */
    public function destroy(Administrado $administrado)
    {
        //
    }
}
