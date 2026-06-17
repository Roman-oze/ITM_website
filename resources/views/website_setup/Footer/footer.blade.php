@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')
@section('main')
    <main>

        <div class="container-fluid px-4">

            {{-- Page Title --}}
            <h2 class="mt-4">Footer Management</h2>

            {{-- Breadcrumb --}}
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Footer</li>
            </ol>

        </div>

        <div class="container py-4">

            <div class="modern-card">

                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Footer Management</h4>

                    @if ($footers->count() == 0)
                        <button type="button" class="cssbuttons-io-button" data-bs-toggle="modal"
                            data-bs-target="#createFooterModal">

                            <svg height="25" width="25" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                            </svg>

                            <span>Add</span>

                        </button>
                    @else
                        <button class="cssbuttons-io-button opacity-50" disabled style="cursor:not-allowed;">
                            <svg height="25" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                            </svg>
                            <span>Add</span>
                        </button>
                    @endif
                </div>

                {{-- Table --}}
                <div class="table-responsive">

                    <table class="modern-table">

                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Downloads</th>
                                <th>Social</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($footers as $institute)
                                <tr>
                                    {{-- Logo --}}
                                    <td>
                                        @if ($institute->footer_logo)
                                            <img src="{{ asset($institute->footer_logo) }}"
                                                style="width:50px;height:50px;object-fit:cover;border-radius:8px;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    {{-- Address --}}
                                    <td class="fw-medium">
                                        {{ Str::limit($institute->address, 40) }}
                                    </td>

                                    {{-- Phone --}}
                                    <td>
                                        {{ $institute->phone }}
                                    </td>

                                    {{-- Email --}}
                                    <td class="text-muted">
                                        {{ $institute->email }}
                                    </td>

                                    {{-- Downloads --}}
                                    <td>
                                        <div class="action-group">

                                            @if ($institute->tuition_fees)
                                                <a href="{{ $institute->tuition_fees }}"
                                                    class="btn-modern btn-secondary-modern" download>
                                                    Tuition
                                                </a>
                                            @endif

                                            @if ($institute->course_download)
                                                <a href="{{ $institute->course_download }}"
                                                    class="btn-modern btn-secondary-modern" download>
                                                    Course
                                                </a>
                                            @endif

                                        </div>
                                    </td>

                                    {{-- Social --}}
                                    <td>
                                        <div class="action-group">

                                            @if ($institute->facebook)
                                                <a href="{{ $institute->facebook }}" target="_blank">
                                                    <i class="fab fa-facebook text-primary"></i>
                                                </a>
                                            @endif

                                            @if ($institute->instagram)
                                                <a href="{{ $institute->instagram }}" target="_blank">
                                                    <i class="fab fa-instagram text-danger"></i>
                                                </a>
                                            @endif

                                            @if ($institute->linkedin)
                                                <a href="{{ $institute->linkedin }}" target="_blank">
                                                    <i class="fab fa-linkedin text-info"></i>
                                                </a>
                                            @endif

                                        </div>
                                    </td>

                                    {{-- Actions --}}
                                    <td class="text-center">

                                        <div class="action-group">

                                            @can('update user')
                                                <button class="btn-modern btn-secondary-modern openFooterEditModal"
                                                    data-id="{{ $institute->id }}" data-address="{{ $institute->address }}"
                                                    data-phone="{{ $institute->phone }}" data-email="{{ $institute->email }}"
                                                    data-tuition="{{ $institute->tuition_fees }}"
                                                    data-course="{{ $institute->course_download }}"
                                                    data-facebook="{{ $institute->facebook }}"
                                                    data-instagram="{{ $institute->instagram }}"
                                                    data-linkedin="{{ $institute->linkedin }}"
                                                    data-logo="{{ asset($institute->footer_logo) }}" data-bs-toggle="modal"
                                                    data-bs-target="#editFooterModal">

                                                    <i class="fa fa-edit"></i> Edit

                                                </button>
                                            @endcan

                                            @can('delete user')
                                                <form action="{{ route('footer.destroy', $institute->id) }}" method="POST"
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
                                    <td colspan="8" class="text-center text-muted py-4">
                                        No footer data available.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        {{-- Create Modal --}}
        <div class="modal fade" id="createFooterModal" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-plus-circle me-2"></i>
                            Create Footer
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <form action="{{ route('footer.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Address</label>
                                    <input type="text" name="address" class="form-control modern-input" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Phone</label>
                                    <input type="text" name="phone" class="form-control modern-input" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Email</label>
                                    <input type="email" name="email" class="form-control modern-input" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Tuition Fees</label>
                                    <input type="text" name="tuition_fees" class="form-control modern-input">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Course Download</label>
                                    <input type="text" name="course_download" class="form-control modern-input">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Logo</label>
                                    <input type="file" name="footer_logo" class="form-control modern-input">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="modern-label">Facebook</label>
                                    <input type="text" name="facebook" class="form-control modern-input">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="modern-label">Instagram</label>
                                    <input type="text" name="instagram" class="form-control modern-input">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="modern-label">LinkedIn</label>
                                    <input type="text" name="linkedin" class="form-control modern-input">
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="submit" class="btn-save">
                                Save Footer
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        {{-- Edit Modal --}}
        <div class="modal fade" id="editFooterModal" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-edit me-2"></i>
                            Edit Footer
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <form id="editFooterForm" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="text-center mb-3">

                                <img id="footerLogoPreview" style="max-height:100px;border-radius:10px;">

                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Address</label>
                                    <input type="text" id="editAddress" name="address"
                                        class="form-control modern-input">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Phone</label>
                                    <input type="text" id="editPhone" name="phone"
                                        class="form-control modern-input">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Email</label>
                                    <input type="email" id="editEmail" name="email"
                                        class="form-control modern-input">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Tuition Fees</label>
                                    <input type="text" id="editTuition" name="tuition_fees"
                                        class="form-control modern-input">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Course Download</label>
                                    <input type="text" id="editCourse" name="course_download"
                                        class="form-control modern-input">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="modern-label">Logo</label>
                                    <input type="file" name="footer_logo" class="form-control modern-input">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="modern-label">Facebook</label>
                                    <input type="text" id="editFacebook" name="facebook"
                                        class="form-control modern-input">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="modern-label">Instagram</label>
                                    <input type="text" id="editInstagram" name="instagram"
                                        class="form-control modern-input">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="modern-label">LinkedIn</label>
                                    <input type="text" id="editLinkedin" name="linkedin"
                                        class="form-control modern-input">
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="submit" class="btn-save">
                                Update Footer
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {

                document.querySelectorAll('.openFooterEditModal')
                    .forEach(button => {

                        button.addEventListener('click', function() {

                            let id = this.dataset.id;

                            document.getElementById('editFooterForm').action =
                                `/footer/${id}`;

                            document.getElementById('editAddress').value =
                                this.dataset.address;

                            document.getElementById('editPhone').value =
                                this.dataset.phone;

                            document.getElementById('editEmail').value =
                                this.dataset.email;

                            document.getElementById('editTuition').value =
                                this.dataset.tuition;

                            document.getElementById('editCourse').value =
                                this.dataset.course;

                            document.getElementById('editFacebook').value =
                                this.dataset.facebook;

                            document.getElementById('editInstagram').value =
                                this.dataset.instagram;

                            document.getElementById('editLinkedin').value =
                                this.dataset.linkedin;

                            document.getElementById('footerLogoPreview').src =
                                this.dataset.logo;
                        });

                    });

            });
        </script>
    @endsection
