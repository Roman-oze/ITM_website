@extends('layout.dashboard')


@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Hero Section create</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Hero Section create</li>
        </ol>



        <div class="row justify-content-center">
            <div class="col-6 shadow rounded p-5">
                <form action="{{ route('herosection.store') }}" method="POST" enctype="multipart/form-data">
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
                    @method('POST')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder=" Title" name="title" >
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3" ></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input class="form-control" id="link" name="link" placeholder="Link / URL" rows="3" >
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control P-2" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-success">Update Hero Section</button>
                </form>
                    </div>
                    </div>

</div>
</main>
@endsection
