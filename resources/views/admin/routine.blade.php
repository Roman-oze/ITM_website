@extends('admin._master')



@section('main')



{{-- <div class="container mt-5">
    <div class="card shadow ">
        <div class="card-body ">
            <h3 class="card-title text-center">Upload Files</h3>
            <div id="drop-area" class="border p-5 text-center shadow bg-light">
                <form action="" method="POST" enctype="multipart/form-data" id="upload-form">
                    @csrf
                    <div class="form-group b">
                        <div class="file-upload">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <input type="file"  id="fileElem" multiple accept="*/*" onchange="handleFiles(this.files)">
                            <label class="btn btn-primary" for="fileElem">Browse files</label>
                        </div>
                        <p class="mt-2 btn btn-outline-dark">or drag and drop files here</p>

                    </div>
                    <div id="gallery" class="mt-4"></div>
                </form>
            </div>
            <div id="uploaded-files text-center" class="mt-4">
                <h5 class="btn btn-outline-info">Uploaded File</h5>
                <div id="file-list"></div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title text-center">Upload Files</h3>
            <div id="drop-area" class="border p-5 text-center shadow bg-light">
                <form action="" method="POST" enctype="multipart/form-data" id="upload-form">
                    @csrf
                    <div class="form-group">
                        <div class="file-upload">
                            <label class="" for="fileElem">
                                <i class="fa-solid fa-cloud-arrow-up  fa-6x" ></i>
                                <input type="file" id="fileElem" name="" class="form-control">

                            </label>
                        </div>
                        <p class="mt-2 btn btn-outline-info ">Drag and Drop files here</p>
                    </div>
                    <div id="gallery" class="mt-4"></div>
                    <button type="submit" class="btn btn-success mt-3">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </form>
            </div>
            <div id="uploaded-files" class="mt-4">
                <h5>Uploaded File</h5>
                <div id="file-list"></div>
            </div>
        </div>
    </div>
</div>




@endsection
