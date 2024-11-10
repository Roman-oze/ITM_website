@extends('layout.dashboard')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Notice Board Create</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Notice create</li>
        </ol>

        <div class="card shadow border-0 rounded-3 mt-3 mx-auto" style="max-width: 600px;">

           

            <div class="card-body p-4">
                <form action="{{ route('notice.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" id="title" class="form-control" name="title" required placeholder="Notice Title">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content:</label>
                        <textarea id="content" name="content" class="form-control" rows="5" required placeholder="Write your notice content here..."></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-dark">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
