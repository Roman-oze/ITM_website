@extends('admin._master')



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
                    {{-- <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="spring">Spring</option>
                            <option value="fall">Fall</option>
                        </select>
                    </div> --}}
                    <br>
                    {{-- <div class="mb-3">
                        <label for="radio" class="form-label text-bold text-info">Spring</label>
                        <input type="radio" value="spring" name="type" class="">
                    </div>
                    <div class="mb-3">
                        <label for="radio" class="form-label">Fall</label>
                        <input type="radio" value="fall" name="type">
                    </div> --}}
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
                <th class="text-dark">File</th>
                <th class="text-dark">Type</th>
                <th class="text-dark">Date</th>
                <th class="text-dark">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">

            @foreach($routines as $routine)

        <td><img src="{{ asset($routine->file) }}" class="text-dark"  width="50" height="50" ></td>
        <td class="text-dark">{{$routine->type}}</td>
        <td class="text-dark">{{$routine->date}}</td>

        <td class="d-flex justify-content-evenly">

            <a href="" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i></a>
            <a href="" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

            <form action="" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <a href="" type="submit"  class="p-3" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-danger  fa-lg"></i></a>
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

