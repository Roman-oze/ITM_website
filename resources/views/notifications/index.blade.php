@extends('layout.dashboard')
@include('include.alerts')

@section('main')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">Notifications & Feedback</h4>
            </div>

            <!-- Button for Tabs -->
            <div class="d-flex justify-content-center gap-3 mb-4">

                <button id="notificationsBtn" class="btn-modern btn-info-modern">
                    <i class="fas fa-bell"></i>
                    Notifications
                    <span class="badge-modern">
                        {{ $notifications->total() }}
                    </span>
                </button>

                <button id="feedbackBtn" class="btn-modern btn-secondary-modern">
                    <i class="fas fa-comment-dots"></i>
                    Feedback
                    <span class="badge-modern">
                        {{ $feedbacks->total() }}
                    </span>
                </button>

            </div>

            <!-- Notifications Management -->
            <div class="tab-content">
                <!-- Notifications Tab -->
                <div id="notificationsTab" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modern-card">

                                <div class="d-flex justify-content-between align-items-center mb-3">

                                    <h4 class="mb-0">
                                        Recent Notifications
                                    </h4>

                                    <span class="badge-modern">
                                        {{ $notifications->total() }} Total
                                    </span>

                                </div>

                                <div class="table-responsive">

                                    <table class="modern-table">
                                        <div class="table-responsive">
                                            <table class="modern-table">
                                                <thead>
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
                                                                <small
                                                                    class="text-muted">{{ $notification->email }}</small><br>
                                                                <small
                                                                    class="text-muted">{{ $notification->created_at->format('F d, Y h:i A') }}</small>
                                                            </td>
                                                            <td class="text-center">
                                                                @if (!$notification->is_read)
                                                                    <span class="badge-modern bg-danger-subtle text-danger">
                                                                        Unread
                                                                    </span>
                                                                @else
                                                                    <span class="badge-modern">
                                                                        Read
                                                                    </span>
                                                                @endif


                                                            </td>
                                                            <td class="text-center">
                                                                @if (!$notification->is_read)
                                                                    <form
                                                                        action="{{ route('notifications.read', $notification) }}"
                                                                        method="POST" class="d-inline">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <button type="submit"
                                                                            class="btn btn-outline-success btn-sm">
                                                                            <i class="fas fa-check"></i>
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                                <form
                                                                    action="{{ route('notifications.delete', $notification) }}"
                                                                    method="POST" class="d-inline"
                                                                    onsubmit="return confirm('Are you sure you want to delete this notification?');">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                            <button type="submit"
                                                                                class="btn-modern btn-danger-modern">
                                                                                <i class="fas fa-trash"></i>
                                                                                Delete
                                                                            </button>

                                                                </form>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn-modern btn-info-modern"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#detailsModal-{{ $notification->id }}">

                                                                    <i class="fas fa-eye"></i>
                                                                    View

                                                                </button>
                                                            </td>
                                                        </tr>

                                                        <!-- Notification Details Modal -->
                                                        <div class="modal fade" id="detailsModal-{{ $notification->id }}"
                                                            tabindex="-1" aria-hidden="true">

                                                            <div class="modal-dialog modal-lg modal-dialog-centered">

                                                                <div class="modal-content modern-modal">

                                                                    <!-- Header -->
                                                                    <div class="modal-header modern-modal-header">

                                                                        <h5 class="modal-title">
                                                                            <i class="fas fa-bell me-2"></i>
                                                                            Notification Details
                                                                        </h5>

                                                                        <button type="button"
                                                                            class="btn-close btn-close-white"
                                                                            data-bs-dismiss="modal">
                                                                        </button>

                                                                    </div>

                                                                    <!-- Body -->
                                                                    <div class="modal-body">

                                                                        <!-- Subject -->
                                                                        <div class="mb-4">

                                                                            <h4 class="text-white mb-2">

                                                                                {{ $notification->subject }}

                                                                            </h4>

                                                                            <div class="notification-meta">

                                                                                <div class="notification-item">
                                                                                    <i class="fas fa-user"></i>
                                                                                    <span>{{ $notification->name }}</span>
                                                                                </div>

                                                                                <div class="notification-item">
                                                                                    <i class="fas fa-envelope"></i>
                                                                                    <span>{{ $notification->email }}</span>
                                                                                </div>

                                                                                <div class="notification-item">
                                                                                    <i class="fas fa-calendar-alt"></i>
                                                                                    <span>{{ $notification->created_at->format('F d, Y') }}</span>
                                                                                </div>

                                                                                <div class="notification-item">
                                                                                    <i class="fas fa-clock"></i>
                                                                                    <span>{{ $notification->created_at->format('h:i A') }}</span>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Message -->
                                                                        <div class="notification-message-card">

                                                                            <h6 class="text-info mb-3">

                                                                                <i class="fas fa-comment-alt me-2"></i>

                                                                                Message

                                                                            </h6>

                                                                            <p class="mb-0">

                                                                                {{ $notification->message }}

                                                                            </p>

                                                                        </div>

                                                                    </div>

                                                                    <!-- Footer -->
                                                                    <div class="modal-footer modern-modal-footer">

                                                                        <button type="button" class="btn-cancel"
                                                                            data-bs-dismiss="modal">

                                                                            Close

                                                                        </button>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    @empty
                                                        <tr>
                                                            <td colspan="7" class="text-center text-muted">No
                                                                notifications
                                                                found.</td>
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

                                <div class="modern-card">

                                    <div class="d-flex justify-content-between align-items-center mb-3">

                                        <h4 class="mb-0">
                                            Recent Feedback
                                        </h4>

                                        <span class="badge-modern">
                                            {{ $feedbacks->total() }} Total
                                        </span>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="modern-table">
                                            <div class="table-responsive ">
                                                <table class="modern-table">
                                                    <thead>
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
                                                                    <small
                                                                        class="text-muted">{{ $feedback->email }}</small><br>
                                                                    <small
                                                                        class="text-muted">{{ $feedback->created_at->format('F d, Y h:i A') }}</small>
                                                                </td>
                                                                <td class="text-center">
                                                                    @if (!$notification->is_read)
                                                                        <span class="badge-modern bg-danger-subtle">
                                                                            Unread
                                                                        </span>
                                                                    @else
                                                                        <span class="badge-modern">
                                                                            Read
                                                                        </span>
                                                                    @endif
                                                                </td>
                                                                <td class="text-center">

                                                                    <div class="action-group">

                                                                        @if (!$notification->is_read)
                                                                            <form
                                                                                action="{{ route('notifications.read', $notification) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('PATCH')

                                                                                <button type="submit"
                                                                                    class="btn-modern btn-info-modern">
                                                                                    <i class="fas fa-check"></i>
                                                                                    Read
                                                                                </button>

                                                                            </form>
                                                                        @endif

                                                                        <form
                                                                            action="{{ route('notifications.delete', $notification) }}"
                                                                            method="POST"
                                                                            onsubmit="return confirm('Delete this notification?')">

                                                                            @csrf
                                                                            @method('DELETE')

                                                                            <button type="submit"
                                                                                class="btn-modern btn-danger-modern">
                                                                                <i class="fas fa-trash"></i>
                                                                                Delete
                                                                            </button>

                                                                        </form>

                                                                    </div>

                                                                </td>
                                                                <td class="text-center">
                                                                    <button class="btn-modern btn-info-modern"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#feedbackDetailsModal-{{ $feedback->id }}">
                                                                        <i class="fas fa-eye"></i>
                                                                        View
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <!-- Feedback Details Modal -->
                                                            <div class="modal fade"
                                                                id="feedbackDetailsModal-{{ $feedback->id }}"
                                                                tabindex="-1" aria-hidden="true">

                                                                <div class="modal-dialog modal-lg modal-dialog-centered">

                                                                    <div class="modal-content modern-modal">

                                                                        <!-- Header -->
                                                                        <div class="modal-header modern-modal-header">

                                                                            <h5 class="modal-title">
                                                                                <i class="fas fa-comment-dots me-2"></i>
                                                                                Feedback Details
                                                                            </h5>

                                                                            <button type="button"
                                                                                class="btn-close btn-close-white"
                                                                                data-bs-dismiss="modal">
                                                                            </button>

                                                                        </div>

                                                                        <!-- Body -->
                                                                        <div class="modal-body">

                                                                            <div class="mb-4">

                                                                                <h4 class="text-white mb-2">
                                                                                    {{ $feedback->name }}
                                                                                </h4>

                                                                                <div class="feedback-meta">

                                                                                    <div class="feedback-item">
                                                                                        <i class="fas fa-envelope"></i>
                                                                                        <span>{{ $feedback->email }}</span>
                                                                                    </div>

                                                                                    <div class="feedback-item">
                                                                                        <i class="fas fa-calendar-alt"></i>
                                                                                        <span>{{ $feedback->created_at->format('F d, Y') }}</span>
                                                                                    </div>

                                                                                    <div class="feedback-item">
                                                                                        <i class="fas fa-clock"></i>
                                                                                        <span>{{ $feedback->created_at->format('h:i A') }}</span>
                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                            <div class="feedback-message-card">

                                                                                <h6 class="text-info mb-3">
                                                                                    <i class="fas fa-message me-2"></i>
                                                                                    Message
                                                                                </h6>

                                                                                <p class="mb-0">
                                                                                    {{ $feedback->message }}
                                                                                </p>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Footer -->
                                                                        <div class="modal-footer modern-modal-footer">

                                                                            <button type="button" class="btn-cancel"
                                                                                data-bs-dismiss="modal">

                                                                                Close

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        @empty
                                                            <tr>
                                                                <td colspan="6" class="text-center text-muted">No
                                                                    feedback
                                                                    found.
                                                                </td>
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
