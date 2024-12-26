@extends('layout.dashboard')
@include('include.alerts')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4  ">Submit Academic Feedback</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Feedback</li>
        </ol>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card" style="max-width: 700px; margin: 0 auto; border-radius: 25px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
            <div class="card-header text-center" style="background: linear-gradient(135deg, #088178, #088178); color: white; border-radius: 25px 25px 0 0; padding: 20px;">
                <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600;">We Value Your Feedback!</h5>
                <p style="font-family: 'Arial', sans-serif;">Please help us improve by sharing your feedback.</p>
            </div>
            <div class="card-body" style="background-color: #f5f5f5; border-radius: 0 0 25px 25px; padding: 30px;">
                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label" style="font-size: 1.1rem; font-weight: bold;">Your Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control rounded-pill" id="name" name="name" required style="border: 2px solid #088178; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label" style="font-size: 1.1rem; font-weight: bold;">Your Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control rounded-pill" id="email" name="email" required style="border: 2px solid #088178; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="feedback_type" class="form-label" style="font-size: 1.1rem; font-weight: bold;">Feedback Type</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-comments"></i></span>
                            <select name="feedback_type" id="feedback_type" class="form-select rounded-pill" required style="border: 2px solid #088178; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <option value="" disabled selected>Select type</option>
                                <option value="General Query">General Query</option>
                                <option value="Course Feedback">Course Feedback</option>
                                <option value="Technical Issue">Technical Issue</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label" style="font-size: 1.1rem; font-weight: bold;">Your Message</label>
                        <textarea name="message" id="message" class="form-control rounded-3" rows="5" required style="border: 2px solid #088178; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-lg" style="background: linear-gradient(135deg, #088178, #088178); color: white; border-radius: 30px; font-weight: bold; transition: background-color 0.3s ease;">
                            Submit Feedback
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</main>

@endsection

@push('styles')
<style>
    /* Smooth transition for input focus */
    .form-control:focus, .form-select:focus, .form-control:active, .form-select:active {
        border-color: #088178;
        box-shadow: 0 0 8px rgba(255, 97, 166, 0.5);
    }
    /* Button hover effect */
    .btn:hover {
        background: linear-gradient(135deg, #088178, #088178);
        transform: scale(1.05);
    }
</style>
@endpush

@push('scripts')
<!-- FontAwesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endpush
