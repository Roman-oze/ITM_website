@extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-5">

        <h1 class="mt-4">Footer </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Footer</li>
        </ol>

        <h3 class="mt-1 p-3">
            <a href="{{ route('footer.create')}}" class="btn btn-outline-dark">Create</a>
        </h3>



        <div class="row">
            @foreach($institutes as $institute)
            <div class="col-md-4 mb-4">
                <div class="card">
                    {{-- @if($institute->footer_logo)
                        <img src="{{ asset($institute->footer_logo) }}" class="card-img-top" alt="Institute Logo">
                    @endif --}}


                        <label for="image" class="form-label">Image</label>
                        @if ($institute->footer_logo)
                            <div>
                                <img src="{{ asset($institute->footer_logo) }}" class="card-img-top" alt="Institute Logo">
                            </div>
                        @endif





                    <div class="card-body">
                        <h5 class="card-title">{{ $institute->address }}</h5>
                        <p class="card-text">Phone: {{ $institute->phone }}</p>
                        <p class="card-text">Email: {{ $institute->email }}</p>

                        <a href="{{ $institute->tuition_fees }}" class="btn btn-outline-success" download>Tuition Fees</a>
                        <a href="{{ $institute->course_download }}" class="btn btn-outline-dark" download>Download Course</a>

                        <div class="mt-3">
                            <a href="{{ $institute->facebook }}" target="_blank" class="me-2">
                                <i class="fab fa-facebook-f "></i>
                            </a>
                            <a href="{{ $institute->instagram }}" target="_blank" class="me-2">
                                <i class="fab fa-instagram "></i>
                            </a>
                            <a href="{{ $institute->linkedin }}" target="_blank" class="me-2">
                                <i class="fab fa-linkedin-in "></i>
                            </a>
                            <br>

                            <div class="d-flex justify-content-evenly">
                                <a href="{{route('footer.edit',$institute->id)}}" class="btn btn-outline-info">Edit</a>
                                <form action="{{route('footer.destroy',$institute->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
