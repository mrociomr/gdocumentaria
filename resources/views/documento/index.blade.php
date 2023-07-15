@extends('layouts.app', ['class' => 'bg-gradient-primary'])

@section('content')
    <div class="header py-2">
        <div class="container">
            <div class="header-body text-center mt-7">
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
                                <th>Project</th>
                                <th>Budget</th>
                                <th>Status</th>
                                <th>Users</th>
                                <th>Completion</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($documentos as $documento)       
                                    <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Argon Design System</span>
                                        </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2500 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                        </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <span class="completion mr-2">60%</span>
                                        <div>
                                            <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
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

    <div class="container mt--10 pb-5"></div>
@endsection