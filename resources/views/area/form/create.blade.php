@extends('layouts.app')

@section('title', 'Registrar área')

@section('content')
<div class="header bg-primary pb-6">
<!-- Header -->
  <div class="container-fluid ">
    <div class="header-body ">
      <div class="row align-items-center py-4 ">
        <div class="col-lg-6 col-7 mt-6">
          <h6 class="h2 text-white d-inline-block mb-0">Formulario</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{route('areas.index')}}">Áreas</a></li>
              <li class="breadcrumb-item active" aria-current="page">Nueva área</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="d-flex justify-content-center">
                            <h3 class="mb-1 align-items-center text-center">Registrar Áreas</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post"  autocomplete="off" action="{{ route('areas.store')}}">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Nombre</label>
                                    <input type="text" name="nombre" class="form-control form-control-alternative"
                                        value="">
                                
                                </div>
                                </div>
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Oficina</label>
                                        <select class="form-control" name="oficina_id" id="oficina">
                                          @foreach ($oficinas as $oficina)
                                            <option value="{{$oficina->id}}">{{ $oficina->nombre }}</option>   
                                          @endforeach
                                        </select>
                                        
                                    
                                    </div>
                                    </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Crear</button>
                                    <a href=" {{ route('areas.index') }}" class="btn btn-danger mt-4">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            @include('layouts.footers.auth')

        </div>
    </div>
@endsection