

@extends('layout.master')

@section('content')




<div class="row mt-5">
    <div class="col-md-12 bg-black text-center">
        <a href="">
            <h1 class="text-light btn btn-outline-info">Click here for get routine by email </h1>
        </a>
    </div>
</div>

<div class="row">
<div class="col-6 mt-5  bg-danger">
    <img src="{{asset('frontend/image/bubbles.png')}}" alt="" class="img-fluid">

</div>

<div class="col-6 mt-5  bg-light">

<table class="table table-striped  rounded">
    <tbody class="text-center">
        <thead class="text-center">
        <tr >
            <th><h4 class="text-dark">Semester</h4></th>
            <th><h4 class="text-dark">Date</h4></th>
            <th><h4 class="text-dark">Details</h4></th>
        </tr>
    </thead>
    <tbody class="text-center">

        @foreach($routines as $routine)

    {{-- <td class="text-dark">{{($routine->file) }}</td> --}}
    <td class="text-dark text-capitalize"><h5>{{$routine->type}}</h5></td>
    <td class="text-dark text-capitalize"><h5>{{$routine->date}}</h5></td>


    <td class="d-flex justify-content-evenly">

        <a href="" class="p-3 text-dark h5"><i class="fa-solid fa-eye text-success  fa-lg "></i> view</a>
        <a href="{{url('/download',$routine->file)}}" class="p-3 text-dark h5"><i class="fa-solid fa-circle-down text-info  fa-lg"></i> Download</a>



  </tr>

  @endforeach
    </tbody>
</table>

{{--
<div class="row">
    {{ $record->links('pagination::bootstrap-5') }}
</div> --}}

</div>
</div>
@endsection
