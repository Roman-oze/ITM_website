@extends('layout.app')
@section('content')
<br>
<br>
<br>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow border-0 animated-card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4 text-primary">Reset Your Password</h4>
                    <p class="text-muted text-center mb-4">
                        Enter your email and new password to reset your account password.
                    </p>

                    <form method="POST" action="{{ route('password.store') }}" id="resetPasswordForm">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $request->email) }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- New Password with Toggle Icon -->
                        <div class="mb-3 position-relative">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            <span class="position-absolute end-0 top-50 translate-middle-y me-3 password-icon" onclick="togglePasswordVisibility('password', 'togglePasswordIcon')">
                                <i id="togglePasswordIcon" class="bi bi-eye"></i>
                            </span>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Confirm Password with Toggle Icon -->
                        <div class="mb-4 position-relative">
                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required>
                            <span class="position-absolute end-0 top-50 translate-middle-y me-3 password-icon" onclick="togglePasswordVisibility('password_confirmation', 'toggleConfirmPasswordIcon')">
                                <i id="toggleConfirmPasswordIcon" class="bi bi-eye"></i>
                            </span>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="custom-btn" id="resetButton">
                                <span id="buttonText">Reset Password</span>
                                <span id="loadingSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
