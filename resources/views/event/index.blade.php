@extends('layout.dashboard')

@section('main')
    @include('include.alerts')

    <div class="container py-4">

        <div class="modern-card">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Event Management</h4>

                <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                    data-bs-target="#createEventModal">

                    <svg height="25" width="25" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor" />
                    </svg>

                    <span>Add</span>

                </button>
            </div>

            {{-- Table --}}
            <div class="table-responsive">

                <table class="modern-table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($events as $event)
                            <tr>

                                <td>#{{ $event->id }}</td>

                                <td>
                                    <img src="{{ asset($event->image) }}" alt="{{ $event->name }}"
                                        style="width:60px;height:60px;object-fit:cover;border-radius:10px;">
                                </td>

                                <td class="fw-medium">
                                    {{ $event->name }}
                                </td>

                                <td>
                                    {{ $event->date }}
                                </td>

                                <td>
                                    {{ $event->time }}
                                </td>
                                <td>
                                    <span class="badge-modern">
                                        {{ $event->type }}
                                    </span>
                                </td>

                                <td>
                                    {{ $event->location }}
                                </td>

                                <td class="text-muted">
                                    {{ Str::limit($event->description, 60) }}
                                </td>

                                <td class="text-center">

                                    <div class="action-group">

                                        {{-- View --}}
                                        <button class="btn-modern btn-info-modern" data-bs-toggle="modal"
                                            data-bs-target="#viewEventModal{{ $event->id }}">
                                            <i class="fas fa-eye"></i> View
                                        </button>

                                        @can('update user')
                                            <button type="button" class="btn-modern btn-secondary-modern editEventBtn"
                                                data-id="{{ $event->id }}" data-name="{{ $event->name }}"
                                                data-date="{{ $event->date }}" data-time="{{ $event->time }}"
                                                data-location="{{ $event->location }}" data-type="{{ $event->type }}"
                                                data-description="{{ $event->description }}"
                                                data-image="{{ asset($event->image) }}" data-bs-toggle="modal"
                                                data-bs-target="#editEventModal">

                                                <i class="fa fa-edit"></i> Edit

                                            </button>
                                        @endcan

                                        @can('delete user')
                                            <form action="{{ route('event_delete', $event->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn-modern btn-danger-modern">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>

                                            </form>
                                        @endcan

                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- Create Event Modal -->
    <div class="modal fade" id="createEventModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <!-- Header -->
                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-calendar-plus me-2"></i>
                        Create Event
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <!-- Form -->
                <form action="{{ url('event_store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>
                        @endif

                        <div class="row">

                            <!-- Event Name -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Event Name
                                </label>

                                <input type="text" name="name" class="form-control modern-input"
                                    value="{{ old('name') }}" required>

                                <small class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                            <!-- Image -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Event Image
                                </label>

                                <input type="file" name="image" class="form-control modern-input">

                                <small class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                            <!-- Date -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Date
                                </label>

                                <input type="date" name="date" class="form-control modern-input"
                                    value="{{ old('date') }}" required>

                                <small class="text-danger">
                                    @error('date')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                            <!-- Time -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Time
                                </label>

                                <input type="time" name="time" class="form-control modern-input"
                                    value="{{ old('time') }}" required>

                                <small class="text-danger">
                                    @error('time')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                            <!-- Location -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Location
                                </label>

                                <input type="text" name="location" class="form-control modern-input"
                                    value="{{ old('location') }}" required>

                                <small class="text-danger">
                                    @error('location')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                            <!-- Event Type -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label ">
                                    Event Type
                                </label>

                                <select name="type" class="form-control modern-input" required>

                                    <option value="" class="text-dark">Select Event Type</option>

                                    <option value="Departmental" class="text-dark"
                                        {{ old('type') == 'Departmental' ? 'selected' : '' }}>
                                        Departmental
                                    </option>

                                    <option value="Meeting" class="text-dark"
                                        {{ old('type') == 'Meeting' ? 'selected' : '' }}>
                                        Meeting
                                    </option>

                                </select>

                                <small class="text-danger">
                                    @error('type')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                            <!-- Description -->
                            <div class="col-12 mb-3">

                                <label class="modern-label">
                                    Description
                                </label>

                                <textarea name="description" rows="5" class="form-control modern-input" required>{{ old('description') }}</textarea>

                                <small class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button type="submit" class="btn-save">

                            <i class="fas fa-save me-2"></i>
                            Save Event

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Edit Event Modal -->
    <div class="modal fade" id="editEventModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <form id="editEventForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- Header -->
                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-edit me-2"></i>
                            Edit Event
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <!-- Body -->
                    <div class="modal-body">

                        <!-- Current Image -->
                        <div class="text-center mb-4">

                            <img id="eventPreview" src="" width="180" height="120" class="rounded shadow"
                                style="object-fit:cover;">

                            <small class="d-block text-muted mt-2">
                                Current Event Image
                            </small>

                        </div>

                        <div class="row">

                            <!-- Image -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Upload New Image
                                </label>

                                <input type="file" name="image" class="form-control modern-input">

                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <!-- Name -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Event Name
                                </label>

                                <input type="text" id="edit_name" name="name" class="form-control modern-input"
                                    required>

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <!-- Type -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Event Type
                                </label>

                                <select id="edit_type" name="type" class="form-control modern-input" required>

                                    <option value="Departmental" class="text-dark">
                                        Departmental
                                    </option>

                                    <option value="Meeting" class="text-dark">
                                        Meeting
                                    </option>

                                </select>

                                @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <!-- Date -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Date
                                </label>

                                <input type="date" id="edit_date" name="date" class="form-control modern-input"
                                    required>

                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <!-- Time -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Time
                                </label>

                                <input type="time" id="edit_time" name="time" class="form-control modern-input"
                                    required>

                                @error('time')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <!-- Location -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Location
                                </label>

                                <input type="text" id="edit_location" name="location"
                                    class="form-control modern-input" required>

                                @error('location')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <!-- Description -->
                            <div class="col-12">

                                <label class="modern-label">
                                    Description
                                </label>

                                <textarea id="edit_description" name="description" rows="5" class="form-control modern-input" required></textarea>

                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            <i class="fas fa-save me-2"></i>
                            Update Event
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    {{-- View modal --}}
    @foreach ($events as $event)
        <div class="modal fade" id="viewEventModal{{ $event->id }}" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-xl modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <!-- Header -->
                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-calendar-alt me-2"></i>
                            Event Details
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <!-- Body -->
                    <div class="modal-body">

                        <div class="row">

                            <!-- Event Image -->
                            <div class="col-lg-5">

                                <img src="{{ asset($event->image) }}" class="event-view-image"
                                    alt="{{ $event->name }}">

                            </div>

                            <!-- Event Information -->
                            <div class="col-lg-7">

                                <h3 class="text-white mb-2">
                                    {{ $event->name }}
                                </h3>

                                <div class="event-info-list">

                                    <div class="event-info-item">
                                        <i class="fas fa-calendar-day"></i>
                                        <span>{{ $event->date }}</span>
                                    </div>

                                    <div class="event-info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>{{ $event->time }}</span>
                                    </div>

                                    <div class="event-info-item">
                                        <i class="fas fa-location-dot"></i>
                                        <span>{{ $event->location }}</span>
                                    </div>

                                </div>

                                <div class="event-description mt-4">

                                    <h6 class="text-info mb-3">
                                        Event Description
                                    </h6>

                                    <p>
                                        {{ $event->description }}
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Close
                        </button>

                        @can('update user')
                            <button type="button" class="btn-save editEventBtn" data-id="{{ $event->id }}"
                                data-name="{{ $event->name }}" data-date="{{ $event->date }}"
                                data-time="{{ $event->time }}" data-location="{{ $event->location }}"
                                data-description="{{ $event->description }}" data-image="{{ asset($event->image) }}"
                                data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventModal">

                                <i class="fas fa-edit me-2"></i>
                                Edit Event

                            </button>
                        @endcan

                    </div>

                </div>

            </div>

        </div>
    @endforeach
    </div>

    <script>
        document.querySelectorAll('.editEventBtn').forEach(button => {

            button.addEventListener('click', function() {

                const id = this.dataset.id;

                document.getElementById('edit_name').value = this.dataset.name;
                document.getElementById('edit_type').value = this.dataset.type;
                document.getElementById('edit_date').value = this.dataset.date;
                document.getElementById('edit_time').value = this.dataset.time;
                document.getElementById('edit_location').value = this.dataset.location;
                document.getElementById('edit_description').value = this.dataset.description;
                document.getElementById('eventPreview').src = this.dataset.image;

                let url = "{{ route('event_update', ':id') }}";
                url = url.replace(':id', id);

                document.getElementById('editEventForm').action = url;

            });

        });
    </script>
@endsection
<style>
    .event-view-image {

        width: 100%;
        height: 340px;

        object-fit: cover;

        border-radius: 14px;

        border: 3px solid rgba(32, 157, 216, .18);

        box-shadow: 0 15px 40px rgba(0, 0, 0, .35);

    }

    .event-info-list {

        display: flex;

        flex-direction: column;

        gap: 16px;

        margin-top: 20px;

    }

    .event-info-item {

        display: flex;

        align-items: center;

        gap: 14px;

        color: #CBD5E1;

        font-size: 15px;

    }

    .event-info-item i {

        width: 22px;

        color: #209DD8;

        font-size: 17px;

    }

    .event-description {

        background: rgba(255, 255, 255, .03);

        border: 1px solid rgba(255, 255, 255, .06);

        border-radius: 12px;

        padding: 20px;

    }

    .event-description p {

        color: #CBD5E1;

        line-height: 1.8;

        margin: 0;

    }

    .event-description h6 {

        font-weight: 600;

        letter-spacing: .3px;

    }
</style>
