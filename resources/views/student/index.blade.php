@extends('layout._club_master')
<!-- resources/views/students/index.blade.php -->

<!-- resources/views/students/index.blade.php -->
@section('main_content')
<div class="container mt-5 p-5">
<h1 class="text-danger ">Student Details</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
                    <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->department }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->password }}</td>
                        <td>
                            <a href="{{route('show',$student->id)}}" class="btn btn-info">View</a>
                            <a href="{{route('edit',$student->id)}}" class="btn btn-danger">edit</a>

                            <form action="{{route('delete',$student->id)}}" method="post" style="display:inline;">
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

    <!-- Your existing form fields --
</form>
@endsection



