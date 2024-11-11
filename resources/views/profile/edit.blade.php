
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

{{-- <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="profile_picture">Profile Picture</label>
        <input type="file" class="form-control" name="profile_picture" id="profile_picture">
    </div>
    <button type="submit" class="btn btn-primary">Update Profile</button>
</form> --}}


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
