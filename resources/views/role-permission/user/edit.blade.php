@extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User
                            <a href="{{url('users')}}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('users',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Email</label>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">password</label>
                                <input type="password"  name="password" value="{{$user->passsword}}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Roles</label>
                                <select name="roles[]" class="form-control" multiple>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                    </select>

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
