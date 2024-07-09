@extends('admin.Admin layout._master')


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
        <tr class="">
            <th>Name</th>
            <th>ID</th>
            <th>Batch</th>
            <th>Email</th>
            <th>Blood</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
                    <tr class="">
                <td>{{ $student->name }}</td>
                <td>{{ $student->roll }}</td>
                <td>{{ $student->batch }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->blood }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->address }}</td>
                <td >

                    @if($student->type == 'active')
                        <h3 class="badge badge-success text-success"><i class="fa-solid fa-circle text-success fa-lg"></i> Active</h3>
                    @else
                        <h3 class="badge badge-danger text-danger btn "><i class="fa-solid fa-ban text-danger fa-lg"></i> Inactive</h3>
                    @endif
               </td>



                <td class="text-center justify-content-evenly">
                        <a href="" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i></a>
                         <a href="" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

                        <form action="" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button  type="submit"  class="p-3 bg-none" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-danger  fa-lg"></i></button>
                        </form>


                        </td>
                    </tr>
                    @endforeach
    </tbody>
</table>

{{-- {{ $students->links('pagination::bootstrap-5') }} --}}
</div>

    <!-- Your existing form fields --
</form>
@endsection



