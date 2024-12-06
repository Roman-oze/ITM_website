
@extends('layout.dashboard')
@include('include.alerts')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4 text-dark">Notifications</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Dashboard</a></li>
            <li class="breadcrumb-item active">Notifications List</li>
        </ol>

        <!-- Notifications Management -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <!-- Card Header -->


                    <!-- Table -->
                    <div class="table-responsive">
                        <div class="card-header text-dark d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Recent Notifications</h5>
                            <span class="badge bg-light text-primary">{{ $notifications->total() }} Total</span>
                        </div>
                        <table class="table table-hover table-striped table-bordered align-middle">
                            <thead >
                                <tr >
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 15%;">Subject</th>
                                    <th style="width: 35%;">Message</th>
                                    <th style="width: 20%;">From</th>
                                    <th style="width: 10%;">Status</th>
                                    <th style="width: 10%;">Actions</th>
                                    <th style="width: 5%;">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($notifications as $key => $notification)
                                    <tr>
                                        <td>{{ $notifications->firstItem() + $key }}</td>
                                        <td>{{ $notification->subject }}</td>
                                        <td>{{ Str::limit($notification->message, 50, '...') }}</td>
                                        <td>
                                            <strong>{{ $notification->name }}</strong><br>
                                            <small class="text-muted">{{ $notification->email }}</small><br>
                                            <small class="text-muted">{{ $notification->created_at->format('F d, Y h:i A') }}</small>
                                        </td>
                                        <td class="text-center">
                                            @if(!$notification->is_read)
                                                <span class="badge bg-danger">Unread</span>
                                            @else
                                                <span class="badge bg-success">Read</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if(!$notification->is_read)
                                                <form action="{{ route('notifications.read', $notification) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </form>
                                            @endif
                                            <form action="{{ route('notifications.delete', $notification) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal-{{ $notification->id }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Details Modal -->
                                    <div class="modal fade" id="detailsModal-{{ $notification->id }}" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary text-white">
                                                    <h5 class="modal-title" id="detailsModalLabel">Notification Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6><strong>Subject:</strong> {{ $notification->subject }}</h6>
                                                    <p><strong>Message:</strong> {{ $notification->message }}</p>
                                                    <p><strong>From:</strong> {{ $notification->name }} ({{ $notification->email }})</p>
                                                    <p><strong>Sent At:</strong> {{ $notification->created_at->format('F d, Y h:i A') }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">No notifications found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="card-footer d-flex justify-content-center">
                        {{ $notifications->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Notification Modal -->
    <div class="modal fade" id="createNotificationModal" tabindex="-1" aria-labelledby="createNotificationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="createNotificationModalLabel">Create New Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('notifications.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Recipient Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Notification</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Table Styling */
.table thead th {
    background-color: #212529;
    font-weight: bold;
    text-align: center;
}
.table tbody td {
    vertical-align: middle;
}
.table-hover tbody tr:hover {
    background-color: #f8f9fa;
}

/* Action Buttons */
.btn-outline-success i,
.btn-outline-danger i {
    margin-right: 4px;
}
/* General Styling */
body {
    background-color: #f8f9fa;
    font-family: 'Roboto', sans-serif;
}

.container {
    max-width: 1200px;
}

/* Card Styling */
.card {
    border-radius: 10px;
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    border-bottom: none;
    border-radius: 10px 10px 0 0;
    padding: 1rem 1.5rem;
    background: #dbdee1;

}

.card-header.bg-gradient-primary {
    background: #34495e;
}

.card-footer {
    background: #f1f1f1;
}

/* Table Styling */
.table {
    margin-bottom: 0;
    border-radius: 10px;
    overflow: hidden;
}

.table th {
    background-color: #34495e;
    color: #ffffff;
    text-align: center;
}

.table td {
    vertical-align: middle;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f2f2f2;
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.1);
}

/* Button Styling */
.btn {
    border-radius: 20px;
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color:#34495e;
    border-color: #0056b3;
}

.btn-primary:hover {
    background-color:#34495e;
}

.btn-outline-danger {
    border-color: #dc3545;
    color: #dc3545;
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    color: #ffffff;
}

.btn-outline-success {
    border-color: #28a745;
    color: #28a745;
}

.btn-outline-success:hover {
    background-color: #28a745;
    color: #ffffff;
}

.btn-outline-info {
    border-color: #17a2b8;
    color: #17a2b8;
}

.btn-outline-info:hover {
    background-color:#34495e;
    color: #ffffff;
}

/* Badge Styling */
.badge {
    font-size: 0.8rem;
    padding: 0.4em 0.6em;
    border-radius: 15px;
}

.badge.bg-danger {
    background-color: #dc3545;
    color: #ffffff;
}

.badge.bg-success {
    background-color: #28a745;
    color: #ffffff;
}

/* Modal Styling */
.modal-header {
    border-bottom: none;
}

.modal-header.bg-primary {
    background-color: #34495e;
    color: #ffffff;
}

.modal-content {
    border-radius: 15px;
}

.modal-footer {
    border-top: none;
}

/* Pagination */
.pagination {
    justify-content: center;
}

.page-item.active .page-link {
    background-color:#34495e;
    border-color: #007bff;
    color: #ffffff;
}

.page-link {
    color: #007bff;
}

.page-link:hover {
    background-color: rgba(0, 123, 255, 0.1);
    color: #0056b3;
}

/* Custom Styles for Mark All as Read */
#markAllRead {
    border: none;
    background: none;
    color: #ffffff;
    cursor: pointer;
    transition: color 0.3s ease;
}

#markAllRead:hover {
    color: #ffc107;
}

/* Empty State Styling */
.table td.text-muted {
    font-size: 1rem;
    color: #6c757d;
}

/* Breadcrumb Styling */
.breadcrumb {
    background-color: #f8f9fa;
    padding: 0.75rem 1rem;
    border-radius: 5px;
}

.breadcrumb-item a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .btn {
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
    }

    .table th, .table td {
        font-size: 0.85rem;
    }

    .modal-dialog {
        margin: 1rem auto;
    }

    .breadcrumb {
        font-size: 0.85rem;
    }
}


</style>
<script>

</script>
@endsection
