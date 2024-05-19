@extends('admin._master')


@section('main')


    <div class="container mt-5">
        <h1 class="text-danger mt-5">Single Show Data </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->password }}</td>


                <td>
                        <a href="{{route('user_admin')}}" class="btn btn-primary">Back</a>

                </td>

                </tr>

        </tbody>
    </table>
</div>
<br>
<br>
<br>
<br>
@endsection
