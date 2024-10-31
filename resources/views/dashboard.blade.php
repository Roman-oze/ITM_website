@include('include._sidenav', ['$menus' => $menus])

@extends('layout.dashboard')





@section('main')

<main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <br>

                <div class="row">
                    <div class="col-md-3 p-2">
                      <div class="card  bg-success">
                        <div class="card-body">

                          <h5 class="card-title text-white">Total Student</h5>
                          <b><h3 class="card-text text-white">{{$studentCount}}</h3></b>
                          {{-- <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="0" class="purecounter">{{$students}}</span> --}}

                        </div>
                      </div>
                    </div>
                    <div class="col-md-3  p-2">
                      <div class="card bg-primary">
                        <div class="card-body">
                          <h5 class="card-title text-white">Total Faculty</h5>
                          <b><h3 class="card-text text-white">{{$facultyCount}}</h3></b>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3  p-2">
                      <div class="card bg-info">
                        <div class="card-body">
                          <h5 class="card-title text-white">Total Alumni</h5>
                          <b><h3 class="card-text text-white">{{$alumniCount}}</h3></b>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-3  p-2">
                      <div class="card bg-danger">
                        <div class="card-body">
                          <h5 class="card-title text-white">Total Scholarship</h5>
                          <b><h3 class="card-text text-white">{{$scholarshipCount}}</h3></b>
                        </div>
                      </div>
                  </div>

                  </div>


                <div class="row mt-3">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Student Admission
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                 Student Result
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </main>

@endsection
