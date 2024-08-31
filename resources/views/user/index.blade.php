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
    <h1 class="mt-4">User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Admin List</li>
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
                        <a href="{{route('create.user')}}" class="btn btn-primary float-end">ADD USER</a>
                    </h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>
                        <a href="{{route('show.user',$user->id)}}" class="btn btn-success">
                            <i class="fa-regular fa-eye"></i>
                            </a>
                        <a href="{{route('edit.user',$user->id)}}" class="btn btn-warning">
                            <i class="fa-solid fa-user-pen"></i>
                        </a>
                        {{-- <a href="{{route('edit.user',$user->id)}}" class="btn btn-primary">
                            <i class="fa fa-trash"></i>
                        </a> --}}

                            <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">

                                <i class="fa fa-trash"></i>
                                </a>
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
</main>

@endsection



{{-- <td class="p-1">

    <div class="btn-group">
        <div class="dropdown">
            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="mdi mdi-chevron-down"></i></button>
            <ul class="dropdown-menu">


                    <li>
                        <a class="dropdown-item" href="{{ route('edit.user', $user->id) }}"><i class="mdi mdi-account-edit"></i> Edit</a>
                    </li>


                    <li>
                        <a class="dropdown-item" href="{{ route('show.user', $user->id) }}"><i class="mdi mdi-clipboard-edit"></i> Economic Codes</a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-modal"
                        data-name="{{ $user->name }}" data-type="User" data-id="{{ $user->id }}" data-route="{{ route('user.delete',$user->id) }}"><i class="mdi mdi-delete"></i> Delete</a>
                    </li>

            </ul>
        </div>
    </div>

</td> --}}
