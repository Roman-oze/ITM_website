{{-- @extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-4">

        <h1 class="mt-4">Notifications</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact Messages</li>
        </ol>

        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Notifications</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-light text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>From</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($notifications as $key => $notification)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $notification->subject }}</td>
                                        <td>{{ $notification->message }}</td>
                                        <td>
                                            {{ $notification->name }}<br>
                                            <small class="text-muted">{{ $notification->email }}</small>
                                        </td>
                                        <td>
                                            @if(!$notification->is_read)
                                                <span class="badge bg-primary">Unread</span>
                                            @else
                                                <span class="badge bg-secondary">Read</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if(!$notification->is_read)
                                                <form action="{{ route('notifications.read', $notification) }}" method="POST" class="d-inline me-2">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-outline-primary btn-sm">Mark as Read</button>
                                                </form>
                                            @endif
                                            @can('delete')
                                                <form action="{{ route('notifications.delete', $notification) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No notifications found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
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

    .table {
        margin: 0;
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
    function loadMoreNotifications() {
        alert('Load more notifications functionality to be implemented.');
    }
</script>
@endsection --}}
@extends('layout.dashboard')
@include('include.alerts')
@section('main')
<main>
    <div class="container mt-4">

        <h1 class="mt-4">Notifications</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact Messages</li>
        </ol>

        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Notifications</h5>
                    </div>
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="bg-light text-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>From</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($notifications as $key => $notification)
                                        <tr>
                                            <td>{{ $notifications->firstItem() + $key }}</td>
                                            <td>{{ $notification->subject }}</td>
                                            <td>{{ $notification->message }}</td>
                                            <td>
                                                {{ $notification->name }}<br>
                                                <small class="text-muted">{{ $notification->email }}</small><br>
                                                <small class="text-muted">
                                                    {{ $notification->created_at->format('F d, Y h:i A') }}
                                                </small> <!-- Moved Time Here -->
                                            </td>
                                            <td>
                                                @if(!$notification->is_read)
                                                    <span class="badge bg-primary">Unread</span>
                                                @else
                                                    <span class="badge bg-secondary">Read</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if(!$notification->is_read)
                                                    <form action="{{ route('notifications.read', $notification) }}" method="POST" class="d-inline me-2">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-outline-primary btn-sm">Mark as Read</button>
                                                    </form>
                                                @endif
                                                @can('delete user')
                                                    <form action="{{ route('notifications.delete', $notification) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i> <!-- Delete Icon -->
                                                        </button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No notifications found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                        {{ $notifications->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
