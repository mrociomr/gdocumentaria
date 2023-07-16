@extends('layouts.app', ['class' => 'bg-gradient-primary'])

@section('content')
<div class="header py-2">
    <div class="container">
        <div class="text-center mt-7">
            <a href="{{ route('documentos.create') }}" class="btn btn-info text-white mb-4">Registrar Documento</a>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                          <h3 class="mb-0">Lista de Documentos</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                          <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                              <tr>
                                <th>Administrado</th>
                                <th>Número de Documento</th>
                                <th>Estado del Documento</th>
                                <th>Observación</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                               @forelse($documentos as $documento)
                               <tr>
                                <th scope="row">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">
                                            {{ $documento->administrado->nombres }}
                                            {{ $documento->administrado->ap_paterno }}
                                            {{ $documento->administrado->ap_materno }}
                                        </span>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{ $documento->numero_doc }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($documento->estado == 1)
                                        <i class="bg-success"></i>
                                        <span class="status">En Proceso</span>
                                        @elseif ($documento->estado == 2)
                                        <i class="bg-warning"></i>
                                        <span class="status">Proceso Finalizado</span>
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    {{ $documento->observaciones }}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{ route('documentos.edit', $documento->id) }}">Editar</a>
                                        <form action="{{ route('documentos.destroy', $documento->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item">Eliminar</button>
                                        </form>
                                    </div>
                                    </div>
                                </td>
                                @empty                                    
                            </tr>
                               @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection