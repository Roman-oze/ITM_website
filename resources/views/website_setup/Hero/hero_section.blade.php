@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')
@section('main')
    <div class="container py-4">
        <h2 class="mt-4">Hero Section </h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage homepage hero content </li>
        </ol>
        <div class="modern-card">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h4 class="mb-0">Hero Section Management</h4>
                    <small class="text-muted">Manage homepage hero content</small>
                </div>



                @if ($herosections->count() == 0)
                    <button class="cssbuttons-io-button" data-bs-toggle="modal" data-bs-target="#createHeroModal">

                        <svg height="25" width="25" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                        </svg>

                        <span>Add Section</span>

                    </button>
                @else
                    <button class="cssbuttons-io-button" disabled title="Only one Hero Section is allowed"
                        style="opacity: .6; cursor: not-allowed;">

                        <svg height="25" width="25" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                        </svg>

                        <span>Add Section</span>

                    </button>
                @endif

            </div>

            <!-- Content List (Modern Row Cards) -->
            <div class="hero-list">

                @foreach ($herosections as $hero)
                    <div class="hero-item">

                        <!-- Image -->
                        <div class="hero-image">
                            <img src="{{ asset($hero->image) }}" alt="Hero Image">
                        </div>

                        <!-- Content -->
                        <div class="hero-content">

                            <h5 class="hero-title">{{ $hero->title }}</h5>

                            <p class="hero-desc text-muted">
                                {{ $hero->description }}
                            </p>

                            @if ($hero->link)
                                <a href="{{ $hero->link }}" target="_blank" class="hero-link">
                                    Learn More →
                                </a>
                            @endif

                            <!-- Actions -->
                            <div class="action-group mt-3">

                                @can('update user')
                                    <button class="btn-modern btn-secondary-modern openHeroEditModal"
                                        data-hero='@json($hero)' data-image="{{ asset($hero->image) }}"
                                        data-bs-toggle="modal" data-bs-target="#editHeroModal">

                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                @endcan

                                @can('delete user')
                                    <form action="{{ route('herosection.destroy', $hero->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-modern btn-danger-modern">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                @endcan

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </div>

    <!-- Create Hero Modal -->
    <div class="modal fade" id="createHeroModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-plus-circle me-2"></i>
                        Create Hero Section
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <form action="{{ route('herosection.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Title
                            </label>

                            <input type="text" name="title" class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Description
                            </label>

                            <textarea name="description" rows="4" class="form-control modern-input"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Link
                            </label>

                            <input type="text" name="link" class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Image
                            </label>

                            <input type="file" name="image" class="form-control modern-input">
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Save Hero Section
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Edit Hero Modal -->
    <div class="modal fade" id="editHeroModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i>
                        Edit Hero Section
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <form id="editHeroForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="mb-3 text-center">

                            <img id="heroPreviewImage" src="" class="img-fluid rounded shadow"
                                style="max-height:180px">

                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Title
                            </label>

                            <input type="text" id="editHeroTitle" name="title" class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Description
                            </label>

                            <textarea id="editHeroDescription" name="description" rows="4" class="form-control modern-input"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Link
                            </label>

                            <input type="text" id="editHeroLink" name="link" class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                New Image
                            </label>

                            <input type="file" name="image" class="form-control modern-input">
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Update Hero Section
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.querySelectorAll('.openHeroEditModal').forEach(button => {

            button.addEventListener('click', function() {

                const hero = JSON.parse(this.dataset.hero);

                document.getElementById('editHeroTitle').value =
                    hero.title ?? '';

                document.getElementById('editHeroDescription').value =
                    hero.description ?? '';

                document.getElementById('editHeroLink').value =
                    hero.link ?? '';

                document.getElementById('heroPreviewImage').src =
                    this.dataset.image;

                document.getElementById('editHeroForm').action =
                    `/herosection/${hero.id}`;
            });

        });
    </script>

    <style>
        .hero-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Each hero row */
        .hero-item {
            display: flex;
            gap: 20px;
            padding: 18px;
            border-radius: 12px;
            background: rgba(17, 24, 39, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: 0.3s;
        }

        .hero-item:hover {
            transform: translateY(-3px);
            background: rgba(17, 24, 39, 0.8);
        }

        /* Image */
        .hero-image img {
            width: 260px;
            height: 160px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Content */
        .hero-content {
            flex: 1;
        }

        .hero-title {
            font-size: 18px;
            font-weight: 600;
            color: #e2e8f0;
        }

        .hero-desc {
            font-size: 14px;
            margin-top: 6px;
        }

        .hero-link {
            display: inline-block;
            margin-top: 10px;
            color: #38bdf8;
            text-decoration: none;
            font-weight: 500;
        }

        .hero-link:hover {
            text-decoration: underline;
        }
    </style>
@endsection
