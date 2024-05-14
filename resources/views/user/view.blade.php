@extends('layout._club_master')


@section('main_content')


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
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>


                <td>
                        <a href="{{route('index')}}" class="btn btn-primary">Back</a>

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
