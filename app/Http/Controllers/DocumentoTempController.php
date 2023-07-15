<?php

namespace App\Http\Controllers;
use App\Models\DocumentoTemp;
use Illuminate\Http\Request;

class DocumentoTempController extends Controller
{
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mesa-ayuda.index');
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
     * @param  \App\Models\DocumentoTemp  $mesa_ayuda
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentoTemp $mesa_ayuda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocumentoTemp $mesa_ayuda
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentoTemp $mesa_ayuda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocumentoTemp  $mesa_ayuda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentoTemp $mesa_ayuda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocumentoTemp  $mesa_ayuda
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentoTemp $mesa_ayuda)
    {
        //
    }
}
