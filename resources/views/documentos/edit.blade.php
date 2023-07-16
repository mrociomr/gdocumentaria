@extends('layouts.app', ['class' => 'bg-gradient-primary'])

@section('content')
<div class="header py-2">
    <div class="container">
        <div class="header-body mt-7">
            <div class="row">
                <div class="col">
                    <form action="{{ route('documentos.update', $documento) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="heading-small text-muted mb-4">Formulario Administrador</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <label class="form-control-label">Tipo Persona</label>
                                            <div  class="form-group">
                                                <select id="persona" name="tipo_persona_id" class="form-control" onchange="mostrar()">
                                                    <option value="1" {{ old('tipo_persona_id', $documento->administrado->tipo_persona_id) == '1' ? 'selected' : '' }}>Persona Natural {{ $documento->tipo_persona_id }}</option>
                                                    <option value="2"  {{ old('tipo_persona_id', $documento->administrado->tipo_persona_id) == '2' ? 'selected' : '' }}>Persona Júridica {{ $documento->tipo_persona_id }}</option>
                                                </select>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Documento de Identidad</label>
                                            <input type="text" name="dni" class="form-control form-control-alternative @error('dni') is-invalid @enderror" value="{{ old('dni', $documento->administrado->dni) }}">
                                            @error('dni')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror 
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Nombre</label>
                                            <input type="text" name="nombres" class="form-control form-control-alternative" value="{{ old('nombres', $documento->administrado->nombres) }}">
                                            @error('nombres')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror 
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Apellido Paterno</label>
                                            <input type="text" name="ap_paterno" class="form-control form-control-alternative"
                                                value="{{ old('ap_paterno', $documento->administrado->ap_paterno) }}">
                                            @error('ap_paterno')
                                                <small class="text-danger">Apellido Paterno requerido</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Apellido Materno</label>
                                            <input type="text" name="ap_materno" class="form-control form-control-alternative"
                                                value="{{ old('ap_materno', $documento->administrado->ap_materno) }}">
                                            @error('ap_materno')
                                                <small class="text-danger">Apellido Materno requerido</small>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Dirección</label>
                                            <input type="text" name="direccion" class="form-control form-control-alternative"
                                                value="{{ old('direccion', $documento->administrado->direccion) }}">
                                            @error('direccion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Celular</label>
                                            <input type="text" name="celular" class="form-control form-control-alternative"
                                                value="{{ old('celular', $documento->administrado->celular) }}">
                                            @error('celular')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Correo Eléctronico</label>
                                            <input type="text" name="correo" class="form-control form-control-alternative"
                                                value="{{ old('correo', $documento->administrado->correo) }}">
                                            @error('correo')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Razon Social</label>
                                            <input type="text" name="razon_social" class="form-control form-control-alternative"
                                                value="{{ old('razon_social',$documento->administrado->razon_social) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="heading-small text-muted mb-4">Formulario Documento</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Número de Documento</label>
                                            <input type="text" name="numero_doc" class="form-control form-control-alternative"
                                            value="{{ old('numero_doc', $documento->numero_doc) }}" disabled>
                                            @error('numero_doc')
                                                <small class="text-danger">Número Documento Requerido</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Folios</label>
                                            <input type="text" name="folios" class="form-control form-control-alternative"
                                            value="{{ old('folios', $documento->folios) }}">
                                            @error('folios')
                                                <small class="text-danger">Folio Requerido</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Asunto</label>
                                            <input type="text" name="asunto" class="form-control form-control-alternative"
                                                value="{{ old('asunto', $documento->asunto) }}">
                                            @error('asunto')
                                                <small class="text-danger">Asunto Requerido</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Archivo  <a class="badge bg-info text-dark" href="{{ $documento->archivo }}" target="_blank">Open PDF!</a></label>
                                            <input type="file" name="archivo" class="form-control form-control-alternative"
                                                value="{{ $documento->archivo }}">
                                            @error('archivo')
                                                <small class="text-danger">Archivo Requerido</small>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Fecha Ingreso </label>
                                            <input type="timestamp" name="fecha_ingreso" class="form-control form-control-alternative"
                                                value="{{$documento->fecha_ingreso}}">
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Fecha Documento</label>
                                            <input type="timestamp" name="fecha_doc" class="form-control form-control-alternative"
                                                value="{{$documento->fecha_doc}}">
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Número de Tramite</label>
                                            <input type="text" name="num_tramite" class="form-control form-control-alternative"
                                                value="{{ old('num_tramite', $documento->num_tramite) }}">
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Observaciones</label>
                                            <input type="text" name="observaciones" class="form-control form-control-alternative"
                                                value="{{ old('observaciones', $documento->observaciones) }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Estado</label>
                                            <div class="form-group">
                                                <select name="estado" class="form-control">
                                                  <option value="1" {{ old('estado', $documento->estado) == '1' ? 'selected' : '' }}>En Proceso</option>
                                                  <option value="2" {{ old('estado', $documento->estado) == '2' ? 'selected' : '' }}>En Finalizado</option>
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Respuesta</label>
                                            <input type="text" name="inf_respuesta" class="form-control form-control-alternative"
                                                value="{{ old('inf_respuesta', $documento->inf_respuesta) }}">
                                        </div>
                                        {{-- <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Administrado</label>
                                            <div class="form-group">
                                                <select name="administrado_id" class="form-control" id="exampleFormControlSelect1">
                                                  @foreach ($administrados as $administrado)
                                                      <option value="{{ $administrado->id }}">
                                                        {{ $administrado->dni }} - {{ $administrado->nombres }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div> --}}
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Tipo de Documento</label>
                                            <div class="form-group">
                                                <select name="tipo_documento_id" class="form-control" id="exampleFormControlSelect1">
                                                  @foreach ($documentostipo as $item)
                                                      <option value="{{ $item->id }}" {{ old('tipo_documento_id', $documento->tipo_documento_id) == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nombre }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Indicaciones</label>
                                            <div class="form-group">
                                                <select name="indicacion_id" class="form-control" id="exampleFormControlSelect1">
                                                  @foreach ($indicaciones as $indicacion)
                                                      <option value="{{ $indicacion->id }}" {{ old('indicacion_id', $documento->indicacion_id) == $indicacion->id ? 'selected' : '' }}>
                                                        {{ $indicacion->nombre }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Procedimiento</label>
                                            <div class="form-group">
                                                <select name="procedimiento_id" class="form-control" id="exampleFormControlSelect1">
                                                  @foreach ($procedimientos as $procedimiento)
                                                      <option value="{{ $procedimiento->id }}" {{ old('procedimiento_id', $documento->procedimiento_id) == $procedimiento->id ? 'selected' : '' }}>
                                                        {{ $procedimiento->nombre }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Oficina</label>
                                            <div class="form-group">
                                                <select name="oficina_id" class="form-control">
                                                  @foreach ($oficinas as $oficina)
                                                      <option value="{{ $oficina->id }}" {{ old('oficina_id', $documento->oficina_id) == $oficina->id ? 'selected' : '' }}>
                                                        {{ $oficina->nombre }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Asignar</label>
                                            <div class="form-group">
                                                <select name="asignacion_id" class="form-control">
                                                  @foreach ($asignaciones as $asignacion)
                                                      <option value="{{ $asignacion->id }}" {{ old('asignacion_id', $documento->user_id) == $asignacion->id ? 'selected' : '' }}>
                                                        {{ $asignacion->user->name }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div>
                                        {{-- <div class="col-12 col-md-12 col-xl-6">
                                            <label class="form-control-label">Movimiento</label>
                                            <div class="form-group">
                                                <select name="asignacion_id" class="form-control" id="exampleFormControlSelect1">
                                                  @foreach ($movimientos as $movimiento)
                                                      <option value="{{ $movimiento->id }}">
                                                        {{ $movimiento }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div> --}}
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('documentos.index') }}" class="btn btn-danger mt-4">Cancelar</a>
                                        <button type="submit" class="btn btn-success mt-4">Registrar</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <script>
    const mostrar = () => {
        if(document.getElementById('persona').value == 2){
            document.getElementById('otros').hidden = true;
            // console.console('otros');
        }else{
        document.getElementById('otros').hidden = true;
        document.getElementById('otros').value = ""
        }

        // console.log(document.getElementById('persona').value)
    }

</script> --}}
@endsection

