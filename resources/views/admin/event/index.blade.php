


@extends('admin.Admin layout._master')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}


<div class="container">
    <h2 class="text-dark mt-5  p-2">Event Profile</h2>

    <div class="row  p-4">
        <div class=" text-left">
          <a href="{{ route('event/create') }}" class="btn btn-dark text-white">Add Profile</a>

        </div>
      </div>

    <table class="table table-striped bg-dark ">
        <thead>
            <tr >
                <th class="text-white">ID</th>
                <th class="text-white">Name</th>
                <th class="text-white">Image</th>
                <th class="text-white">Date</th>
                <th class="text-white">Time</th>
                {{-- <th class="text-white">LinkedIn</th> --}}
                <th class="text-white">location</th>
                <th class="text-white">description</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)

        <td class="text-white-50">{{$event->id}}</td>
        <td class="text-white-50">{{$event->name}}</td>
        <td><img src="{{asset($event->image) }}"  width="48" height="48" class="rounded-circle" ></td>
        <td class="text-white-50">{{$event->date}}</td>
        <td class="text-white-50">{{$event->time}}</td>
        {{-- <td class="text-white-50">{{$teacher->linked}}</td> --}}
        <td class="text-white-50">{{$event->location}}</td>
        <td class="text-white-50">{{$event->description}}</td>




        <td class="d-flex justify-content-evenly">


           <a href="{{ route('event_show',$event->id) }}" class="p-3"><i class="fa-solid fa-eye text-white  fa-lg "></i></a>
           <a href="{{ route('event_edit',$event->id) }}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

           <form action="{{route('event_delete',$event->id)}}" method="post" style="display:inline;">
               @csrf
               @method('DELETE')
               <button type="submit"  class="p-3 bg-dark" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-danger  fa-lg"></i></button>
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
