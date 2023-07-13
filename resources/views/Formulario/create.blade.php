@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' ' . auth()->user()->name,
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">Registrar Formulario</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            @method('post')
                            <h6 class="heading-small text-muted mb-4">Formulario</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="text" name="name" class="form-control form-control-alternative"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Surname</label>
                                    <input type="text" name="surname" class="form-control form-control-alternative"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Lastname</label>
                                    <input type="text" name="lastname" class="form-control form-control-alternative"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input type="password" name="password" class="form-control form-control-alternative"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>

                                <div class="text-center">
                                    <a href="#" class="btn btn-danger mt-4">Cancel</a>
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            @method('post')
                            <h6 class="heading-small text-muted mb-4">Formulario</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-6">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" name="name" class="form-control form-control-alternative"
                                            value="">
                                    </div>
                                    <div class="col-12 col-md-12 col-xl-6">
                                        <label class="form-control-label">Surname</label>
                                        <input type="text" name="surname" class="form-control form-control-alternative"
                                            value="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-6">
                                        <label class="form-control-label">Lastname</label>
                                        <input type="text" name="lastname" class="form-control form-control-alternative"
                                            value="">
                                    </div>
                                    <div class="col-12 col-md-12 col-xl-6">
                                        <label class="form-control-label">Password</label>
                                        <input type="text" name="password" class="form-control form-control-alternative"
                                            value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-6">
                                        <label class="form-control-label">Select Option</label>
                                        <div class="form-group">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-xl-6">
                                        <label class="form-control-label">Select</label>
                                        <div class="form-group">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-danger mt-4">Cancel</a>
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection
