@extends('layout.dashboard')

@section('main')
    <main>

        <div class="container py-4">

            @include('include.alerts')

            <div class="modern-card">

                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h4 class="mb-0">Notice Management</h4>

                    @can('manage-user')
                        <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                            data-bs-target="#createNoticeModal">

                            <svg height="25" width="25" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                            </svg>

                            <span>Add</span>

                        </button>
                    @endcan

                </div>

                {{-- Table --}}
                <div class="table-responsive">

                    <table class="modern-table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Notice</th>

                                @can('manage-user')
                                    <th class="text-center">Actions</th>
                                @endcan
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($notices as $notice)
                                <tr>

                                    <td>#{{ $notice->id }}</td>

                                    <td class="fw-medium">
                                        {{ $notice->title }}
                                    </td>

                                    <td class="text-muted">
                                        {{ $notice->created_at->format('d M Y') }}
                                        <br>
                                        <small>{{ $notice->created_at->format('h:i A') }}</small>
                                    </td>

                                    <td class="text-muted">
                                        {{ Str::limit(strip_tags($notice->content), 80) }}
                                    </td>

                                    @can('manage-user')
                                        <td class="text-center">

                                            <div class="action-group">

                                                <button type="button" class="btn-modern btn-info-modern" data-bs-toggle="modal"
                                                    data-bs-target="#viewNoticeModal{{ $notice->id }}">

                                                    <i class="fas fa-eye"></i>
                                                    View

                                                </button>

                                                @can('update user')
                                                    <button type="button" class="btn-modern btn-secondary-modern editNoticeBtn"
                                                        data-id="{{ $notice->id }}" data-title="{{ $notice->title }}"
                                                        data-content="{{ $notice->content }}" data-bs-toggle="modal"
                                                        data-bs-target="#editNoticeModal">

                                                        <i class="fa fa-edit"></i>
                                                        Edit

                                                    </button>
                                                @endcan

                                                @can('delete user')
                                                    <form action="{{ route('notice.delete', $notice->id) }}" method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this notice?')">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn-modern btn-danger-modern">
                                                            <i class="fa fa-trash"></i>
                                                            Delete
                                                        </button>

                                                    </form>
                                                @endcan

                                            </div>

                                        </td>
                                    @endcan

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">
                                        No notices found.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        {{-- create modal --}}
        <div class="modal fade" id="createNoticeModal" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-plus-circle me-2"></i>
                            Create Notice
                        </h5>

                        <button class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <form action="{{ route('notice.store') }}" method="POST">

                        @csrf

                        <div class="modal-body">

                            <div class="mb-3">

                                <label class="modern-label">
                                    Title
                                </label>

                                <input type="text" name="title" class="form-control modern-input"
                                    placeholder="Notice title" required>

                            </div>

                            <div class="mb-3">

                                <label class="modern-label">
                                    Content
                                </label>

                                <textarea name="content" rows="6" class="form-control modern-input" placeholder="Write notice content..."
                                    required></textarea>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button type="submit" class="btn-save">

                                Save Notice

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        {{-- Update modal --}}
        <div class="modal fade" id="editNoticeModal" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-edit me-2"></i>
                            Edit Notice
                        </h5>

                        <button class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <form id="editNoticeForm" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="mb-3">

                                <label class="modern-label">
                                    Title
                                </label>

                                <input type="text" id="edit_title" name="title" class="form-control modern-input">

                            </div>

                            <div class="mb-3">

                                <label class="modern-label">
                                    Content
                                </label>

                                <textarea id="edit_content" name="content" rows="6" class="form-control modern-input"></textarea>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button class="btn-save">

                                Update Notice

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        {{-- view modal --}}
        @foreach ($notices as $notice)
            <div class="modal fade" id="viewNoticeModal{{ $notice->id }}" tabindex="-1">

                <div class="modal-dialog modal-lg modal-dialog-centered">

                    <div class="modal-content modern-modal">

                        <!-- Header -->
                        <div class="modal-header modern-modal-header">

                            <h5 class="modal-title">
                                <i class="fas fa-bullhorn me-2"></i>
                                Notice Details
                            </h5>

                            <button class="btn-close btn-close-white" data-bs-dismiss="modal">
                            </button>

                        </div>

                        <!-- Body -->
                        <div class="modal-body">

                            <!-- Notice Title -->
                            <div class="mb-4">

                                <h3 class="text-white fw-bold">
                                    {{ $notice->title }}
                                </h3>

                                <small class="text-muted">

                                    <i class="far fa-calendar-alt me-2"></i>

                                    {{ $notice->created_at->format('d M Y') }}

                                    &nbsp;&nbsp;

                                    <i class="far fa-clock me-2"></i>

                                    {{ $notice->created_at->format('h:i A') }}

                                </small>

                            </div>

                            <!-- Notice Content -->
                            <div class="notice-content-card">

                                {!! nl2br(e($notice->content)) !!}

                            </div>

                        </div>

                        <!-- Footer -->
                        <div class="modal-footer modern-modal-footer">

                            <button class="btn-cancel" data-bs-dismiss="modal">

                                Close

                            </button>

                            @can('update user')
                                <button class="btn-save editNoticeBtn" data-id="{{ $notice->id }}"
                                    data-title="{{ $notice->title }}" data-content="{{ $notice->content }}"
                                    data-bs-toggle="modal" data-bs-target="#editNoticeModal">

                                    <i class="fa fa-edit me-1"></i>

                                    Edit

                                </button>
                            @endcan

                        </div>

                    </div>

                </div>

            </div>
        @endforeach


    </main>
    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '{{ url('/pdf_generate') }}', true); // Correct usage with quotes
            xhr.responseType = 'blob'; // Important for PDF download
            xhr.onload = function() {
                if (this.status === 200) {
                    var blob = new Blob([this.response], {
                        type: 'application/pdf'
                    });
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = 'itm.pdf';
                    link.click();
                }
            };
            xhr.send();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.editNoticeBtn').forEach(button => {

                button.addEventListener('click', function() {

                    document.getElementById('edit_title').value =
                        this.dataset.title;

                    document.getElementById('edit_content').value =
                        this.dataset.content;

                    document.getElementById('editNoticeForm').action =
                        `/notice/update/${this.dataset.id}`;

                });

            });

        });
    </script>
@endsection
