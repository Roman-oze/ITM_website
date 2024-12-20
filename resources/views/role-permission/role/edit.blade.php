@extends('layout.dashboard')
@include('include.alerts')
@section('main')

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Roles
                            <a href="{{url('roles')}}" class=" m-1 p-3 float-end"><i class="fa-solid fa-arrow-left text-dark"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('roles',$role->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Permission Name</label>
                                <input type="text" name="name" class="form-control" value="{{$role->name}}">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
 @endsection
