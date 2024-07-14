@extends('admin.Admin layout._master')



@section('main')


<div class="container mt-5">
    <div class="card shadow p-4">
        <div class="card-body">
            <h3 class="card-title text-center p-2">Upload Files</h3>
            <div id="drop-area" class="border p-5 text-center shadow bg-light">
                <form action="{{route('routine.store')}}" method="POST" enctype="multipart/form-data" id="upload-form">
                    @csrf
                    <div class="form-group">
                            <label class="" for="fileElem">
                                <i class="fa-solid fa-cloud-arrow-up  fa-5x" ></i>
                                <input type="file" id="fileElem" name="file" class="form-control">

                            </label>
                        </div>
                        <p class="mt-2 btn btn-outline-info ">Drag and Drop files here</p>
                    </div>
                    <br>

                    <div class="mb-3 btn btn-outline-info text-white">
                    <input type="radio" id="" name="type"  value="spring">
                      <label for="" class="text-dark"><strong>Spring</strong></label>
                  </div>


                <div class="mb-3 btn btn-outline-success text-white">
                    <input type="radio" id="" name="type" value="fall">
                      <label for="" class="text-dark"><strong>Fall</strong></label>
                    </div>


                    <div class="mb-3">
                        <label class="" for="date">
                            <input type="date" id="fileElem" name="date" class="form-control">
                        </label>
                    </div>

                    <div id="gallery" class="mt-4">
                    <button type="submit" class="btn btn-success mt-3">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="card shadow p-4">
            <div class="card-body">


    <table class="table table-striped bg-light rounded">
        <tbody class="text-center">
            <thead class="text-center">
            <tr >
                <th class="text-dark ">Semester</th>
                <th class="text-dark">Date</th>
                <th class="text-dark">Action</th>

            </tr>
        </thead>
        <tbody class="text-center">

            @foreach($routines as $routine)

        {{-- <td class="text-dark">{{($routine->file) }}</td> --}}
        <td class="text-dark">{{$routine->type}}</td>
        <td class="text-dark">{{$routine->date}}</td>
        <td class="d-flex justify-content-evenly">

            <a href="{{route('routine.create',$routine->id)}}" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i></a>
            <a href="{{route('routine.edit',$routine->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

            <form action="{{route('routine.delete',$routine->id)}}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="p-2"><i class="fa-solid fa-trash"></i>
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </form>


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

