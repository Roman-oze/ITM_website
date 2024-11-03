
@extends('layout.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow border-0 animated-card ">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4 text-primary">Reset Your Password</h4>
                    <p class="text-center text-muted mb-4">
                        Enter your email address, and we’ll send you a link to reset your password.
                    </p>

                    <!-- Session Status Message with Fade-In Animation -->
                    @if(session('status'))
                        <div class="alert alert-success fade show" role="alert" id="statusMessage">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Password Reset Form -->
                    <form method="POST" action="{{ route('password.email') }}" id="resetForm">
                        @csrf

                        <!-- Email Address Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button with Custom Styling -->
                        <div class="d-grid">
                            <button type="submit" class="btn custom-btn" id="submitBtn">
                                <span id="submitText">Send Password Reset Link</span>
                                <span id="loadingSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<!-- Button Styling -->



@endsection











