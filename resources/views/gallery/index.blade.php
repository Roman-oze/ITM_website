@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')

@section('main')
    <main>

        <div class="container-fluid px-4 mt-5">


            <!-- BREADCRUMB -->
            <ol class="breadcrumb modern-breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active text-white">Gallery</li>
            </ol>



            <div class="d-flex justify-content-between align-items-right ">

                <h1 class="breadcrumb-item active text-white">Gallery</h1>


                <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                    data-bs-target="#createGalleryModal">

                    <svg height="25" width="25" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>

                    <span>Add</span>
                </button>
            </div>

            <div class="row">

                <!-- Display Photos Section -->
                <div class="col-12 mt-5">
                    <div class="row d-flex justify-content-center">
                        @foreach ($photos as $photo)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card shadow-sm">
                                    <div class="gallery-image-box">
                                        <img src="{{ asset($photo->image) }}" alt="Photo">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $photo->title }}</h5>

                                        <!-- Actions Dropdown -->
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button"
                                                id="actionMenu{{ $photo->id }}" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="actionMenu{{ $photo->id }}">
                                                <!-- Edit Action -->
                                                @can('update user')
                                                    <li>
                                                        {{-- <a class="dropdown-item" href="{{route('gallery.edit',$photo->id)}}">
                                                    <i class="fa-solid fa-user-pen"></i> Edit
                                                </a> --}}
                                                        <button class="dropdown-item openGalleryEditModal"
                                                            data-id="{{ $photo->id }}" data-title="{{ $photo->title }}"
                                                            data-type="{{ $photo->type }}"
                                                            data-image="{{ asset($photo->image) }}" data-bs-toggle="modal"
                                                            data-bs-target="#editGalleryModal">

                                                            <i class="fa-solid fa-user-pen"></i> Edit
                                                        </button>
                                                    </li>
                                                @endcan

                                                <!-- Delete Action -->
                                                @can('delete user')
                                                    <li>
                                                        <form action="{{ route('gallery.delete', $photo->id) }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                                class="dropdown-item text-danger">
                                                                <i class="fa fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                @endcan
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
                                    <option value="Club">Club</option>
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

    </main>

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
    height: 200px;        /* SAME HEIGHT FOR ALL */
    overflow: hidden;
    border-radius: 12px;
    background: #0B1220;
}

.gallery-image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;    /* KEY FOR SAME LOOK */
    transition: transform 0.3s ease;
}

/* hover zoom effect */
.gallery-image-box:hover img {
    transform: scale(1.05);
}
</style>