@extends('admin._master')



@section('main')



<div class="container mt-5">
    <div class="card shadow ">
        <div class="card-body ">
            <h3 class="card-title text-center">Upload Files</h3>
            <div id="drop-area" class="border p-5 text-center shadow bg-light">
                <form action="" method="POST" enctype="multipart/form-data" id="upload-form">
                    @csrf
                    <div class="form-group b">
                        <div class="file-upload">
                            <input type="file" id="fileElem" multiple accept="*/*" onchange="handleFiles(this.files)">
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
</div>






@endsection
