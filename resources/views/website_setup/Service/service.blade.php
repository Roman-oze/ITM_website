@extends('layout.dashboard')


@section('main')
<main>

    <div class="container-fluid px-4">
        <h2 class="mt-4">Service Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Service List </li>
        </ol>

        <!-- Add Button -->
    <div class="d-flex  mb-3">
        <a href="{{ route('services.create')}}" class="btn btn-dark rounded-pill shadow">
            <i class="fas fa-plus-circle"></i> Add Service
        </a>
    </div>

        <div class="row">
            @foreach ($services as $service)
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate p-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="card border-1 p-3">
                    <img src="{{asset($service->image)}}" class="card-img-top" alt="Small Image" style="height: 150px; width: 150px; object-fit: cover;">
                    <div class="card-body">
                        <a href="{{ $service->link }}" class="btn btn-dark">{{ $service->link_name }}</a>
                        <p class="card-text">{{ $service->description }}</p>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="actionMenu">
                            @can('update user')
                                <li>
                                    <a class="dropdown-item" href="{{route('services.edit',$service->id)}}">
                                        <i class="fa-solid fa-user-pen"></i> Edit
                                    </a>
                                </li>
                            @endcan
                                <li>
                            @can('delete user')
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
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
            @endforeach
        </div>
    </div>


</main>
@endsection
