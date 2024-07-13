

@extends('layout.master')

@section('content')

<div class="container mt-5">
    <div class="card shadow p-4">
        <div class="card-body">


<table class="table table-striped bg-light rounded">
    <tbody class="text-center">
        <thead class="text-center">
        <tr >
            <th class="text-dark">Semester</th>
            <th class="text-dark">Date</th>
            <th class="text-dark">Details</th>

        </tr>
    </thead>
    <tbody class="text-center">

        @foreach($routines as $routine)

    {{-- <td class="text-dark">{{($routine->file) }}</td> --}}
    <td class="text-dark">{{$routine->type}}</td>
    <td class="text-dark">{{$routine->date}}</td>
    <td class="text-dark">{{$routine->file}}</td>
    <td class="text-dark"><a href="" class="btn btn-outline-dark">View</a></td>
    <td class="text-dark"><a href="{{url('/download',$routine->file)}}" ><i class="fa-solid fa-circle-down conic fa-3x"></i></a>

    <td class="d-flex justify-content-evenly">

        <a href="{{route('routine.create',$routine->id)}}" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i> view</a>
        <a href="{{route('routine.edit',$routine->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i> Download</a>



  </tr>

  @endforeach
    </tbody>
</table>


<div class="row">
    {{-- {{ $record->links('pagination::bootstrap-5') }} --}}
</div>

</div>
</div>
</div>
@endsection
