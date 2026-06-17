@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')
@section('main')
    <div class="container py-4">

        <h2 class="mt-4">Service Section </h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage homepage Service content </li>
        </ol>

        <div class="modern-card">


             <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h4 class="mb-0">Service Section Management</h4>
                    <small class="text-muted">Manage homepage Service content</small>
                </div>

                <button class="cssbuttons-io-button" data-bs-toggle="modal" data-bs-target="#createServiceModal">

                    <svg height="25" width="25" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>

                    <span>Add Section</span>

                </button>

            </div>


            {{-- Table --}}
            <div class="table-responsive">

                <table class="modern-table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Service Name</th>
                            <th>Link</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($services as $service)
                            <tr>

                                {{-- ID --}}
                                <td>#{{ $service->id }}</td>

                                {{-- Image --}}
                                <td>
                                    <img src="{{ asset($service->image) }}" alt="service"
                                        style="width:50px;height:50px;object-fit:cover;border-radius:8px;">
                                </td>

                                {{-- Name --}}
                                <td class="fw-medium">
                                    {{ $service->link_name ?? 'N/A' }}
                                </td>

                                {{-- Link --}}
                                <td>
                                    <a href="{{ $service->link }}" target="_blank" class="text-info">
                                        {{ $service->link }}
                                    </a>
                                </td>

                                {{-- Description --}}
                                <td class="text-muted">
                                    {{ Str::limit($service->description, 60) }}
                                </td>

                                {{-- Actions --}}
                                <td class="text-center">

                                    <div class="action-group">

                                        @can('update user')
                                            <button type="button" class="btn-modern btn-secondary-modern openServiceEditModal"
                                                data-id="{{ $service->id }}" data-image="{{ asset($service->image) }}"
                                                data-linkname="{{ $service->link_name }}" data-link="{{ $service->link }}"
                                                data-description="{{ $service->description }}" data-bs-toggle="modal"
                                                data-bs-target="#editServiceModal">

                                                <i class="fa fa-edit"></i> Edit

                                            </button>
                                        @endcan

                                        @can('delete user')
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn-modern btn-danger-modern">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        @endcan

                                    </div>

                                </td>

                            </tr>
                        @empty

                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    No services available.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- Create Service Modal -->
    <div class="modal fade" id="createServiceModal" tabindex="-1">

        <div class="modal-dialog  modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-cogs me-2"></i>
                        Create Service
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Service Image
                            </label>

                            <input type="file" name="image" class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Link Name
                            </label>

                            <input type="text" name="link_name" class="form-control modern-input"
                                placeholder="Service Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Link URL
                            </label>

                            <input type="text" name="link" class="form-control modern-input" placeholder="https://">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Description
                            </label>

                            <textarea name="description" rows="4" class="form-control modern-input"></textarea>
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Save Service
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Edit Service Modal -->
    <div class="modal fade" id="editServiceModal" tabindex="-1">

        <div class="modal-dialog  modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i>
                        Edit Service
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <form id="editServiceForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="mb-3 text-center">

                            <img id="servicePreview" src=""
                                style="
                                width:120px;
                                height:120px;
                                object-fit:cover;
                                border-radius:12px;
                                border:1px solid rgba(255,255,255,.1);
                            ">

                        </div>

                        <div class="mb-3">

                            <label class="form-label text-white">
                                Change Image
                            </label>

                            <input type="file" name="image" class="form-control modern-input">

                        </div>

                        <div class="mb-3">

                            <label class="form-label text-white">
                                Link Name
                            </label>

                            <input type="text" id="editLinkName" name="link_name" class="form-control modern-input">

                        </div>

                        <div class="mb-3">

                            <label class="form-label text-white">
                                Link URL
                            </label>

                            <input type="text" id="editLink" name="link" class="form-control modern-input">

                        </div>

                        <div class="mb-3">

                            <label class="form-label text-white">
                                Description
                            </label>

                            <textarea id="editDescription" name="description" rows="4" class="form-control modern-input"></textarea>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Update Service
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.openServiceEditModal')
                .forEach(button => {

                    button.addEventListener('click', function() {

                        const id = this.dataset.id;
                        const image = this.dataset.image;
                        const linkName = this.dataset.linkname;
                        const link = this.dataset.link;
                        const description = this.dataset.description;

                        document.getElementById('servicePreview').src = image;

                        document.getElementById('editLinkName').value = linkName;
                        document.getElementById('editLink').value = link;
                        document.getElementById('editDescription').value = description;

                        document.getElementById('editServiceForm').action =
                            `/services/${id}`;
                    });

                });

        });
    </script>
@endsection
