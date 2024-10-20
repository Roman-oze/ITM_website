@extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-5">

        <h1 class="mt-4">Footer Create </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Footer Create </li>
        </ol>



        <div class="row justify-content-center">
            <div class="col-6">
        <form action="{{route('footer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @if (session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div>
            @endif

            @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Tuition Fees -->
            <div class="mb-3">
                <label for="tuition_fees" class="form-label">Tuition Fees</label>
                <input type="text" class="form-control" id="tuition_fees" name="tuition_fees" step="0.01" required>
            </div>

            <!-- Course Download -->
            <div class="mb-3">
                <label for="course_download" class="form-label">Course Download</label>
                <input type="text" class="form-control" id="course_download" name="course_download">
            </div>

            <!-- Logo Upload -->

            <!-- Social Media Links -->
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook">
            </div>

            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram">
            </div>

            <div class="mb-3">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin">
            </div>

            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" id="logo" name="footer_logo">
            </div>

            <button type="submit" class="btn btn-success">Save Footer</button>
        </form>
    </div>
    </div>
    </div>
    <br>
</main>
@endsection
