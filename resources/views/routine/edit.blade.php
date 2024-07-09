@extends('admin._master')

@section('main')
<div class="container mt-5">
    <div class="card shadow p-4">
        <div class="card-body">
            <h3 class="card-title text-center p-2">Upload Files</h3>
            <div id="drop-area" class="border p-5 text-center shadow bg-light">

                <form action="{{route('routine.store',$routine->id)}}" method="POST" enctype="multipart/form-data" >
                    @csrf




                    <div class="form-group">
                            <label class="" for="fileElem">
                                <i class="fa-solid fa-cloud-arrow-up  fa-5x" ></i>
                                <input type="file" id="fileElem" name="file" value="{{asset($routine->file)}}" class="form-control">

                            </label>
                        </div>
                        <p class="mt-2 btn btn-outline-info ">Drag and Drop files here</p>
                    </div>
                    <br>
                    <div class="mb-3 btn btn-outline-info text-white">
                    <input type="radio" id="" name="type"  value="{{$routine->type}}">
                      <label for="" class="text-dark"><strong>Spring</strong></label>

                  </div>


                <div class="mb-3 btn btn-outline-success text-white">
                    <input type="radio" id="" name="type" value="{{$routine->type}}">
                      <label for="" class="text-dark"><strong>Fall</strong></label>
                    </div>


                    <div class="mb-3">
                        <label class="" for="date">
                            <input type="date" id="fileElem" name="date" value="{{$routine->date}}" class="form-control">
                        </label>
                    </div>
                    <div id="gallery" class="mt-4">
                    <button type="submit" class="btn btn-success mt-3">
                        <i class="fas fa-paper-plane"></i> Update
                    </button>
                </div>
                </form>
            </div>

        </div>
    </div>

@endsection
