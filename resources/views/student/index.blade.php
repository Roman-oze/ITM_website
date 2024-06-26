@extends('admin._master')


@section('main')
<div class="container p-5">
    <div class="row p-3">
        <div class="col-md-6 ">
            <form action="search">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-info">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 text-right">
          <div class=" text-left">
            <a href="{{ route('create') }}" class="btn btn-info">New Add</a>

          </div>
        </div>
    </div>
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

{{ $students->links('pagination::bootstrap-5') }}
</div>

    <!-- Your existing form fields --
</form>
@endsection



