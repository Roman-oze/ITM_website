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
                            {{-- <div class="form-group">
                                <label class="d-block" for="fileElem">
                                    <i class="fa-solid fa-cloud-arrow-up fa-4x text-primary mb-3"></i>
                                    <input type="file" id="fileElem" name="file" class="form-control p-2" style="border-radius: 10px;">
                                </label>
                                <p class="mt-2 text-muted">Drag and drop files here or click to select</p>
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="title">
                                  <i class="fa-solid fa-image fa-4x text-success mb-3"></i>
                                </label>
                                <input type="file" id="title" name="image"  placeholder="Image">
                            </div> --}}
                            <div class="form-group">
                                <label for="fileElem" class="d-block">
                                    <i class="fa-solid fa-cloud-arrow-up fa-4x text-primary mb-3"></i>
                                    <span class="d-block text-muted">Drag and drop files here or click to select</span>
                                    <input
                                        type="file"
                                        id="fileElem"
                                        name="file"
                                        class="form-control p-2"
                                        style="border-radius: 10px; display: none;"
                                        onchange="handleFileUpload(event)">
                                </label>
                                <p class="text-muted">Accepted file types: PDF, DOCX, TXT | Max size: 2MB</p>
                            </div>

                            <div class="form-group">
                                <label for="image" class="form-label d-block">
                                    <strong>Upload Image</strong>
                                </label>
                                <div class="custom-file">
                                    <input
                                        type="file"
                                        id="image"
                                        name="image"
                                        class="custom-file-input"
                                        accept="image/*"
                                        onchange="previewImage(event)">
                                    <label class="custom-file-label" for="image">Choose an image</label>
                                </div>
                                <small class="form-text text-muted mt-2">Allowed formats: JPG, PNG, GIF | Max size: 2MB</small>

                                <!-- Preview Section -->
                                <div id="image-preview-container" class="mt-3" style="display: none;">
                                    <strong>Preview:</strong>
                                    <img id="preview-img" src="#" alt="Image Preview" class="img-thumbnail mt-2" style="max-width: 200px; display: block;">
                                </div>
                            </div>


                            {{-- <div class="form-group d-flex flex-flex justify-content-center">
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
                            </div> --}}
                            <div class="form-group d-flex justify-content-center mb-4">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="spring" name="type" value="spring" class="form-check-input custom-radio">
                                    <label for="spring" class="form-check-label custom-radio-label">
                                        <strong>Spring</strong>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ml-3">
                                    <input type="radio" id="fall" name="type" value="fall" class="form-check-input custom-radio">
                                    <label for="fall" class="form-check-label custom-radio-label">
                                        <strong>Fall</strong>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" id="title" name="title" class="form-control custom-input" placeholder="Enter description here">
                            </div>



                            <div id="gallery" class="mt-3">
                                <button type="submit" class="btn btn-dark ">
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
        @foreach($falls as $fall)
        <div class="col-md-8">
              <img src="{{ asset($fall->image) }}" alt="Routine" class="img-fluid">
        </div>
        <div class="col-md-4 p-3 text-center">
            <div class="card text-center shadow-lg mb-4" style="border-radius: 15px; overflow: hidden;">
                <div class="card-header bg-dark text-white" style="font-size: 1.2rem; padding: 20px 10px;">
                    <i class="fas fa-calendar-alt"></i> {{ $fall->type }}
                </div>
                <div class="card-body" style="background-image: url('https://example.com/background.jpg'); background-size: cover; padding: 30px;">
                    <p class="card-text  mb-4 routine-title">{{ $fall->title }}</p>
                    <a href="javascript:void(0);" class="btn btn-light btn-block mb-2 view-btn" data-image="{{ asset($fall->image) }}" style="border-radius: 20px;">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <a href="{{ route('files.download', $fall->id) }}" class="btn btn-light btn-block" style="border-radius: 20px;">
                        <i class="fas fa-download"></i> Download
                    </a>
                </div>
                <div class="card-footer text-muted">
                    Last updated: <strong>{{ $fall->uploaded_at }}</strong>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <!-- Spring Section -->
    <div id="spring-section" class="row p-3 " style="display: none; opacity: 0;">
        @foreach($springs as $spring)
        <div class="col-md-8 ">
               <img src="{{ asset($spring->image) }}" alt="Routine" class="img-fluid">
        </div>
        <div class="col-md-4 p-3 text-center">
            <div class="card text-center shadow-lg mb-4" style="border-radius: 15px; overflow: hidden;">
                <div class="card-header bg-dark text-white" style="font-size: 1.2rem; padding: 20px 10px;">
                    <i class="fas fa-calendar-alt"></i> {{ $spring->type }}
                </div>
                <div class="card-body" style="background-image: url('https://example.com/background.jpg'); background-size: cover; padding: 30px;">
                    <p class="card-text text-dark mb-4" style="font-size: 1rem;">{{ $spring->title }}</p>
                    <a href="javascript:void(0);" class="btn btn-light btn-block mb-2 view-btn" data-image="{{ asset($spring->image) }}" style="border-radius: 20px;">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <a href="{{ route('files.download', $spring->id) }}" class="btn btn-light btn-block" style="border-radius: 20px;">
                        <i class="fas fa-download"></i> Download
                    </a>
                </div>
                <div class=" text-muted">
                    Last updated: <strong>{{ $spring->uploaded_at }}</strong>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    </div>
    </div>
</main>

@endsection
<style>
    /* Custom input field styling */
.custom-input {
    border-radius: 10px;
    padding: 12px;
    border: 2px solid #ddd;
    font-size: 16px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.custom-input:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

/* Placeholder animation */
.custom-input::placeholder {
    font-style: italic;
    color: #aaa;
    transition: all 0.3s ease;
}

.custom-input:focus::placeholder {
    color: transparent;
}

    /* Styling for the custom radio buttons */
.custom-radio {
    display: none;
}

.custom-radio + .custom-radio-label {
    cursor: pointer;
    position: relative;
    padding-left: 35px; /* Room for custom radio button */
    font-weight: 500;
    transition: all 0.3s ease;
}

.custom-radio + .custom-radio-label:before {
    content: '';
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    border: 2px solid #007bff;
    border-radius: 50%;
    background-color: transparent;
    transition: all 0.3s ease;
}

.custom-radio:checked + .custom-radio-label:before {
    background-color: #007bff;
    border-color: #0056b3;
}

.custom-radio:checked + .custom-radio-label {
    color: #007bff;
}

.custom-radio + .custom-radio-label:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Styling for the file upload (drag-and-drop) area */
#fileElem {
    display: none;
}

#fileElem + label {
    cursor: pointer;
    padding: 10px;
    border: 2px dashed #ddd;
    border-radius: 10px;
    text-align: center;
    display: block;
}

#fileElem + label:hover {
    border-color: #007bff;
}

/* Styling for the image upload */
.custom-file-label {
    cursor: pointer;
    background-color: #f8f9fa;
    border-radius: 10px;
    padding: 10px;
    border: 1px solid #ddd;
}

.custom-file-input {
    display: none;
}

.img-thumbnail {
    border: 2px solid #ddd;
    border-radius: 8px;
}


</style>

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

// image / file
// File upload functionality
// File upload functionality
function handleFileUpload(event) {
    const file = event.target.files[0];
    if (file) {
        alert('File selected: ' + file.name);
    }
}
// Image preview functionality
function previewImage(event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('image-preview-container');
    const previewImage = document.getElementById('preview-img');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        previewContainer.style.display = 'none';
    }
}


</script>


