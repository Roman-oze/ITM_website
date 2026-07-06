@extends('layout.dashboard')
@include('include.alerts')
@section('main')
    <div class="container py-4">

        <div class="modern-card">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h4 class="mb-0">Team Management</h4>

                <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                    data-bs-target="#createTeamModal">

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
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($teamMembers as $team)
                            <tr>

                                <td>#{{ $team->teammember_id }}</td>

                                <td>
                                    <img src="{{ asset($team->image) }}" alt="{{ $team->name }}" width="50"
                                        height="50" style="object-fit:cover;border-radius:50%;">
                                </td>

                                <td class="fw-medium">
                                    {{ $team->name }}
                                </td>

                                <td>
                                    <span class="badge-modern">
                                        {{ $team->designation }}
                                    </span>

                                </td>

                                <td class="text-muted">
                                    {{ $team->email }}
                                </td>

                                <td>
                                    {{ $team->phone }}
                                </td>

                                <td class="text-center">

                                    <div class="action-group">

                                        <button type="button" class="btn-modern btn-info-modern" data-bs-toggle="modal"
                                            data-bs-target="#teamModal{{ $team->teammember_id }}">
                                            <i class="fas fa-eye"></i> View
                                        </button>

                                        @can('update user')
                                            <button type="button" class="btn-modern btn-secondary-modern editTeamBtn"
                                                data-id="{{ $team->teammember_id }}" data-name="{{ $team->name }}"
                                                data-designation="{{ $team->designation }}" data-email="{{ $team->email }}"
                                                data-phone="{{ $team->phone }}" data-fb="{{ $team->fb }}"
                                                data-linked="{{ $team->linked }}" data-image="{{ asset($team->image) }}"
                                                data-bs-toggle="modal" data-bs-target="#editTeamModal">

                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                        @endcan

                                        @can('delete user')
                                            <form action="{{ route('team.delete', $team->teammember_id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Are you sure?')"
                                                    class="btn-modern btn-danger-modern">
                                                    <i class="fa fa-trash"></i> Delete
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


    {{-- View modal --}}
    @foreach ($teamMembers as $team)
        <div class="modal fade" id="teamModal{{ $team->teammember_id }}" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <!-- HEADER -->
                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">
                            <i class="fas fa-user-circle me-2"></i>
                            Team Details
                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <!-- BODY -->
                    <div class="modal-body">

                        <div class="row align-items-center">

                            <!-- IMAGE -->
                            <div class="col-md-4 text-center mb-3 mb-md-0">

                                <img src="{{ asset($team->image) }}" alt="{{ $team->name }}"
                                    class="team-profile-image">

                            </div>

                            <!-- INFO -->
                            <div class="col-md-8">

                                <h4 class="text-white mb-2">
                                    {{ $team->name }}
                                </h4>

                                <span class="team-designation-badge">
                                    {{ $team->designation }}
                                </span>

                                <div class="team-info-list mt-4">

                                    <div class="team-info-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>{{ $team->email }}</span>
                                    </div>

                                    <div class="team-info-item">
                                        <i class="fas fa-phone"></i>
                                        <span>{{ $team->phone }}</span>
                                    </div>

                                    @if ($team->fb)
                                        <div class="team-info-item">
                                            <i class="fab fa-facebook"></i>

                                            <a href="{{ $team->fb }}" target="_blank">
                                                Facebook Profile
                                            </a>
                                        </div>
                                    @endif

                                    @if ($team->linked)
                                        <div class="team-info-item">
                                            <i class="fab fa-linkedin"></i>

                                            <a href="{{ $team->linked }}" target="_blank">
                                                LinkedIn Profile
                                            </a>
                                        </div>
                                    @endif

                                </div>

                            </div>

                        </div>

                        @if (!empty($team->bio))
                            <div class="team-bio-card mt-4">

                                <h6 class="text-info mb-3">
                                    About Team
                                </h6>

                                <p class="mb-0">
                                    {{ $team->bio }}
                                </p>

                            </div>
                        @endif

                    </div>

                    <!-- FOOTER -->
                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Close
                        </button>

                        @can('update user')
                            <button type="button" class="btn-save editTeamBtn" data-id="{{ $team->teammember_id }}"
                                data-name="{{ $team->name }}" data-designation="{{ $team->designation }}"
                                data-email="{{ $team->email }}" data-phone="{{ $team->phone }}"
                                data-fb="{{ $team->fb }}" data-linked="{{ $team->linked }}"
                                data-image="{{ asset($team->image) }}" data-bs-toggle="modal"
                                data-bs-target="#editTeamModal">

                                <i class="fa fa-edit me-1"></i>
                                Edit

                            </button>
                        @endcan

                    </div>

                </div>

            </div>

        </div>
    @endforeach


    <!-- CREATE FACULTY MODAL -->
    <div class="modal fade" id="createTeamModal" tabindex="-1">

        <div class="modal-dialog  modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-user-plus me-2"></i>
                        Add New Team
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                </div>

                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">

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
                            <label class="modern-label">Designation</label>
                            <input type="text" name="designation" class="form-control modern-input">
                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="modern-label">Facebook URL</label>
                                <input type="url" name="fb" class="form-control modern-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="modern-label">LinkedIn URL</label>
                                <input type="url" name="linked" class="form-control modern-input">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="modern-label">Email</label>
                                <input type="email" name="email" class="form-control modern-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="modern-label">Phone</label>
                                <input type="text" name="phone" class="form-control modern-input">
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Save Team
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- EDIT FACULTY MODAL -->
    <div class="modal fade" id="editTeamModal" tabindex="-1">

        <div class="modal-dialog  modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-user-edit me-2"></i>
                        Edit Team
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                </div>

                <form id="editTeamForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="text-center mb-4">
                            <img id="editTeamImage" src="" width="100" height="100"
                                class="rounded-circle shadow" style="object-fit:cover;">
                        </div>

                        <div class="mb-3">
                            <label class="modern-label">
                                Upload New Image
                            </label>

                            <input type="file" name="image" class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="modern-label">Full Name</label>

                            <input type="text" id="edit_name" name="name" class="form-control modern-input">
                        </div>

                        <div class="mb-3">
                            <label class="modern-label">Designation</label>

                            <input type="text" id="edit_designation" name="designation"
                                class="form-control modern-input">
                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Facebook URL
                                </label>

                                <input type="url" id="edit_fb" name="fb" class="form-control modern-input">
                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    LinkedIn URL
                                </label>

                                <input type="url" id="edit_linked" name="linked" class="form-control modern-input">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Email
                                </label>

                                <input type="email" id="edit_email" name="email" class="form-control modern-input">
                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="modern-label">
                                    Phone
                                </label>

                                <input type="text" id="edit_phone" name="phone" class="form-control modern-input">
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Update Team
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.editTeamBtn')
                .forEach(button => {

                    button.addEventListener('click', function() {

                        let id = this.dataset.id;

                        document.getElementById('edit_name').value =
                            this.dataset.name;

                        document.getElementById('edit_designation').value =
                            this.dataset.designation;

                        document.getElementById('edit_email').value =
                            this.dataset.email;

                        document.getElementById('edit_phone').value =
                            this.dataset.phone;

                        document.getElementById('edit_fb').value =
                            this.dataset.fb;

                        document.getElementById('edit_linked').value =
                            this.dataset.linked;

                        document.getElementById('editTeamImage').src =
                            this.dataset.image;

                        document.getElementById('editTeamForm').action =
    "{{ url('/team/update') }}/" + id;
                    });

                });

        });
    </script>
@endsection


<style>
    /* Team Profile */
    .team-profile-image {
        width: 180px;
        height: 180px;
        object-fit: cover;

        border-radius: 50%;

        border: 4px solid rgba(32, 157, 216, 0.25);

        box-shadow: 0 0 25px rgba(32, 157, 216, 0.15);
    }

    /* Designation Badge */
    .team-designation-badge {
        display: inline-block;

        background: rgba(32, 157, 216, 0.15);

        color: #209DD8;

        padding: 8px 14px;

        border-radius: 30px;

        font-size: 13px;
        font-weight: 600;
    }

    /* Info List */
    .team-info-list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .team-info-item {
        display: flex;
        align-items: center;
        gap: 12px;

        color: #CBD5E1;
    }

    .team-info-item i {
        width: 20px;
        color: #209DD8;
    }

    .team-info-item a {
        color: #CBD5E1;
        text-decoration: none;
    }

    .team-info-item a:hover {
        color: #209DD8;
    }

    /* Bio Card */
    .team-bio-card {
        background: rgba(255, 255, 255, 0.03);

        border: 1px solid rgba(255, 255, 255, 0.06);

        border-radius: 12px;

        padding: 18px;

        color: #CBD5E1;
    }
</style>
