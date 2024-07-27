@extends('layout.dashboard')


@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Scholarship</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Scholarship List </li>
        </ol>

        <div class="row">
            <div class=" text-left">
              <a href="{{ route('create.scholarship') }}" class="btn btn-dark text-white">Add scholars</a>

            </div>
          </div>

    </div>




<table class="table table-striped mt-3 ">
    <thead>
        <tr >
            <th >ID</th>
            <th >Image</th>
            <th >Name</th>
            <th >Country</th>
            <th >ID</th>
            <th >batch</th>
            <th >Duration</th>
            <th >Email</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $scholars as $scholar)

    <td >{{$scholar->id}}</td>
    <td><img src="{{ asset($scholar->image) }}"  width="50" height="50" class="rounded-circle" ></td>
    <td >{{$scholar->name}}</td>
    <td >{{$scholar->country}}</td>
    <td >{{$scholar->roll}}</td>
    <td >{{$scholar->batch}}</td>
    <td >{{$scholar->duration}}</td>
    <td>{{$scholar->email}}</td>


    <td class="d-flex">

        <a href="{{route('edit.scholarship',$scholar->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  "></i></a>

       <form  action="{{route('delete.scholarship',$scholar->id)}}" method="POST"  enctype="multipart/form-data">
           @csrf
           @method('DELETE')

           <button type="submit" onclick="return confirm('Are you sure?')" class="p-3 "><i class="fa-regular fa-trash-can text-danger "></i>
           </button>

       </form>
    </td>
  </tr>





  @endforeach
    </tbody>
</table>

</main>

@endsection



