



@extends('layout.dashboard')

@section('main')
<main>

    <div class="container-fluid px-4">
        <h2 class="mt-4">Event Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Event List</li>
        </ol>

        <!-- Add Button -->
    <div class="d-flex  mb-3">
        <a href="{{ route('event/create') }}" class="btn btn-dark rounded-pill shadow">
            <i class="fas fa-plus-circle"></i> Add Event
        </a>
    </div>

        <!-- Compact Event Cards Grid -->
        <div class="row">
             <!-- Sweet alert -->
             @include('include.alerts')
            @foreach ($events as $event)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center p-3">
                        <img src="{{ asset($event->image) }}" class="rounded mb-2" width="230" height="150" alt="Event Image">
                        <h6 class="card-title mb-1">{{ $event->name }}</h6>
                        <p class="small text-muted mb-1">
                            <i class="fas fa-calendar-alt"></i> {{ $event->date }} | <i class="fas fa-clock"></i> {{ $event->time }}
                        </p>
                        <p class="small text-muted">
                            <i class="fas fa-map-marker-alt"></i> {{ $event->location }}
                        </p>

                        <!-- Action Buttons -->
                        <div class="d-flex justify-content-center gap-2 mt-2">
                            <div class="d-flex justify-content-center mt-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                        @can('update user')
                                        <li>
                                            <a class="dropdown-item" href="{{ route('event_edit', $event->id) }}">
                                                <i class="fa-solid fa-user-pen"></i> Edit
                                            </a>
                                        </li>
                                        @endcan
                                        <li>
                                            @can('delete user')
                                            <form action="{{ route('event_delete', $event->id) }}" method="POST" class="d-inline">
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
            </div>

            <!-- View Event Modal -->
            <div class="modal fade" id="viewEventModal{{ $event->id }}" tabindex="-1" aria-labelledby="viewEventModalLabel{{ $event->id }}" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewEventModalLabel{{ $event->id }}">{{ $event->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset($event->image) }}" class="img-fluid mb-4" alt="{{ $event->name }}">
                            <p><strong>Date:</strong> {{ $event->date }}</p>
                            <p><strong>Time:</strong> {{ $event->time }}</p>
                            <p><strong>Location:</strong> {{ $event->location }}</p>
                            <p><strong>Description:</strong> {{ $event->description }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="deleteEventModal{{ $event->id }}" tabindex="-1" aria-labelledby="deleteEventModalLabel{{ $event->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteEventModalLabel{{ $event->id }}">Delete Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete <strong>{{ $event->name }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="{{ route('event_delete', $event->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination justify-content-center mt-3">
            {{-- {{ $events->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>
</main>
@endsection
