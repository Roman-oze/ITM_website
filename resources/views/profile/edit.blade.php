
@extends('layout.dashboard')
@include('include.alerts')
@section('main')

<section id="services" class="services section-bg">
    <div class="container-fluid px-4">
        <h2 class="mt-4">Profile </h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">profile edit</li>
        </ol>

    {{-- <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-lg border-0 rounded-lg" style="width: 100%; max-width: 500px;">
            <!-- Card Header with Profile Picture and Edit Icon -->
            <div class="card-header bg-dark text-center position-relative">
                <!-- Profile Picture Wrapper -->
                <div class="position-relative" style="width: 100px; height: 100px; margin: 0 auto;">
                    <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp"
                         class="rounded-circle img-thumbnail"
                         alt="User Image"
                         width="100"
                         height="100"
                         style="object-fit: cover;">

                    <!-- Edit Icon Overlay -->
                    <label for="profile_picture" class="position-absolute bottom-0 end-0 bg-primary rounded-circle p-2" style="cursor: pointer;">
                        <i class="fa fa-edit text-white"></i>
                    </label>
                    <input type="file" id="profile_picture" name="profile_picture" class="d-none" accept="image/*">
                </div>

                <h5 class="card-title text-white mt-3">{{ $user->name }}</h5>
                <p class="text-light">{{ $user->email }}</p>
            </div>

            <!-- Card Body with Badge Spans -->
            <div class="card-body bg-light">
                <div class="mb-3">
                    <span class="badge bg-secondary">Name: {{ $user->name }}</span>
                </div>
                <div class="mb-3">
                    <span class="badge bg-secondary">Email: {{ $user->email }}</span>
                </div>
                <button type="button" class="btn btn-primary btn-block mt-4" onclick="window.location.href='{{ route('profile.edit') }}'">save</button>
            </div>
        </div>
    </div> --}}

    {{-- <div class="profile-card">
        <div class="profile-image-container">
            <form action="{{route('users.store',$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="Profile Image" class="profile-image">
                <label for="upload-photo" class="upload-icon">
                  <i class="fas fa-camera"></i>
                </label>
                <input type="file" name="profile" id="upload-photo" style="display: none;">
            </form>
        </div>
        <div class="profile-name">{{ $user->name }}</div>
        <div class="profile-email ">{{ $user->email }}</div>
        <button class="edit-profile-btn">Edit Profile</button>
      </div> --}}
<!-- resources/views/profile/edit.blade.php -->
<form action="{{ route('profile.update') }}" method="POST" id="profileForm" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Profile Picture Upload -->
    <div class="mb-3">
        <label for="profile_picture" class="form-label">Profile Picture</label>
        <input type="file" name="profile_picture" id="profile_picture" class="form-control" onchange="previewImage(event)">
        <div class="mt-2">
            <img id="imagePreview" src="{{ asset('profile_picture/' . auth()->user()->profile_picture) }}" alt="Profile Picture" class="img-thumbnail" width="150" style="display: {{ auth()->user()->profile_picture ? 'block' : 'none' }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>

<script>
    // Preview image before uploading
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';  // Show image preview
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    // Use JavaScript to submit form data (for AJAX if needed)
    document.getElementById('profileForm').onsubmit = function(e) {
        e.preventDefault();

        // Add JavaScript logic for AJAX submission here (if needed)
        // For now, it'll just submit the form normally
        this.submit();
    };
</script>




            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="custom-card">
                            <div class="card-header">
                                <h4>Profile Information</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('profile.update') }}">
                                    @csrf
                                    @method('put')

                                    <div id="alerts"></div> <!-- Placeholder for alerts -->

                                    <div class="form-group">
                                        <label for="name" class="text-dark"> Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name"class="text-dark">Email</label>
                                        <input type="email" class="form-control" name="email"    value="{{ old('email', $user->email) }}" required>
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-block mt-4">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









            {{-- @include('profile.partials.update-password-form') --}}
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="custom-card">
                            <div class="card-header">
                                <h4>Update Password</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')

                                    <div id="alerts"></div> <!-- Placeholder for alerts -->

                                    <div class="form-group">
                                        <label for="current_password">Current Password</label>
                                        <div class="password-wrapper">
                                            <input type="password" id="current_password" class="form-control" name="current_password"  required>
                                            <span class="toggle-password" onclick="togglePassword('current_password')">&#x1F441;</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <div class="password-wrapper">
                                            <input type="password" id="password" class="form-control" name="password"  required>
                                            <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <div class="password-wrapper">
                                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"  required>
                                            <span class="toggle-password" onclick="togglePassword('password_confirmation')">&#x1F441;</span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mt-4">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<br>
<br>
<br>

            @include('profile.partials.delete-user-form')
            {{-- <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')
                <button type="submit" id="save-button" class="btn btn-danger btn-block mt-4">Delete Account
                    <i class="fas fa-trash-alt"></i>
                    </button>
            </form> --}}




    </div>
</section>

@endsection
