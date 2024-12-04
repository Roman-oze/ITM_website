@extends('layout.dashboard')

@section('main')


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Roles
                            <a href="{{url('roles')}}" class=" m-1 p-3 float-end"><i class="fa-solid fa-arrow-left text-dark"></i></a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('roles')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Role Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection
