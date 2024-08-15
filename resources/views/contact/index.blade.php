@extends('layout.dashboard')
@section('main')

<main>
<div class="container-fluid">
<h1 class="mt-4">Messages</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Message list</li>
</ol>


  <table class="table table-striped bg-light mt-3 ">
    <thead>
        <tr >
            <th class="text-dark">ID</th>
            <th class="text-dark">Viwer Name</th>
            <th class="text-dark">Email</th>
            <th class="text-dark">Subject</th>
            <th class="text-dark">Message</th>
            <th class="text-dark text-center">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $message)

    <td class="text-dark-50">{{$message->id}}</td>
    <td class="text-dark-50">{{$message->name}}</td>
    <td class="text-dark-50">{{$message->email}}</td>
    <td class="text-dark-50">{{$message->subject}}</td>
    <td class="text-dark-50">{{$message->message}}</td>




    <td class="d-flex justify-content-evenly">


       {{-- <a href="{{ route('event_show',$event->id) }}" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i></a>
       <a href="{{ route('event_edit',$event->id) }}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a> --}}

       <form action="{{route('message.delete',$message->id)}}" method="post" style="display:inline;">
           @csrf
           @method('DELETE')
           <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-dark" class="p-2 "><i class="fa-regular fa-trash-can text-danger"></i>
           </form>


    </td>


  </tr>

  @endforeach
    </tbody>
</table>

</div>
</main>
@endsection
