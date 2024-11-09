@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">ITM Office Staff</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Staff List</li>
        </ol>

        <!-- Add Button -->
        <div class="d-flex  mb-3">
            <a href="{{ route('staff.create') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Profile
            </a>
        </div>

        <!-- Staff Cards -->
        <div class="row">
            @foreach($staffs as $staff)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <img src="{{ asset($staff->image) }}" alt="{{ $staff->name }}" class="rounded-circle mb-3" width="80" height="80">
                        <h5 class="card-title">{{ $staff->name }}</h5>
                        <p class="text-muted mb-2">{{ $staff->position }}</p>
                        <p><i class="fas fa-envelope"></i> {{ $staff->email }}</p>
                        <p><i class="fas fa-phone"></i> {{ $staff->mobile }}</p>

                        <div class="d-flex justify-content-center mt-2">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                    @can('update user')
                                    <li>
                                        <a class="dropdown-item" href="{{ route('staff.edit', $staff->id) }}">
                                            <i class="fa-solid fa-user-pen"></i> Edit
                                        </a>
                                    </li>
                                    @endcan
                                    <li>
                                        @can('delete user')
                                        <form action="{{ route('staff.delete',$staff->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="dropdown-item text-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                        @endcan
                                    </li>
                                </ul>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination justify-content-center mt-3">
            {{-- {{ $staffs->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>
</main>
@endsection
