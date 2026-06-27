@extends('layout.dashboard')
@include('include.alerts')
@section('main')
    <div class="container py-4">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold">Profile Settings</h2>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card mb-4 text-white" style="background: linear-gradient(135deg, #0B1220, #255a7f);">
                        <div class="card-body p-4 d-flex align-items-center">
                            <div class="rounded-circle bg-white text-center d-flex align-items-center justify-content-center shadow-sm"
                                style="width: 70px; height: 70px;">
                                <span class="fs-2 fw-bold"
                                    style="color: #0B1220;">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                            </div>
                            <div class="ms-4">
                                <h4 class="mb-1 fw-semibold">{{ $user->name }}</h4>
                                <p class="mb-0 opacity-75"><i class="bi bi-envelope-fill me-1"></i> {{ $user->email }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-transparent border-0 pt-4 px-4">
                                    <h5 class="fw-bold mb-0" style="color: #0B1220;">Profile Information</h5>
                                    <p class="small text-muted mb-0">Update your account's profile information and email
                                        address.</p>
                                </div>
                                <div class="card-body p-4">
                                    <form method="post" action="{{ route('profile.update') }}">
                                        @csrf
                                        @method('put')

                                        <div id="profile-alerts"></div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label fw-semibold text-secondary small">Full
                                                Name</label>
                                            <input type="text" class="form-control form-control-lg border-2 shadow-none"
                                                name="name" id="name" value="{{ old('name', $user->name) }}"
                                                required style="font-size: 0.95rem;">
                                        </div>

                                        <div class="mb-4">
                                            <label for="email" class="form-label fw-semibold text-secondary small">Email
                                                Address</label>
                                            <input type="email" class="form-control form-control-lg border-2 shadow-none"
                                                name="email" id="email" value="{{ old('email', $user->email) }}"
                                                required style="font-size: 0.95rem;">
                                        </div>

                                        <button type="submit"
                                            class="btn-primary w-100 py-2 fw-semibold text-white transition-all shadow-sm">
                                            Save Changes
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-transparent border-0 pt-4 px-4">
                                    <h5 class="fw-bold mb-0" style="color: #0B1220;">Update Password</h5>
                                    <p class="small text-muted mb-0">Ensure your account is using a long, random
                                        password to stay secure.</p>
                                </div>
                                <div class="card-body p-4">
                                    <form method="post" action="{{ route('password.update') }}">
                                        @csrf
                                        @method('put')

                                        <div id="password-alerts"></div>

                                        <div class="mb-3">
                                            <label for="current_password"
                                                class="form-label fw-semibold text-secondary small">Current
                                                Password</label>
                                            <div class="input-group">
                                                <input type="password" id="current_password"
                                                    class="form-control border-2 shadow-none" name="current_password"
                                                    required>
                                                <button class="btn btn-outline-secondary border-2" type="button"
                                                    onclick="togglePassword('current_password')">
                                                    <span id="eye_current_password">👁️</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label fw-semibold text-secondary small">New
                                                Password</label>
                                            <div class="input-group">
                                                <input type="password" id="password"
                                                    class="form-control border-2 shadow-none" name="password" required>
                                                <button class="btn btn-outline-secondary border-2" type="button"
                                                    onclick="togglePassword('password')">
                                                    <span id="eye_password">👁️</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label for="password_confirmation"
                                                class="form-label fw-semibold text-secondary small">Confirm New
                                                Password</label>
                                            <div class="input-group">
                                                <input type="password" id="password_confirmation"
                                                    class="form-control border-2 shadow-none" name="password_confirmation"
                                                    required>
                                                <button class="btn btn-outline-secondary border-2" type="button"
                                                    onclick="togglePassword('password_confirmation')">
                                                    <span id="eye_password_confirmation">👁️</span>
                                                </button>
                                            </div>
                                        </div>

                                        <button type="submit"
                                            class="btn-primary w-100 py-2 fw-semibold text-white transition-all shadow-sm">
                                            Update Password
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        @include('profile.partials.delete-user-form')
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const toggleIcon = passwordField.nextElementSibling;
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.textContent = "🙈"; // Change icon to "hide" (monkey covering eyes)
            } else {
                passwordField.type = "password";
                toggleIcon.textContent = "👀"; // Change icon to "show" (eyes open)
            }
        }
    </script>
@endsection
<style>
    :root {
        --primary: #0B1220;
        --primary-light: #24597d;
        --border: #3b82f6;
        --white: #ffffff;
        --text-light: #d7e6f5;
    }

    /* ==========================
        CARD
========================== */

    .card {
        background: #0B1220 !important;
        border: 2px solid #3b82f6 !important;
        border-radius: 18px;
        color: #fff;
        overflow: hidden;
        transition: all .35s ease;
        box-shadow: 0 10px 30px rgba(25, 61, 86, .35);
    }

    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(59, 130, 246, .35);
    }

    /* ==========================
      CARD HEADER
========================== */

    .card-header {
        background: #050505 !important;
        border-bottom: 1px solid rgba(59, 130, 246, .4) !important;
    }

    .card-header h5 {
        color: #fff;
        font-weight: 600;
    }

    .card-header p {
        color: #b9d5f0 !important;
    }

    /* ==========================
      CARD BODY
========================== */

    .card-body {
        background: #0B1220;
        color: #fff;
    }

    /* ==========================
      LABELS
========================== */

    .form-label {
        color: #ffffff !important;
        font-weight: 600;
    }

    /* ==========================
      INPUTS
========================== */

    .form-control {
        height: 50px;
        border-radius: 10px;
        background: #234965;
        border: 1px solid #3b82f6;
        color: #fff;
        transition: .3s;
    }

    .form-control::placeholder {
        color: #b6c9da;
    }

    .form-control:focus {
        background: #295472;
        color: #fff;
        border-color: #60a5fa;
        box-shadow: 0 0 0 .2rem rgba(59, 130, 246, .25);
    }

    /* ==========================
      INPUT GROUP BUTTON
========================== */

    .input-group .btn {
        background: #234a6577;
        color: #fff;
        border: 1px solid #3b82f6;
    }

    .input-group .btn:hover {
        background: #2f5f82;
    }

    /* ==========================
      BUTTON
========================== */

    .btn-primary,
    .btn-theme {
        background: #0B1220 !important;
        border: 1px solid #3b82f6;
        color: #fff;
        font-weight: 600;
        transition: .3s;
    }

    .btn-primary:hover,
    .btn-theme:hover {
        border: 1px solid #3b82f6;

    }

    /* ==========================
      PROFILE HEADER
========================== */

    .profile-header {
        background: #0B1220;
        border: 2px solid #3b82f6;
        border-radius: 18px;
        color: #fff;
        box-shadow: 0 15px 40px rgba(25, 61, 86, .35);
    }

    /* ==========================
      AVATAR
========================== */

    .profile-avatar {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: #fff;
        color: #0B1220;
        font-size: 36px;
        font-weight: bold;
    }

    /* ==========================
      DELETE CARD
========================== */

    .danger-card {
        border: 2px solid #dc3545 !important;
    }

    .danger-card .card-header {
        background: #b91c1c !important;
    }

    /* ==========================
      TEXT COLORS
========================== */

    .text-muted {
        color: #b9d5f0 !important;
    }
</style>
