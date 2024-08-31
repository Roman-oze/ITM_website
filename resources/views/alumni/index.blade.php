@extends('layout.dashboard')


@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Alumni</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Alumni List </li>
        </ol>

        <div class="row">
            <div class=" text-left">
              <a href="{{ route('create.alumni') }}" class="btn btn-dark text-white">Add Alumni</a>

            </div>
          </div>

    </div>

    <div class="table-responsive">
        <table class="table table-striped">
    <thead>
        <tr >
            <th >ID</th>
            <th >Image</th>
            <th >Name</th>
            <th >ID</th>
            <th >batch</th>
            <th >passing Year</th>
            <th >Organization</th>
            <th >Designation</th>
            <th >Phone</th>
            <th >Email</th>
            <th >address</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $alumns as $alumn)

    <td >{{$alumn->id}}</td>
    <td><img src="{{ asset($alumn->image) }}"  width="50" height="50" class="rounded-circle" ></td>
    <td >{{$alumn->name}}</td>
    <td >{{$alumn->roll}}</td>
    <td >{{$alumn->batch}}</td>
    <td >{{$alumn->pass_year}}</td>
    <td >{{$alumn->organization}}</td>
    <td >{{$alumn->designation}}</td>
    <td>{{$alumn->phone}}</td>
    <td>{{$alumn->email}}</td>
    <td>{{$alumn->address}}</td>

    <td class=" align-self-center justify-content-evenly">

        <a href="{{route('edit.alumni',$alumn->id)}}"class=" btn btn-outline-dark" class="p-2 "><i class="fa-solid fa-pen-to-square text-info  "></i></a>

       <form  action="{{route('delete.alumni',$alumn->id)}}" method="POST"  enctype="multipart/form-data">
           @csrf
           @method('DELETE')

           <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-dark" class="p-2 "><i class="fa-regular fa-trash-can text-danger"></i>
           </button>

       </form>
    </td>
  </tr>





  @endforeach
    </tbody>
</table>

</main>

@endsection



