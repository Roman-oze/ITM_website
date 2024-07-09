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
                        <td class="text-center justify-content-evenly">

                            <a href="{{route('show',$student->id)}}" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i></a>
                            <a href="{{route('edit',$student->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

                            <form action="{{route('delete',$student->id)}}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="" type="submit"  class="p-3" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-danger  fa-lg"></i></a>
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



