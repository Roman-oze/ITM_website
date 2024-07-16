

@extends('layout.master')

@section('content')

    <div class="row">
        <!-- Image Column -->
        <div class="col-12 col-lg-8 mb-4 mb-lg-0">
            <iframe src="path_to_your_pdf.pdf" class="w-100" style="height: 600px;" frameborder="0"></iframe>

        </div>
        <!-- Table Column -->
        <div class="col-12 col-lg-4">

            @foreach($routines as $routine)

            <div class="mb-3 p-3 border">
                <h1>Semester</h1>
                <h5>{{$routine->type}}</h5>
            </div>

            <div class="mb-3 p-3 border">
                <h1>Date</h1>
                <h5>{{$routine->date}}</h5>
            </div>

            <div class="mb-3 p-3 border">
                <h1>View</h1>
                <a href="{{route('routine.create',$routine->id)}}" class="p-2 text-dark">
                    <i class="fa-solid fa-eye text-success fa-lg"></i> View
                </a>
            </div>

            <div class="mb-3 p-3 border">
                <h1>Details</h1>
                <a href="{{url('/download',$routine->file)}}" class="p-2 text-dark">
                    <i class="fa-solid fa-circle-down text-info fa-lg"></i> Download
                </a>
            </div>

            @endforeach

            {{-- <table class="table table-striped rounded">
                <thead class="text-center">
                    <tr>
                        <th><h4 class="text-dark">Semester</h4></th>
                        <th><h4 class="text-dark">Date</h4></th>
                        <th><h4 class="text-dark">Details</h4></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($routines as $routine)
                    <tr>
                        <td class="text-dark text-capitalize"><h5>{{$routine->type}}</h5></td>
                        <td class="text-dark text-capitalize"><h5>{{$routine->date}}</h5></td>
                        <td class="d-flex justify-content-center">
                            <a href="{{route('routine.create',$routine->id)}}" class="p-2 text-dark">
                                <i class="fa-solid fa-eye text-success fa-lg"></i> View
                            </a>
                            <a href="{{url('/download',$routine->file)}}" class="p-2 text-dark">
                                <i class="fa-solid fa-circle-down text-info fa-lg"></i> Download
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table> --}}
        </div>
    </div>






{{-- <div class="row">
    {{ $record->links('pagination::bootstrap-5') }}
</div> --}}

@endsection
