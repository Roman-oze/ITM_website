


@extends('admin.Admin layout._master')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}


<div class="container">
    <h2 class="text-dark mt-5  p-2">Faculty Profile</h2>

    <div class="row  p-4">
        <div class=" text-left">
          <a href="{{ route('faculty/create') }}" class="btn btn-dark text-white">Add Profile</a>

        </div>
      </div>

    <table class="table table-striped bg-dark ">
        <thead>
            <tr >
                <th class="text-white">ID</th>
                <th class="text-white">Image</th>
                <th class="text-white">Name</th>
                <th class="text-white">Designation</th>
                <th class="text-white">Facebook</th>
                {{-- <th class="text-white">LinkedIn</th> --}}
                <th class="text-white">Email</th>
                <th class="text-white">Phone</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)

        <td class="text-white-50">{{$teacher->teacher_id}}</td>
        <td><img src="{{ asset($teacher->image) }}"  width="50" height="50" class="rounded-circle" ></td>
        <td class="text-white-50">{{$teacher->name}}</td>
        <td class="text-white-50">{{$teacher->designation}}</td>
        <td class="text-white-50">{{$teacher->fb}}</td>
        {{-- <td class="text-white-50">{{$teacher->linked}}</td> --}}
        <td class="text-white-50">{{$teacher->email}}</td>
        <td class="text-white-50">{{$teacher->phone}}</td>

        <td class="d-flex">

          {{-- <a href="{{ route('faculty_edit',$teacher->teacher_id) }}"  class=" btn btn-info">Edit</a> --}}

           <form  action="{{route('faculty_delete',$teacher->teacher_id)}}" method="POST" >
               @csrf
               @method('DELETE')
               <button type="submit" onclick="return confirm('Are you sure?')" class="p-2 bg-dark"><i class="fa-regular fa-trash-can text-danger"></i>
               </button>

           </form>
        </td>
      </tr>





      @endforeach
        </tbody>
    </table>


    <div class="row">
        {{-- {{ $record->links('pagination::bootstrap-5') }} --}}
    </div>

</div>
</div>


@endsection
