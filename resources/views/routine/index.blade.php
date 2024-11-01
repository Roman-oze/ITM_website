@extends('layout.dashboard')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 text-center">Routine Management</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Routine List</li>
        </ol>

        <div class="row d-flex justify-content-evenly">
            <div class="col-12 col-md-5 card shadow-lg p-4 mb-5 bg-gradient">
                <div class="card-body">
                    <h3 class="card-title text-center p-3 text-dark">Upload Routine File</h3>
                    <div id="drop-area" class="border rounded p-4 text-center bg-light shadow-sm">
                        <form action="{{ route('routine.store') }}" method="POST" enctype="multipart/form-data" id="upload-form">
                            @csrf
                            <div class="form-group">
                                <label class="d-block" for="fileElem">
                                    <i class="fa-solid fa-cloud-arrow-up fa-4x text-primary mb-3"></i>
                                    <input type="file" id="fileElem" name="file" class="form-control p-2" style="border-radius: 10px;">
                                </label>
                                <p class="mt-2 text-muted">Drag and drop files here or click to select</p>
                            </div>

                            <div class="form-group d-flex flex-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="spring" name="type" value="spring" class="form-check-input">
                                    <label for="spring" class="form-check-label"><strong>Spring</strong></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="fall" name="type" value="fall" class="form-check-input">
                                    <label for="fall" class="form-check-label"><strong>Fall</strong></label>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" id="title" name="name" class="form-control" placeholder="Description" style="border-radius: 10px;">
                            </div>

                            <div id="gallery" class="mt-3">
                                <button type="submit" class="btn btn-gradient ">
                                    <i class="fas fa-paper-plane"></i> Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 p-3">
                <h2 class="text-center mb-4">Uploaded Files</h2>
                <div class="table-responsive bg-light shadow-lg rounded p-4">
                    <table class="table table-hover table-bordered text-center">
                        <thead class="table-dark">
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
                                        @can('delete')
                                        <form action="{{ route('routine.delete', $file->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger rounded-circle">
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
</main>

@endsection

<style>
/* Advanced styling for upload section */
.bg-gradient {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    border-radius: 12px;
}

.btn-gradient {
    background: linear-gradient(90deg, #ff8a00, #e52e71);
    color: white;
    border: none;
    transition: all 0.3s ease;
}

.btn-gradient:hover {
    background: linear-gradient(90deg, #e52e71, #ff8a00);
    transform: scale(1.02);
}

.table-hover tbody tr:hover {
    background-color: #f5f5f5;
}

.table-bordered {
    border: 1px solid #ddd;
}

.table-dark {
    background-color: #343a40;
    color: #fff;
}

.shadow-lg {
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    color: white;
}

/* Responsive enhancements */
@media (max-width: 767px) {
    .btn-gradient, .btn-outline-danger {
        width: 100%;
    }
}
</style>
