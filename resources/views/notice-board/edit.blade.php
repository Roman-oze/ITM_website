
@extends('layout.dashboard')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Notice Board Edit</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Notice Edit</li>
        </ol>

        <div class="card shadow border-0 rounded-3 mt-3 mx-auto" style="max-width: 600px;">

            @if (session('success'))
            <div class=" alert alert-success">
              {{ session('success') }}
            </div>
          @endif
          @if (session('error'))
          <div class=" alert alert-danger">
              {{ session('error') }}
          </div>
          @endif

          
            <div class="card-body">
            <form action="{{ route('notice.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="form-control"
                        value="{{ $notice->title }}"
                        required
                        placeholder="Notice Title"
                    >
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content:</label>
                    <textarea
                        id="content"
                        name="content"
                        class="form-control"
                        rows="4"
                        required
                        placeholder="Write the content of the notice here...">{{ $notice->content }}</textarea>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</main>

@endsection
