
@extends('layout.dashboard')

@section('main')

<section id="services" class="services section-bg">
    <div class="container mt-5" data-aos="fade-up">
      {{-- <div class="section-title">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Profile') }}
        </h2>
    </div> --}}
    <h1 class="mt-4">Profile</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Profile Update</li>
    </ol>


            {{-- @include('profile.partials.update-profile-information-form') --}}



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
                                        <label for="name" class="text-white">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name"class="text-white">Email</label>
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
