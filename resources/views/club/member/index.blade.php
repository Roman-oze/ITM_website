@extends('layout.dashboard')


@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">club member</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">member List </li>
        </ol>

       <div class="row">
        <div class="col-md-10 text-left">
            <form action="{{route('student.search')}}" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            {{-- <a href="{{ route('create') }}" class="btn btn-outline-dark ">New Add</a> --}}

        </div>


    </div>

<table class="table table-striped mt-5">
    <thead>
        <tr class="">
            <th>Name</th>
            <th>ID</th>
            {{-- <th>Department</th> --}}
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
        @foreach($students as $student

        )
                    <tr class="">
                <td>{{ $student->name }}</td>
                <td>{{ $student->roll }}</td>
                {{-- <select name="" id=""> Select Department
                    <option value="1">ITM</option>
                    <option value="2">CSE</option>
                    <option value="3">SWE</option>
                    <option value="4">English</option>
                </select> --}}

                <td>{{ $student->batch->batch_name ?? 'No Batch Assigned' }}</td> <!-- Batch name -->
                <td>{{ $student->email }}</td>
                <td>{{ $student->blood }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->address }}</td>
                <td >

                    @if($student->type == 'active')
                        <h3 class="badge badge-success  text-success btn "><i class="fa-solid fa-circle text-success fa-lg"></i> Active</h3>
                    @else
                        <h3 class="badge badge-danger text-danger btn "><i class="fa-solid fa-ban text-danger fa-lg"></i> Inactive</h3>
                    @endif
               </td>



                <td class="text-center justify-content-evenly">
                         <a href="{{route('student.edit',$student->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

                        <form action="{{route('delete',$student->id)}}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button  type="submit"  class="p-3 btn.-none" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-danger  fa-lg"></i></button>
                        </form>


                        </td>
                    </tr>
                    @endforeach
    </tbody>
</table>

</main>

{{-- {{ $students->links('pagination::bootstrap-5') }} --}}





@endsection



