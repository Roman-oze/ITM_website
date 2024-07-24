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
                          <b><h3 class="card-text text-white">549</h3></b>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3  p-2">
                      <div class="card bg-primary">
                        <div class="card-body">
                          <h5 class="card-title text-white">Total Faculty</h5>
                          <b><h3 class="card-text text-white">50</h3></b>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3  p-2">
                      <div class="card bg-info">
                        <div class="card-body">
                          <h5 class="card-title text-white">Total Alumni</h5>
                          <b><h3 class="card-text text-white">40</h3></b>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-3  p-2">
                      <div class="card bg-secondary">
                        <div class="card-body">
                          <h5 class="card-title text-white">Total Research</h5>
                          <b><h3 class="card-text text-white">29</h3></b>
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
                <div class="card mb-4">
                    <div class="card-header h3 text-bark text-center">
                        <i class="fa-solid fa-envelope-open-text fa-lg"></i>
                        Message List
                    </div>

                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>View</th>
                                <th>Inbox</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $inbox)
                            <tr>
                                <td scope="row">{{$inbox->id}}</td>
                                <td >{{$inbox->message}}</td>
                                <td>
                                    <form action="{{route('inbox.delete',$inbox->id)}}" method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class=" btn btn-outline-danger p-3 " onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-black  fa-lg "></i></button>

                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        </main>

@endsection
