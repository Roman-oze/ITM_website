@extends('admin._master')

@section('main')

<div class="container p-5">
    <h2 class="text-info mt-5 bg-dark p-2">Admin Details</h2>

    <table class="table table-striped bg-dark ">
        <thead>
            <tr >
                <th class="text-white text-center">User ID</th>
                <th class="text-white">Name</th>
                <th class="text-white">Email</th>
                <th class="text-white">Password</th>
                <th class="text-white text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td class="text-white-50 text-center">{{ $admin->id }}</td>
                <td class="text-white-50">{{ $admin->name }}</td>
                <td class="text-white-50">{{ $admin->email }}</td>
                <td class="text-white-50">{{ $admin->password }}</td>

                <td class="text-center">
                    <a href="{{route('show',$admin->id)}}" class="btn btn-info">View</a>
                    <a href="{{route('edit',$admin->id)}}" class="btn btn-danger">edit</a>

                    <form action="{{route('delete',$admin->id)}}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>


                </td>

                </tr>
                @endforeach
        </tbody>
    </table>
</div>


@endsection
