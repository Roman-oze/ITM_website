


@extends('layout.dashboard')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Faculty</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">faculty List </li>
        </ol>
        <br>

      <div class="row">
        <div class="col-md-10 text-left">
            <form action="{{route('faculty.search')}}" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <a href="{{ route('create.faculty') }}" class="btn btn-outline-dark ">Add Faculty</a>

        </div>


    </div>



    <table class="table table-striped mt-3 ">
        <thead>
            <tr >
                <th >ID</th>
                <th >Image</th>
                <th >Name</th>
                <th >Designation</th>
                <th >Facebook</th>
                {{-- <th class="text-white">LinkedIn</th> --}}
                <th >Email</th>
                <th >Phone</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)

        <td >{{$teacher->teacher_id}}</td>
        <td><img src="{{ asset($teacher->image) }}"  width="50" height="50" class="rounded-circle" ></td>
        <td >{{$teacher->name}}</td>
        <td >{{$teacher->designation}}</td>
        <td >{{$teacher->fb}}</td>
        {{-- <td class="text-white-50">{{$teacher->linked}}</td> --}}
        <td >{{$teacher->email}}</td>
        <td>{{$teacher->phone}}</td>

        <td class="d-flex">

            <a href="{{route('edit.faculty',$teacher->teacher_id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

           <form  action="{{route('delete.faculty',$teacher->teacher_id)}}" method="POST" >
               @csrf
               @method('DELETE')
               <button type="submit" onclick="return confirm('Are you sure?')" class="p-2 "><i class="fa-regular fa-trash-can text-danger"></i>
               </button>

           </form>
        </td>
      </tr>





      @endforeach
        </tbody>
    </table>


    <div class="row">
        {{ $teachers->links('pagination::bootstrap-5') }}
    </div>




</div>
</div>
</main>

@endsection
