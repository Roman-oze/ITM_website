
@extends('layout.dashboard')
@include('include.alerts')
@section('main')
<main>


        <div class="container-fluid px-4">
            <h2 class="mt-4">Committee Management</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Committee List </li>
            </ol>

            <!-- Add Button -->
        <div class="d-flex  mb-3">
            <a href="{{ route('committee.create') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Committee
            </a>
        </div>
      <!-- First Line: Single Card at the Top -->

      <div class="row">
        @foreach ($committeeMembers as $committee)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                <div class="student-card text-center border rounded">
                    <!-- Committee Image -->
                    <img src="{{ asset($committee->image) }}" class="photo img-fluid rounded" alt="Committee Member">
                    <h5 class="mt-2">{{ $committee->name }}</h5>
                    <h6 class="text-muted">{{ $committee->position }}</h6>

                    <!-- Actions Dropdown -->
                    <div class="dropdown mt-2">
                        <button
                            class="btn btn-sm btn-outline-dark dropdown-toggle"
                            type="button"
                            id="actionMenu{{ $committee->id }}"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Actions
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="actionMenu{{ $committee->id }}">
                            <!-- Edit Action -->
                            @can('update user')
                                <li>
                                    <a class="dropdown-item" href="{{route('committee.edit', $committee->id)}}">
                                        <i class="fa-solid fa-user-pen"></i> Edit
                                    </a>
                                </li>
                            @endcan

                            <!-- Delete Action -->
                            @can('delete user')
                                <li>
                                    <form action="{{route('committee.delete', $committee->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            onclick="return confirm('Are you sure?')"
                                            class="dropdown-item text-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>
</main>
@endsection
<style>
.student-card {
    overflow: hidden;
    max-width: 100%;
    transition: transform 0.3s, box-shadow 0.3s;
    display: block;
    margin: auto;
    padding: 10px;
    border-radius: 15px;
    border: 2px solid #ddd;
    background-color: #fff;
    text-align: center;
}

.student-card img.photo {
    width: 100%;
    height: auto;
    border-radius: 12px;
}

.student-card h5 {
    margin-top: 10px;
    color: #2c3e50;
    font-weight: bold;
}

.student-card h6 {
    color: #7f8c8d;
}

.student-card:hover {
    transform: scale(1.05);
    border-color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.student-card:hover h5,
.student-card:hover h6 {
    color: white;
}



    </style>
