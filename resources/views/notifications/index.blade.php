<!-- resources/views/notifications/index.blade.php -->
@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-4">

        <h1 class="mt-4">Notifications</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">contact Message </li>
        </ol>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Notifications</h5>
                        {{-- <div>
                            <label for="filter" class="me-2">Filter:</label>
                            <select id="filter" class="form-select form-select-sm" onchange="filterNotifications()">
                                <option value="all">All</option>
                                <option value="unread">Unread</option>
                                <option value="read">Read</option>
                            </select>
                        </div> --}}
                    </div>
                    <ul class="list-group list-group-flush" id="notification-list">
                        @foreach ($notifications as $notification)
                            <li class="list-group-item d-flex justify-content-between align-items-center text-center {{ $notification->is_read ? 'text-muted' : 'font-weight-bold' }}">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-bell-fill me-3" style="font-size: 1.5rem; color: {{ $notification->is_read ? '#6c757d' : '#007bff' }};"></i>
                                    <div>
                                        <h6 class="mb-1">{{ $notification->subject }}
                                            @if(!$notification->is_read)
                                                <span class="badge bg-primary ms-2">New</span>
                                            @endif
                                        </h6>
                                        <p class="mb-1">{{ $notification->message }}</p>
                                        <small class="text-muted">From: {{ $notification->name }} ({{ $notification->email }})</small>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    @if(!$notification->is_read)
                                        <form action="{{ route('notifications.read', $notification) }}" method="POST" class="d-inline me-2">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-outline-primary btn-sm">Mark as Read</button>
                                        </form>
                                    @endif
                                    <form action="{{ route('notifications.delete', $notification) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="card-footer text-center">
                        <button class="btn btn-secondary btn-sm" id="load-more" onclick="loadMoreNotifications()">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('styles')
<style>
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .list-group-item {
        transition: background-color 0.3s;
        border-radius: 8px;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
    }

    .badge {
        font-size: 0.8rem;
    }

    .card-header {
        background-color: #f1f1f1;
        border-bottom: 1px solid #ddd;
        border-radius: 10px 10px 0 0;
    }
</style>
@endsection

@section('scripts')
<script>
    function filterNotifications() {
        const filter = document.getElementById('filter').value;
        const items = document.querySelectorAll('#notification-list .list-group-item');

        items.forEach(item => {
            if (filter === 'all') {
                item.style.display = '';
            } else if (filter === 'unread' && !item.classList.contains('text-muted')) {
                item.style.display = '';
            } else if (filter === 'read' && item.classList.contains('text-muted')) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function loadMoreNotifications() {
        alert('Load more notifications functionality to be implemented.');
    }
</script>
@endsection
