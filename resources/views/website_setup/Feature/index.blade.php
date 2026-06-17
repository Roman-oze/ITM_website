@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')

@section('main')
    <div class="container py-4">

        <h2 class="mt-4">Features Section </h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage homepage Features content </li>
        </ol>

        <div class="modern-card">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                <div>
                    <h4 class="mb-0">Features Management</h4>
                    <small class="text-muted">Manage all website features</small>
                </div>

                <button type="button" class="cssbuttons-io-button" data-bs-toggle="modal"
                    data-bs-target="#createFeatureModal">

                    <svg height="25" width="25" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>

                    <span>Add Feature</span>

                </button>
            </div>

            <!-- Table -->
            <div class="table-responsive">

                <table class="modern-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($features as $feature)
                            <tr>

                                <td>#{{ $feature->id }}</td>

                                <!-- Image -->
                                <td>
                                    <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}"
                                        style="width:50px;height:50px;object-fit:cover;border-radius:8px;">
                                </td>

                                <!-- Title -->
                                <td class="fw-medium">
                                    {{ $feature->title }}
                                </td>

                                <!-- Description -->
                                <td class="text-muted">
                                    {{ \Illuminate\Support\Str::limit($feature->description, 60) }}
                                </td>

                                <!-- Actions -->
                                <td class="text-center">

                                    <div class="action-group">

                                        <button class="btn-modern btn-secondary-modern openFeatureEditModal"
                                            data-id="{{ $feature->id }}" data-title="{{ $feature->title }}"
                                            data-description="{{ $feature->description }}"
                                            data-image="{{ asset($feature->image) }}" data-bs-toggle="modal"
                                            data-bs-target="#editFeatureModal">

                                            <i class="fa fa-edit"></i> Edit

                                        </button>

                                        <form action="{{ route('feature.delete', $feature->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn-modern btn-danger-modern"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    No features available. Please add some features.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- Create Feature Modal -->
    <div class="modal fade" id="createFeatureModal" tabindex="-1">

        <div class="modal-dialog  modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-plus-circle me-2"></i>
                        Create Feature
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                </div>

                <form action="{{ route('feature.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Title</label>

                            <input type="text" name="title" class="form-control modern-input" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>

                            <textarea name="description" rows="4" class="form-control modern-input" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>

                            <input type="file" name="image" class="form-control modern-input" accept="image/*"
                                required>
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Save Feature
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Edit Feature Modal -->
    <div class="modal fade" id="editFeatureModal" tabindex="-1">

        <div class="modal-dialog  modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i>
                        Edit Feature
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                </div>

                <form id="editFeatureForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="text-center mb-3">

                            <img id="featurePreviewImage" src="" class="img-fluid rounded shadow"
                                style="max-height:150px">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Title
                            </label>

                            <input type="text" id="editFeatureTitle" name="title"
                                class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Description
                            </label>

                            <textarea id="editFeatureDescription" name="description" rows="4" class="form-control modern-input"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                New Image
                            </label>

                            <input type="file" name="image" class="form-control modern-input" accept="image/*">
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Update Feature
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const editButtons = document.querySelectorAll('.openFeatureEditModal');

            editButtons.forEach(button => {

                button.addEventListener('click', function() {

                    let id = this.dataset.id;
                    let title = this.dataset.title;
                    let description = this.dataset.description;
                    let image = this.dataset.image;

                    document.getElementById('editFeatureTitle').value = title;
                    document.getElementById('editFeatureDescription').value = description;
                    document.getElementById('featurePreviewImage').src = image;

                    document.getElementById('editFeatureForm').action =
                        `/feature/${id}`;

                });

            });

        });
    </script>
@endsection
