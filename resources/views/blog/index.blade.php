@extends('layout.dashboard')

@section('main')
    <div class="container py-4">

        <div class="modern-card">

            {{-- Header --}}
            <div class="d-flex justify-content-between align-items-center mb-3">

                <h4 class="mb-0">
                    Video Blog Management
                </h4>

                <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                    data-bs-target="#createVideoModal">

                    <svg height="25" width="25" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>

                    <span>Add</span>

                </button>

            </div>

            {{-- Table --}}
            <div class="table-responsive">

                <table class="modern-table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Video</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($videos as $video)
                            <tr>

                                <td>#{{ $video->id }}</td>

                                <td>
                                    <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="Thumbnail"
                                        style="width:70px;height:45px;object-fit:cover;border-radius:8px;">
                                </td>

                                <td class="fw-medium">
                                    {{ $video->title }}
                                </td>

                                <td>
                                    <span class="badge-modern">
                                        {{ $video->category }}
                                    </span>
                                </td>

                                <td class="text-muted">
                                    {{ Str::limit($video->description, 60) }}
                                </td>

                                <td>
                                    <button type="button" class="btn-modern btn-info-modern" data-bs-toggle="modal"
                                        data-bs-target="#viewVideoModal{{ $video->id }}">
                                        <i class="fa-solid fa-play"></i>
                                        Watch
                                    </button>


                                </td>

                                <td>

                                    <div class="action-group">
                                        <!-- Edit -->
                                        <button type="button" class="btn-modern btn-secondary-modern editVideoBtn"
                                            data-id="{{ $video->id }}" data-title="{{ $video->title }}"
                                            data-category="{{ $video->category }}"
                                            data-description="{{ $video->description }}"
                                            data-thumbnail="{{ asset('storage/' . $video->thumbnail) }}"
                                            data-video="{{ asset('storage/' . $video->video) }}" data-bs-toggle="modal"
                                            data-bs-target="#editVideoModal">

                                            <i class="fa fa-edit"></i>
                                            Edit

                                        </button>

                                        <!-- Delete -->

                                        <form action="{{ route('blog.destroy', $video->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn-modern btn-danger-modern">

                                                <i class="fa fa-trash"></i>

                                                Delete

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7" class="text-center text-muted py-4">

                                    No videos found.

                                </td>

                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    {{-- Create modal --}}
    <div class="modal fade" id="createVideoModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">

                        <i class="fas fa-video me-2"></i>

                        Create Video Blog

                    </h5>

                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                </div>

                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Thumbnail

                                </label>

                                <input type="file" class="form-control modern-input" name="thumbnail" accept="image/*">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Video File

                                </label>

                                <input type="file" class="form-control modern-input" name="video" accept="video/*"
                                    required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Title

                                </label>

                                <input type="text" class="form-control modern-input" name="title" required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Category

                                </label>

                                <input type="text" class="form-control modern-input" name="category" required>

                            </div>

                            <div class="col-12">

                                <label class="modern-label">

                                    Description

                                </label>

                                <textarea name="description" rows="5" class="form-control modern-input" required></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button class="btn-save">

                            Save Video

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    {{-- Update Modal --}}
    <!-- ===========================
                                    Edit Video Modal
                            ============================ -->
    <div class="modal fade" id="editVideoModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <!-- Header -->
                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i>
                        Edit Video Blog
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <!-- Form -->
                <form id="editVideoForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="row">

                            <!-- Current Thumbnail -->
                            <div class="col-md-4 mb-4 text-center">

                                <label class="modern-label d-block mb-2">
                                    Current Thumbnail
                                </label>

                                <img id="edit_thumbnail_preview" src="" class="img-fluid rounded-4 shadow"
                                    style="height:180px;object-fit:cover;">

                            </div>

                            <!-- Current Video -->
                            <div class="col-md-8 mb-4">

                                <label class="modern-label d-block mb-2">
                                    Current Video
                                </label>

                                <video id="edit_video_preview" controls class="w-100 rounded-4 shadow"
                                    style="max-height:180px;">

                                    <source id="edit_video_source">

                                </video>

                            </div>

                            <!-- Upload Thumbnail -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Change Thumbnail
                                </label>

                                <input type="file" name="thumbnail" class="form-control modern-input"
                                    accept="image/*">

                                <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="Thumbnail"
                                    style="width:70px;height:45px;object-fit:cover;border-radius:8px;">

                                <small class="text-muted">
                                    Leave empty to keep the current thumbnail.
                                </small>

                            </div>

                            <!-- Upload Video -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Change Video
                                </label>

                                <input type="file" name="video" class="form-control modern-input" accept="video/*">

                                <small class="text-muted">
                                    Leave empty to keep the current video.
                                </small>

                            </div>

                            <!-- Title -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Video Title
                                </label>

                                <input type="text" id="edit_title" name="title" class="form-control modern-input"
                                    required>

                            </div>

                            <!-- Category -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Category
                                </label>

                                <input type="text" id="edit_category" name="category"
                                    class="form-control modern-input" required>

                            </div>

                            <!-- Description -->
                            <div class="col-12">

                                <label class="modern-label">
                                    Description
                                </label>

                                <textarea id="edit_description" name="description" rows="6" class="form-control modern-input" required></textarea>

                            </div>

                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button type="submit" class="btn-save">

                            <i class="fas fa-save me-2"></i>

                            Update Video

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- =====================================
                    View Video Modal
            ===================================== -->
    @foreach ($videos as $video)
        <div class="modal fade" id="viewVideoModal{{ $video->id }}" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <!-- Header -->
                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-video me-2"></i>
                            Video Details
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <!-- Body -->
                    <div class="modal-body">

                        <div class="row align-items-center">

                            <!-- Medium Video -->
                            <div class="col-md-7 text-center">

                                <video controls class="rounded-4 shadow"
                                    style="width:100%;max-height:260px;object-fit:cover;">

                                    <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">

                                    Your browser does not support the video tag.

                                </video>

                            </div>

                            <!-- Details -->
                            <div class="col-md-5">

                                <div class="mb-3">

                                    <label class="modern-label">
                                        Title
                                    </label>

                                    <div class="modern-view-box">
                                        {{ $video->title }}
                                    </div>

                                </div>

                                <div class="mb-3">

                                    <label class="modern-label">
                                        Category
                                    </label>

                                    <div>

                                        <span class="badge-modern">

                                            {{ $video->category }}

                                        </span>

                                    </div>

                                </div>

                                <div>

                                    <label class="modern-label">
                                        Description
                                    </label>

                                    <div class="modern-view-box">

                                        {{ $video->description }}

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Close

                        </button>

                    </div>

                </div>

            </div>

        </div>
    @endforeach

    <script>
        document.querySelectorAll(".editVideoBtn").forEach(button => {

            button.addEventListener("click", function() {

                document.getElementById("editVideoForm").action =
                    "/blog/" + this.dataset.id;

                document.getElementById("edit_title").value =
                    this.dataset.title;

                document.getElementById("edit_category").value =
                    this.dataset.category;

                document.getElementById("edit_description").value =
                    this.dataset.description;

                // Thumbnail Preview
                const thumbnail = document.getElementById("edit_thumbnail_preview");
                thumbnail.src = this.dataset.thumbnail;

                // Video Preview
                const source = document.getElementById("edit_video_source");
                source.src = this.dataset.video;

                document.getElementById("edit_video_preview").load();

            });

        });
    </script>
    <style>
        /* View Modal Box */
        .modern-view-box {
            background: #111827;
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 12px;
            padding: 14px 16px;
            color: #fff;
            font-size: 15px;
            line-height: 1.7;
        }

        .modern-label {
            color: #9CA3AF;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
            letter-spacing: .3px;
        }
    </style>
@endsection
