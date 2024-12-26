@extends('layout.dashboard')
@include('include.alerts')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4 text-dark">Notifications</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Dashboard</a></li>
            <li class="breadcrumb-item active">Notifications & Feedback</li>
        </ol>

        <!-- Button for Tabs -->
        <div class="d-flex justify-content-center mb-4">
            <button id="notificationsBtn" class="btn btn-primary mx-2">Notifications</button>
            <button id="feedbackBtn" class="btn btn-secondary mx-2">Feedback</button>
        </div>

        <!-- Notifications Management -->
        <div class="tab-content">
            <!-- Notifications Tab -->
            <div id="notificationsTab" class="tab-pane fade show active">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm">
                            <div class="card-header text-dark d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Recent Notifications</h5>
                                <span class="badge bg-danger rounded-pill  p-2">
                                    {{ $notifications->total() }} Total
                                </span>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-bordered align-middle">
                                    <thead class="bg-light">
                                        <tr>
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

           <!-- Feedback Tab -->
<div id="feedbackTab" class="tab-pane fade">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header text-dark d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Feedback</h5>
                    <span class="badge bg-danger rounded-pill  p-2">
                        {{ $feedbacks->total() }} Total</span>
                </div>
                <div class="table-responsive ">
                    <table class="table table-hover table-striped table-bordered align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 45%;">Message</th>
                                <th style="width: 20%;">From</th>
                                <th style="width: 10%;">Status</th>
                                <th style="width: 10%;">Actions</th>
                                <th style="width: 5%;">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($feedbacks as $key => $feedback)
                                <tr>
                                    <td>{{ $feedbacks->firstItem() + $key }}</td>
                                    <td>{{ Str::limit($feedback->message, 50, '...') }}</td>
                                    <td>
                                        <strong>{{ $feedback->name }}</strong><br>
                                        <small class="text-muted">{{ $feedback->email }}</small><br>
                                        <small class="text-muted">{{ $feedback->created_at->format('F d, Y h:i A') }}</small>
                                    </td>
                                    <td class="text-center">
                                        @if(!$feedback->is_read)
                                            <span class="badge bg-danger">Unread</span>
                                        @else
                                            <span class="badge bg-success">Read</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if(!$feedback->is_read)
                                            <form action="{{ route('feedback.read', $feedback) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-outline-success btn-sm">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                        @endif
                                        <form action="{{ route('feedback.delete', $feedback) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#feedbackDetailsModal-{{ $feedback->id }}">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Feedback Details Modal -->
                                <div class="modal fade" id="feedbackDetailsModal-{{ $feedback->id }}" tabindex="-1" aria-labelledby="feedbackDetailsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="feedbackDetailsModalLabel">Feedback Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Message:</strong> {{ $feedback->message }}</p>
                                                <p><strong>From:</strong> {{ $feedback->name }} ({{ $feedback->email }})</p>
                                                <p><strong>Sent At:</strong> {{ $feedback->created_at->format('F d, Y h:i A') }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No feedback found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="card-footer d-flex justify-content-center">
                    {{ $feedbacks->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<script>
    // Tab Toggle Script
    document.getElementById('notificationsBtn').addEventListener('click', function() {
        document.getElementById('notificationsTab').classList.add('show', 'active');
        document.getElementById('feedbackTab').classList.remove('show', 'active');
    });

    document.getElementById('feedbackBtn').addEventListener('click', function() {
        document.getElementById('feedbackTab').classList.add('show', 'active');
        document.getElementById('notificationsTab').classList.remove('show', 'active');
    });
</script>
@endsection
