@extends('layout.dashboard')



@section('main')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Routine</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">routine List </li>
        </ol>
        <br>

    <div class="row d-flex justify-content-evenly">
    <div class=" col-md-6 card shadow p-3">
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

                    <div class="form-group">
                        <input type="text" id="title" name="name"  class="form-control" placeholder="Description">
                    </div>
{{--
                    <div class="mb-3">
                        <label class="" for="date">
                            <input type="date" id="fileElem" name="date" class="form-control">
                        </label>
                    </div> --}}

                    <div id="gallery" class="mt-2">
                    <button type="submit" class="btn btn-success mt-3">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </div>
                </form>
            </div>

        </div>
<div class=" col-md-6 p-3">



    {{-- <table class="table table-striped bg-light rounded shadow">
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

        <td class="text-dark">{{$routine->type}}</td>
        <td class="text-dark">{{$routine->date}}</td>
        <td class="d-flex justify-content-evenly">

            <a href="{{route('routine.create',$routine->id)}}" class="p-3"><i class="fa-solid fa-eye text-success  fa-lg "></i></a>
            <a href="{{route('routine.edit',$routine->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

            <form action="{{route('routine.delete',$routine->id)}}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-dark" class="p-2 "><i class="fa-regular fa-trash-can text-danger"></i>
            </form>


      </tr>

      @endforeach
        </tbody>
    </table> --}}

    <div class="container">
        <h2>Uploaded Files</h2>
        <table class="table">
            <thead>
                <tr>
                <th>Type</th>
                <th>Description</th>
                <th>Date</th>
                @can('delete')
                <th>Actions</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->type }}</td>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->uploaded_at }}</td>
                    <td>
                        {{-- <a href="{{ route('files.download', $file->id) }}" class="btn btn-sm btn-success">Download</a> --}}
                        {{-- <a href="{{ route('routine.delete', $file->id) }}" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </a> --}}

                        @can('delete')
                        <form action="{{route('routine.delete',$file->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash-can"></i>
                                </button>

                        </form>
                        @endcan
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>
</div>
</div>
</div>





</main>

@endsection

