@extends('layout.dashboard')

@section('main')
    <main>

        @include('include.alerts')

        <div class="container py-4">

            <div class="modern-card">

                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Officer & Staff Management</h4>

                    <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                        data-bs-target="#createStaffModal">

                        <svg height="25" width="25" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor" />
                        </svg>

                        <span>Add</span>
                    </button>
                </div>

                <!-- Table -->
                <div class="table-responsive">

                    <table class="modern-table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($staffs as $staff)
                                <tr>

                                    <td>#{{ $staff->id }}</td>

                                    <td>
                                        <img src="{{ asset($staff->image) }}" alt="{{ $staff->name }}"
                                            style="width:50px;height:50px;object-fit:cover;border-radius:50%;">
                                    </td>

                                    <td class="fw-medium">
                                        {{ $staff->name }}
                                    </td>

                                    <td>
                                        <span class="badge-modern">
                                            {{ $staff->position }}
                                        </span>
                                    </td>

                                    <td class="text-muted">
                                        {{ $staff->email }}
                                    </td>

                                    <td>
                                        {{ $staff->mobile }}
                                    </td>

                                    <td class="text-center">

                                        <div class="action-group">

                                                <button type="button" class="btn-modern btn-info-modern" data-bs-toggle="modal"
                                                    data-bs-target="#staffModal{{ $staff->id }}">

                                                    <i class="fas fa-eye"></i> View

                                                </button>

                                            @can('update user')
                                                <button type="button" class="btn-modern btn-secondary-modern editStaffBtn"
                                                    data-id="{{ $staff->id }}" data-name="{{ $staff->name }}"
                                                    data-position="{{ $staff->position }}" data-email="{{ $staff->email }}"
                                                    data-mobile="{{ $staff->mobile }}" data-image="{{ asset($staff->image) }}"
                                                    data-bs-toggle="modal" data-bs-target="#editStaffModal">

                                                    <i class="fa fa-edit"></i>
                                                    Edit

                                                </button>
                                            @endcan

                                            @can('delete user')
                                                <form action="{{ route('staff.delete', $staff->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure?')" style="display:inline;">
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
                                    <td colspan="7" class="text-center text-muted py-4">
                                        No staff members found.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

                <!-- Pagination -->
                @if (method_exists($staffs, 'links'))
                    <div class="d-flex justify-content-end mt-4">
                        {{ $staffs->links() }}
                    </div>
                @endif

            </div>

        </div>

        {{-- create modal --}}
        <div class="modal fade" id="createStaffModal" tabindex="-1">

            <div class="modal-dialog  modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-user-plus me-2"></i>
                            Add Officer / Staff
                        </h5>

                        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                    </div>

                    <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="modern-label">Profile Picture</label>
                                <input type="file" name="image" class="form-control modern-input">
                            </div>

                            <div class="mb-3">
                                <label class="modern-label">Full Name</label>
                                <input type="text" name="name" class="form-control modern-input">
                            </div>

                            <div class="mb-3">
                                <label class="modern-label">Position</label>
                                <input type="text" name="position" class="form-control modern-input">
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">Email</label>

                                    <input type="email" name="email" class="form-control modern-input">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">Mobile</label>

                                    <input type="text" name="mobile" class="form-control modern-input">

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button class="btn-save">
                                Save Staff
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        {{-- Update modal --}}
        <div class="modal fade" id="editStaffModal" tabindex="-1">

            <div class="modal-dialog  modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">

                            <i class="fas fa-user-edit me-2"></i>

                            Edit Officer / Staff

                        </h5>

                        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                    </div>

                    <form id="editStaffForm" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="text-center mb-4">

                                <img id="editStaffImage" src="" class="faculty-profile-image">

                            </div>

                            <div class="mb-3">

                                <label class="modern-label">

                                    Upload New Image

                                </label>

                                <input type="file" name="image" class="form-control modern-input">

                            </div>

                            <div class="mb-3">

                                <label class="modern-label">

                                    Full Name

                                </label>

                                <input id="edit_staff_name" type="text" name="name"
                                    class="form-control modern-input">

                            </div>

                            <div class="mb-3">

                                <label class="modern-label">

                                    Position

                                </label>

                                <input id="edit_staff_position" type="text" name="position"
                                    class="form-control modern-input">

                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">

                                        Email

                                    </label>

                                    <input id="edit_staff_email" type="email" name="email"
                                        class="form-control modern-input">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">

                                        Mobile

                                    </label>

                                    <input id="edit_staff_mobile" type="text" name="mobile"
                                        class="form-control modern-input">

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button class="btn-save">

                                Update Staff

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        {{-- View modal --}}
        <div class="action-group">

            <!-- View -->
