


@extends('layout.dashboard')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}

<main>

 <div class="container px-4">

    <h1 class="mt-4">Event</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">event list</li>
    </ol>

    <div class="row">
        <div class=" text-left">
          <a href="{{ route('event/create') }}" class="btn btn-dark text-white">Add Profile</a>

        </div>
      </div>


    <table class="table table-striped bg-light mt-3 ">
        <thead>
            <tr >
                <th class="text-dark">ID</th>
                <th class="text-dark">Name</th>
                <th class="text-dark">Image</th>
                <th class="text-dark">Date</th>
                <th class="text-dark">Time</th>
                {{-- <th class="text-white">LinkedIn</th> --}}
                <th class="text-dark">location</th>
                <th class="text-dark">description</th>
                <th class="text-dark">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)

        <td class="text-dark-50">{{$event->id}}</td>
        <td class="text-dark-50">{{$event->name}}</td>
        <td><img src="{{asset($event->image) }}"  width="48" height="48" class="rounded-circle" ></td>
        <td class="text-dark-50">{{$event->date}}</td>
        <td class="text-dark-50">{{$event->time}}</td>
        {{-- <td class="text-white-50">{{$teacher->linked}}</td> --}}
        <td class="text-dark-50">{{$event->location}}</td>
        <td class="text-dark-50">{{$event->description}}</td>




        <td class="d-flex justify-content-evenly">


           <a href="{{ route('event_show',$event->id) }}" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i></a>
           <a href="{{ route('event_edit',$event->id) }}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

           <form action="{{route('event_delete',$event->id)}}" method="post" style="display:inline;">
               @csrf
               @method('DELETE')
               <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-dark" class="p-2 "><i class="fa-regular fa-trash-can text-danger"></i>
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
   </main>

@endsection
