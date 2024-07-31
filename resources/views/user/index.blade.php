@extends('layout.dashboard')


@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Admin List</li>
        </ol>
        <br>

        <div class="row mt-2">
            <div class="text-left">
                <a href="{{ route('create.user') }}" class="btn btn-dark text-white">New Add</a>
            </div>
        </div>

        <div class="table-responsive mt-3">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-light text-center">
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="text-center">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td class="text-center justify-content-evenly">
                            <a href="{{route('show.user', $user->id)}}" class="p-3"><i class="fa-solid fa-eye text-success fa-lg"></i></a>
                            <a href="{{route('edit.user', $user->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info fa-lg"></i></a>
                            <form action="{{route('user.delete', $user->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="p-2 bg-outline-danger"><i class="fa-regular fa-trash-can text-danger"></i>
                        </form>




                </td>

                </tr>
                @endforeach
        </tbody>
    </table>


    <div class="row bg-info">
        {{ $users->links('pagination::bootstrap-5') }}
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
