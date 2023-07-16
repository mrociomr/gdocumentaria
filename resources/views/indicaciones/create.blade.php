@extends('layouts.app', ['class' => 'bg-gradient-primary'])

@section('content')
<div class="header py-2">
    <div class="container">
        <div class="header-body mt-7">
            <div class="row">
                <div class="col">
                    <form method="post" action="{{ route('indicaciones.store') }}">
                        @method('POST')
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h6 class="heading-small text-muted mb-4">Formulario Indicaciones</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <label class="form-control-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control form-control-alternative"
                                            value="{{ old('nombre') }}">
                                            @error('nombre')
                                                <small class="text-danger">Nombre Requerido</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('indicaciones.index') }}" class="btn btn-danger mt-4">Cancelar</a>
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




{{-- <script src="hola.js"></script> --}}
@endsection

