


@extends('layout.dashboard')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}


<div class="container">
    <h2 class="text-dark mt-5  p-2">show event</h2>

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


        <td class="text-white-50">{{$events->id}}</td>
        <td class="text-white-50">{{$events->name}}</td>
        <td><img src="{{asset($events->image) }}"  width="50" height="50" class="rounded-circle" ></td>
        <td class="text-white-50">{{$events->date}}</td>
        <td class="text-white-50">{{$events->time}}</td>
        {{-- <td class="text-white-50">{{$teacher->linked}}</td> --}}
        <td class="text-white-50">{{$events->location}}</td>
        <td class="text-white-50">{{$events->description}}</td>
        <td class="d-flex">

          <a href="{{ route('dashboard.event',$events->id) }}"  class=" btn btn-outline-info text-white">Back</a>

        </td>
      </tr>


        </tbody>
    </table>


    <div class="row">
        {{-- {{ $record->links('pagination::bootstrap-5') }} --}}
    </div>

</div>
</div>


@endsection
