@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')

@section('main')

    <div class="container-fluid">
        <h2 class="mt-4">Gallery</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Gallery Section </li>
        </ol>


        <div class="container py-4">

            <div class="modern-card">

                <div class="d-flex justify-content-between align-items-center mb-3">

                     <div>
                    <h4 class="mb-0">Gallery Section Management</h4>
                    <small class="text-muted">Manage homepage hero content</small>
                </div>

                    <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                        data-bs-target="#createGalleryModal">

                        <svg height="25" width="25" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                        </svg>

                        <span>Add</span>

                    </button>

                </div>

                <div class="table-responsive">

                    <table class="modern-table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($photos as $photo)
                                <tr>

                                    <td>#{{ $photo->id }}</td>

                                    <td>
                                        <img src="{{ asset($photo->image) }}"
                                            style="width:60px;height:60px;object-fit:cover;border-radius:10px;">
                                    </td>

                                    <td class="fw-medium">
                                        {{ $photo->title }}
                                    </td>

                                    <td>
                                        <span class="badge-modern">
                                            {{ $photo->type }}
                                        </span>
                                    </td>

                                    <td class="text-center">

                                        <div class="action-group">

                                            @can('update user')
                                                <button type="button"
                                                    class="btn-modern btn-secondary-modern openGalleryEditModal"
                                                    data-id="{{ $photo->id }}" data-title="{{ $photo->title }}"
                                                    data-type="{{ $photo->type }}" data-image="{{ asset($photo->image) }}"
                                                    data-bs-toggle="modal" data-bs-target="#editGalleryModal">

                                                    <i class="fa fa-edit"></i>
                                                    Edit

                                                </button>
                                            @endcan

                                            @can('delete user')
                                                <form action="{{ route('gallery.delete', $photo->id) }}" method="POST"
                                                    class="d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn-modern btn-danger-modern"
                                                        onclick="return confirm('Are you sure?')">

                                                        <i class="fas fa-trash"></i>
                                                        Delete

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

        {{-- Gallery create modal --}}
        <div class="modal fade" id="createGalleryModal" tabindex="-1">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">
                        <h5 class="modal-title text-white">
                            <i class="fas fa-image me-2"></i> Add Photo
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="modern-label">Upload Image</label>
                                <input type="file" name="image" class="form-control modern-input" required>
                            </div>

                            <div class="mb-3">
                                <label class="modern-label">Title</label>
                                <input type="text" name="title" class="form-control modern-input" required>
                            </div>

                            <div class="mb-3">
                                <label class="modern-label">Event Type</label>
                                <select name="type" class="form-control modern-input" required>
                                    <option value="">Select</option>
                                    <option value="Departmental">Departmental</option>
                                    <option value="Meeting">Meeting</option>
                                </select>
                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="submit" class="btn-save">
                                Save Photo
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        {{-- Gallery Update  modal --}}
        <div class="modal fade" id="editGalleryModal" tabindex="-1">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">
                        <h5 class="modal-title text-white">
                            <i class="fas fa-edit me-2"></i> Edit Photo
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <form id="editGalleryForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="mb-3">
                                <img id="previewImage" class="img-fluid rounded mb-2" style="max-height: 180px;">
                            </div>

                            <div class="mb-3">
                                <label class="modern-label">Upload New Image</label>
                                <input type="file" name="image" class="form-control modern-input">
                            </div>

                            <div class="mb-3">
                                <label class="modern-label">Title</label>
                                <input type="text" name="title" id="editTitle" class="form-control modern-input">
                            </div>

                            <div class="mb-3">
                                <label class="modern-label">Event Type</label>
                                <select name="type" id="editType" class="form-control modern-input">
                                    <option value="Departmental">Departmental</option>
                                    <option value="Club">Club</option>
                                </select>
                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="submit" class="btn-save">
                                Update Photo
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const editButtons = document.querySelectorAll('.openGalleryEditModal');

                editButtons.forEach(btn => {

                    btn.addEventListener('click', function() {

                        let id = this.dataset.id;
                        let title = this.dataset.title;
                        let type = this.dataset.type;
                        let image = this.dataset.image;

                        document.getElementById('editTitle').value = title;
                        document.getElementById('editType').value = type;
                        document.getElementById('previewImage').src = image;

                        document.getElementById('editGalleryForm').action =
                            `/gallery/${id}`;

                    });

                });

            });
        </script>
    @endsection


    <style>
        /* =========================
   FIXED GALLERY IMAGE SIZE
========================= */

        .gallery-image-box {
            width: 100%;
            height: 200px;
            /* SAME HEIGHT FOR ALL */
            overflow: hidden;
            border-radius: 12px;
            background: #0B1220;
        }

        .gallery-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* KEY FOR SAME LOOK */
            transition: transform 0.3s ease;
        }

        /* hover zoom effect */
        .gallery-image-box:hover img {
            transform: scale(1.05);
        }

        /* =========================
   MODERN TABLE (DARK ADMIN)
========================= */

        .modern-table {
            width: 100%;
            color: #CBD5E1;
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .modern-table thead th {
            color: #94A3B8;
            font-size: 13px;
            font-weight: 600;
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .modern-table tbody tr {
            background: #0B1220;
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: 0.3s;
        }

        .modern-table tbody tr:hover {
            transform: translateY(-2px);
            background: rgba(32, 157, 216, 0.06);
        }

        .modern-table td {
            padding: 12px;
            vertical-align: middle;
            border: none;
        }
    </style>
