@extends('layout.dashboard')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}

<main>

    <div class="container mt-5">
        <h1 class="mt-4">Faculty</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Faculty List</li>
        </ol>
        <br>
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h5>
                            <a href="{{route('create.faculty')}}" class="btn btn-primary float-end">ADD FACULTY</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Facebook</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{$teacher->teacher_id}}</td>
                                        <td><img src="{{ asset($teacher->image) }}" width="50" height="50" class="rounded-circle"></td>
                                        <td>{{$teacher->name}}</td>
                                        <td>{{$teacher->designation}}</td>
                                        <td>{{$teacher->fb}}</td>
                                        <td>{{$teacher->email}}</td>
                                        <td>{{$teacher->phone}}</td>
                                        <td>
                                            <a href="{{route('edit.faculty',$teacher->teacher_id)}}" class="btn btn-success">
                                                <i class="fa-solid fa-user-pen"></i>
                                            </a>
                                            <a href="{{route('delete.faculty',$teacher->teacher_id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
