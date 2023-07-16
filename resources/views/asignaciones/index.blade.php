@extends('layouts.app', ['class' => 'bg-gradient-primary'])

@section('content')
<div class="header py-2">
    <div class="container">
        <div class="text-center mt-7">
            <a href="{{ route('asignaciones.create') }}" class="btn btn-info text-white mb-4">Registrar Indicacion</a>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                          <h3 class="mb-0">Lista de Asignaciones</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                          <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                              <tr>
                                <th>Nombre</th>
                                <th>Usuario Asignado</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                               @foreach($asignacion as $asignacion)
                               <tr>
                                <th scope="row">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">
                                            {{ $asignacion->rol_id }}
                                        </span>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">
                                            {{ $asignacion->user->name }}
                                        </span>
                                    </div>
                                </th>
                                <td class="text-right">
                                    <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{ route('asignaciones.edit', $asignacion->id) }}">Editar</a>
                                        <form action="{{ route('asignaciones.destroy', $asignacion->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item">Eliminar</button>
                                        </form>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                               @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection