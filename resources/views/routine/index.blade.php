@extends('layout.dashboard')
 <!-- Sweet alert -->
 @include('include.alerts')

@section('main')

<main>

        <div class="container-fluid px-4">
            <h2 class="mt-4">Routine Management</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Routine List</li>
            </ol>







        <div class="row d-flex justify-content-evenly">
            @can('update user')
            <div class="col-12 col-md-5 card shadow-lg p-4 mb-5 bg-gradient">
                <div class="card-body">
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
                            <div class="form-group">
                                <label for="title">Upload Image</label>
                                <input type="file" id="title" name="image"  placeholder="Image">
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
                                <input type="text" id="title" name="title" class="form-control" placeholder="Description" style="border-radius: 10px;">
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
        @endcan

        @can('manage-user')
            <div class="col-12 col-md-6 p-3">
                <h2 class="text-center mb-4">Uploaded Files</h2>
                <div class="table-responsive bg-light shadow-lg rounded p-4">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Routine</th>
                                <th>PDF</th>
                                <th>Date</th>
                                @can('delete user')
                                    <th>Actions</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                                <tr>
                                    <td>{{ $file->type }}</td>
                                    <td>{{ $file->title }}</td>
                                    <td><a href="{{ asset($file->file_path) }}" target="_blank"><i class="fa-regular fa-circle-down fa-2x"></i></a></td>
                                    <td>
                                        <img src="{{ asset($file->image) }}" alt="{{ $file->title }}" height="100" width="80">
                                    </td>
                                    <td>{{ $file->uploaded_at }}</td>
                                    @can('delete user')
                                        <td>
                                            <form action="{{ route('routine.delete', $file->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger rounded-circle">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
           @endcan


<!-- Container for Sections with Smooth Fade-In/Out -->
<div class="container-fluid">
    <!-- Button Group -->
    <div class="card mb-3">
        <div class="card-header text-center">
            <button class="btn btn-gradient-primary btn-lg mx-2 p-2 btn-outline-primary" onclick="toggleSection('fall-section')">
                <i class="fas fa-leaf"></i> Fall
            </button>
            <button class="btn btn-gradient-success btn-lg mx-2 p-2 btn-outline-primary" onclick="toggleSection('spring-section')">
                <i class="fas fa-sun"></i> Spring
            </button>
        </div>
    </div>

    <!-- Fall Section -->
    <div id="fall-section" class="row p-3 " style="display: none; opacity: 0;">
        <div class="col-md-8">
            @foreach($falls as $fall)
              <img src="{{ asset($file->image) }}" alt="Routine" class="img-fluid">
            @endforeach
        </div>

    </div>

    <!-- Spring Section -->
    <div id="spring-section" class="row p-3 " style="display: none; opacity: 0;">
        <div class="col-md-8 ">
            @foreach($springs as $spring)
               <img src="{{ asset($spring->image) }}" alt="Routine" class="img-fluid">
            @endforeach
        </div>
    </div>
</div>

    </div>
    </div>
</main>

@endsection


<!-- Advanced JavaScript with Smooth Transitions -->
<!-- JavaScript for Toggling Sections -->
<script>
    function toggleSection(sectionId) {
        // Hide all sections
        const sections = document.querySelectorAll('.row.p-3');
        sections.forEach(section => {
            section.style.display = 'none';
            section.style.opacity = '0';
            section.style.transition = 'opacity 0.5s';
        });

        // Display the selected section and animate opacity
        const selectedSection = document.getElementById(sectionId);
        selectedSection.style.display = 'flex'; // or 'block' if using block elements
        setTimeout(() => {
            selectedSection.style.opacity = '1';
        }, 50); // Delay to ensure the transition is noticeable
    }

    // Initialize by showing one section on page load
    document.addEventListener('DOMContentLoaded', () => {
        toggleSection('fall-section'); // or 'spring-section' based on your preference
    });
</script>


