@extends('layout.dashboard')

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
        @endcan

        @can('manage-user')
            <div class="col-12 col-md-6 p-3">
                <h2 class="text-center mb-4">Uploaded Files</h2>
                <div class="table-responsive bg-light shadow-lg rounded p-4">
                    <table class="table table-hover table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
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
                                    <td>{{ $file->name }}</td>
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
            <button class="btn btn-gradient-primary btn-lg mx-2 p-2 advanced-btn" onclick="toggleSection('fall-section')">
                <i class="fas fa-leaf"></i> Fall
            </button>
            <button class="btn btn-gradient-success btn-lg mx-2 p-2 advanced-btn" onclick="toggleSection('spring-section')">
                <i class="fas fa-sun"></i> Spring
            </button>
        </div>
    </div>

    <!-- Fall Section -->
    <div id="fall-section" class="row p-3" style="display: none; opacity: 0;">
        <div class="col-md-8">
            <img src="{{ asset('frontend/image/routine.png') }}" alt="Routine" class="img-fluid">
        </div>

        <div class="col-md-4 p-2 text-center">
            @foreach($falls as $fall)
                <div class="card text-center shadow-lg mb-4" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-header bg-primary text-white" style="font-size: 1.2rem; padding: 20px 10px;">
                        <i class="fas fa-calendar-alt"></i> {{ $fall->type }}
                    </div>
                    <div class="card-body" style="background-image: url('https://example.com/background.jpg'); background-size: cover; padding: 30px;">
                        <p class="card-text text-dark mb-4" style="font-size: 1rem;">{{ $fall->name }}</p>
                        <a href="{{ route('routine.show', $fall->id) }}" class="btn btn-light btn-block mb-2" style="border-radius: 20px;">
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
            @endforeach
        </div>
    </div>

    <!-- Spring Section -->
    <div id="spring-section" class="row p-3" style="display: none; opacity: 0;">
        <div class="col-md-8">
            <img src="{{ asset('frontend/image/routine.png') }}" alt="Routine" class="img-fluid">
        </div>

        <div class="col-md-4 p-2 text-center">
            @foreach($springs as $spring)
                <div class="card text-center shadow-lg mb-4" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-header bg-success text-white" style="font-size: 1.2rem; padding: 20px 10px;">
                        <i class="fas fa-calendar-alt"></i> {{ $spring->type }}
                    </div>
                    <div class="card-body" style="background-image: url('https://example.com/background.jpg'); background-size: cover; padding: 30px;">
                        <p class="card-text text-dark mb-4" style="font-size: 1rem;">{{ $spring->name }}</p>
                        <a href="{{ url('/routine/show', $spring->id) }}" class="btn btn-light btn-block mb-2" style="border-radius: 20px;">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="{{ route('files.download', $spring->id) }}" class="btn btn-light btn-block" style="border-radius: 20px;">
                            <i class="fas fa-download"></i> Download
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Last updated: <strong>{{ $spring->uploaded_at }}</strong>
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
/* Advanced styling for upload section */
 .section {
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .btn {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
.btn-gradient-primary {
        background: linear-gradient(135deg, #11a9cb 0%, #2575fc 100%);
        color: white;
        border: none;
    }

    .btn-gradient-success {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        color: white;
        border: none;
    }

    /* Button Hover Effects */
    .advanced-btn {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 30px;
    }

    .advanced-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    /* Icon Styling */
    .advanced-btn i {
        margin-right: 8px;
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


