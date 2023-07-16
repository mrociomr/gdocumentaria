@extends('layouts.app')

@section('title', 'GDU | Áreas')

@section('content')
@include('layouts.headers.cardsnav')

<!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0"> Lista de Áreas</h3>
              <div class="row justify-content-end">
            <div class="col-lg-6 col-5 text-right mt--4">
                    <a href=" {{ route('areas.create')}}" class="btn btn-success">Nuevo</a>
                    <a href="#" class="btn btn-secondary">Filtros</a>
            </div>
            </div>


            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="sort" data-sort="name">Nombre</th>
                    <th scope="col">Opciones</th>
                  </tr>
                  
                </thead>
                <tbody class="list">
                @foreach ($areas as $area)

                  <tr>

                    <td class="budget">
                    {{ $area->id }}
                    </td>
                    <td class="budget">
                    {{ $area->nombre }}
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <a href="{{route('areas.edit', $area->id)}}" class="btn btn-primary">
                        <i class="fas fa-pen" style="color: #ffffff;"></i></a>
                        <form method="POST" action="{{ route('areas.destroy', $area) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >
                                <i class="fa fa-trash" style="color: #fcfcfc;"></i>
                                </button>
                            </form>
                        </div>
                      </div>
                    </td>
                </tr>
                @endforeach

                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Anterior</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Siguiente</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  @endsection

  @push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
