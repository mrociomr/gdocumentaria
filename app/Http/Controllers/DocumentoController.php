<?php

namespace App\Http\Controllers;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
   
    public function index()
    {
        $documentos = Documento::all();
        return view('documento.index', compact('documentos'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Documento $documento)
    {
        //
    }

    public function edit(Documento $documento)
    {
        //
    }


    public function update(Request $request, Documento $documento)
    {
        //
    }

    public function destroy(Documento $documento)
    {
        //
    }
}
