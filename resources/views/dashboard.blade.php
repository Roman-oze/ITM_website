{{-- @include('include._sidenav', ['menus' => $menus]) --}}

@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h1 class="mb-0">Dashboard</h1>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>

        <div class="row mt-4">
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-success h-100">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Total Students</h5>
                            <h3 class="card-text fw-bold">{{$studentCount}}</h3>
                        </div>
                        <i class="fas fa-user-graduate fa-3x opacity-75"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-primary h-100">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Total Faculty</h5>
                            <h3 class="card-text fw-bold">{{$facultyCount}}</h3>
                        </div>
                        <i class="fas fa-chalkboard-teacher fa-3x opacity-75"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-info h-100">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Total Alumni</h5>
                            <h3 class="card-text fw-bold">{{$alumniCount}}</h3>
                        </div>
                        <i class="fas fa-users fa-3x opacity-75"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-danger h-100">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Total Scholarships</h5>
                            <h3 class="card-text fw-bold">{{$scholarshipCount}}</h3>
                        </div>
                        <i class="fas fa-graduation-cap fa-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-xl-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-light d-flex align-items-center">
                        <i class="fas fa-chart-area me-2"></i>
                        <span>Student Admissions</span>
                    </div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-light d-flex align-items-center">
                        <i class="fas fa-chart-bar me-2"></i>
                        <span>Alumni</span>
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