@foreach($staffs as $staff)

<div class="modal fade"
     id="staffModal{{ $staff->id }}"
     tabindex="-1">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content modern-modal">

            <!-- Header -->
            <div class="modal-header modern-modal-header">

                <h5 class="modal-title">

                    <i class="fas fa-user-tie me-2"></i>

                    Officer & Staff Details

                </h5>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <!-- Body -->
            <div class="modal-body">

                <div class="row align-items-center">

                    <!-- Photo -->
                    <div class="col-md-4 text-center">

                        <img src="{{ asset($staff->image) }}"
                             class="faculty-profile-image"
                             alt="{{ $staff->name }}">

                    </div>

                    <!-- Information -->
                    <div class="col-md-8">

                        <h3 class="text-white mb-2">
                            {{ $staff->name }}
                        </h3>

                        <span class="faculty-designation-badge">

                            {{ $staff->position }}

                        </span>

                        <div class="faculty-info-list mt-4">

                            <div class="faculty-info-item">

                                <i class="fas fa-envelope"></i>

                                <span>{{ $staff->email }}</span>

                            </div>

                            <div class="faculty-info-item">

                                <i class="fas fa-phone"></i>

                                <span>{{ $staff->mobile }}</span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Footer -->
            <div class="modal-footer modern-modal-footer">

                <button type="button"
                        class="btn-cancel"
                        data-bs-dismiss="modal">

                    Close

                </button>

                @can('update user')

                <button
                    type="button"
                    class="btn-save editStaffBtn"

                    data-id="{{ $staff->id }}"
                    data-name="{{ $staff->name }}"
                    data-position="{{ $staff->position }}"
                    data-email="{{ $staff->email }}"
                    data-mobile="{{ $staff->mobile }}"
                    data-image="{{ asset($staff->image) }}"

                    data-bs-toggle="modal"
                    data-bs-target="#editStaffModal">

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
        document.querySelectorAll('.editStaffBtn').forEach(button => {

            button.addEventListener('click', function() {

                let id = this.dataset.id;

                document.getElementById('edit_staff_name').value =
                    this.dataset.name;

                document.getElementById('edit_staff_position').value =
                    this.dataset.position;

                document.getElementById('edit_staff_email').value =
                    this.dataset.email;

                document.getElementById('edit_staff_mobile').value =
                    this.dataset.mobile;

                document.getElementById('editStaffImage').src =
                    this.dataset.image;

                document.getElementById('editStaffForm').action =
                    `/staff/update/${id}`;

            });

        });
    </script>
@endsection
<style>
    /* Faculty Profile */
    .faculty-profile-image {
        width: 180px;
        height: 180px;
        object-fit: cover;

        border-radius: 50%;

        border: 4px solid rgba(32, 157, 216, 0.25);

        box-shadow: 0 0 25px rgba(32, 157, 216, 0.15);
    }

    /* Designation Badge */
    .faculty-designation-badge {
        display: inline-block;

        background: rgba(32, 157, 216, 0.15);

        color: #209DD8;

        padding: 8px 14px;

        border-radius: 30px;

        font-size: 13px;
        font-weight: 600;
    }

    /* Info List */
    .faculty-info-list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .faculty-info-item {
        display: flex;
        align-items: center;
        gap: 12px;

        color: #CBD5E1;
    }

    .faculty-info-item i {
        width: 20px;
        color: #209DD8;
    }

    .faculty-info-item a {
        color: #CBD5E1;
        text-decoration: none;
    }

    .faculty-info-item a:hover {
        color: #209DD8;
    }

    /* Bio Card */
    .faculty-bio-card {
        background: rgba(255, 255, 255, 0.03);

        border: 1px solid rgba(255, 255, 255, 0.06);

        border-radius: 12px;

        padding: 18px;

        color: #CBD5E1;
    }
</style>
