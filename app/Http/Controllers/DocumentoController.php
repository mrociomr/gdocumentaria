<?php

namespace App\Http\Controllers;

use App\Models\Administrado;
use App\Models\Asignacion;
use App\Models\Documento;
use App\Models\Indicacion;
use App\Models\Movimiento;
use App\Models\Oficina;
use App\Models\Procedimiento;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
   
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }


    public function create()
    {
        $administrados = Administrado::all();
        $documentostipo = TipoDocumento::all();
        $indicaciones = Indicacion::all();
        $procedimientos = Procedimiento::all();
        $oficinas = Oficina::all();
        $asignaciones = Asignacion::all();
        $movimientos = Movimiento::all();
        return view('documentos.create', compact('administrados','documentostipo', 'indicaciones','procedimientos','movimientos', 'oficinas','asignaciones'));
    }


    public function store(Request $request)
    {
        $request->validate(Documento::$rule);
        
        $administrado = new Administrado();

        $administrado->nombres = $request->nombres;
        $administrado->dni = $request->dni;
        $administrado->ap_paterno = $request->ap_paterno;
        $administrado->ap_materno = $request->ap_materno;
        $administrado->direccion = $request->direccion;
        $administrado->correo = $request->correo;
        $administrado->celular = $request->celular;
        $administrado->razon_social = $request->razon_social;
        // $administrado->departamento = $request->departamento;
        $administrado->tipo_persona_id = $request->tipo_persona_id;

        $administrado->save();
        
        $documento = new Documento();
        
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo')->store('public/documentos');
            $url = Storage::url($archivo);
            $documento->archivo = $url;
        }
        $documento->numero_doc = $documento->incremento();
        $documento->folios = $request->folios;
        $documento->asunto = $request->asunto;
        $documento->fecha_ingreso = $request->fecha_ingreso;
        $documento->fecha_doc = $request->fecha_doc;
        $documento->num_tramite = $request->num_tramite;
        $documento->observaciones = $request->observaciones;
        $documento->estado = $request->estado;
        $documento->inf_respuesta = $request->inf_respuesta;
        $documento->administrado_id = $administrado->id;
        $documento->tipo_documento_id = $request->tipo_documento_id;
        $documento->indicacion_id = $request->indicacion_id;
        $documento->procedimiento_id = $request->procedimiento_id;
        $documento->oficina_id = $request->oficina_id;
        $documento->asignacion_id = $request->asignacion_id;
        $documento->movimiento_id = $request->movimiento_id;
        
        // }

        $documento->save();

        return redirect()->route('documentos.index');
    }

    public function show(Documento $documento)
    {
        //
    }

    public function edit(Documento $documento, Administrado $administrado)
    {
        $documentostipo = TipoDocumento::all();
        $indicaciones = Indicacion::all();
        $procedimientos = Procedimiento::all();
        $oficinas = Oficina::all();
        $asignaciones = Asignacion::all();
        $movimientos = Movimiento::all();

        return view('documentos.edit', compact('documento','administrado','documentostipo', 'indicaciones','procedimientos','movimientos', 'oficinas','asignaciones'));
    }


    public function update(Request $request, Documento $documento, Administrado $administrado)
    {
        $request->validate(Documento::$rule);
        

        $administrado->nombres = $request->nombres;
        $administrado->dni = $request->dni;
        $administrado->ap_paterno = $request->ap_paterno;
        $administrado->ap_materno = $request->ap_materno;
        $administrado->direccion = $request->direccion;
        $administrado->correo = $request->correo;
        $administrado->celular = $request->celular;
        $administrado->razon_social = $request->razon_social;
        $administrado->tipo_persona_id = $request->tipo_persona_id;

        $administrado->save();

        if($request->hasFile('archivo')){
            $url = str_replace('storage','public', $documento->archivo);
            Storage::delete($url);

            $archivo = $request->file('archivo')->store('public/documentos');
            $documento->archivo = Storage::url($archivo);
        }

        // $documento->numero_doc = $documento->incremento();
        $documento->folios = $request->folios;
        $documento->asunto = $request->asunto;
        // $documento->archivo = $request->archivo;
        $documento->fecha_ingreso = $request->fecha_ingreso;
        $documento->fecha_doc = $request->fecha_doc;
        $documento->num_tramite = $request->num_tramite;
        $documento->observaciones = $request->observaciones;
        $documento->estado = $request->estado;
        $documento->inf_respuesta = $request->inf_respuesta;
        $documento->administrado_id = $administrado->id;
        $documento->tipo_documento_id = $request->tipo_documento_id;
        $documento->indicacion_id = $request->indicacion_id;
        $documento->procedimiento_id = $request->procedimiento_id;
        $documento->oficina_id = $request->oficina_id;
        $documento->asignacion_id = $request->asignacion_id;
        $documento->movimiento_id = $request->movimiento_id;

        $documento->save();

        return redirect()->route('documentos.index');

    }

    public function destroy(Documento $documento)
    {
        $url = str_replace('storage','public', $documento->archivo);
        Storage::delete($url);

        $documento->delete();

        return Redirect::back();
    }
}
