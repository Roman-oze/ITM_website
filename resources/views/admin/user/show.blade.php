@extends('admin._master')


@section('main')


<div class="container p-5">
    <div class="row justify-content-center p-5">
        <h2 class="text-info mt-5 bg-dark p-2">Single Show Data </h2>
    <table class="table table-striped bg-dark">
        <thead>
            <tr>
                <th class="text-white">User ID</th>
                <th class="text-white">Name</th>
                <th class="text-white">Email</th>
                <th class="text-white">Password</th>
                <th class="text-white">Action</th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="text-white-50">{{ $admin->id }}</td>
                <td class="text-white-50">{{ $admin->name }}</td>
                <td class="text-white-50">{{ $admin->email }}</td>
                <td class="text-white-50">{{ $admin->password }}</td>


                <td>
                        <a href="{{route('user_admin')}}" class="btn btn-primary">Back</a>

                </td>

                </tr>

        </tbody>
    </table>
</div>
</div>
<br>
<br>
<br>
<br>
@endsection
