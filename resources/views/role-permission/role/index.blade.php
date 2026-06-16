@extends('layout.dashboard')
@include('include.alerts')

@section('main')
    <x-role-section-link />

    <div class="container py-4">
        <div class="modern-card">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Roles Management</h4>

                {{-- <a href="{{ url('roles/create')  }}" title="Add" class="cssbuttons-io-button">
                    <svg height="25" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>
                    <span>Add</span>
                </a> --}}

                <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                    data-bs-target="#createRoleModal">

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
                            <th>#</th>
                            <th>Role Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            <tr>
                                <td class="fw-bold">#{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <div class="action-group">
                                        {{-- <a href="{{ url('roles/' . $role->id . '/give-permission') }}"
                                            class="btn-modern btn-info-modern">
                                            <i class="fas fa-key"></i> Permissions
                                        </a> --}}
                                        <button class="btn-modern btn-info-modern openPermissionModal"
                                            data-id="{{ $role->id }}" data-name="{{ $role->name }}"
                                            data-permissions="{{ json_encode($role->permissions->pluck('name')) }}"
                                            data-bs-toggle="modal" data-bs-target="#givePermissionModal">

                                            <i class="fas fa-key"></i> Permissions
                                        </button>
                                        @can('update role')
                                            <button type="button" class="btn-modern btn-secondary-modern editRoleBtn"
                                                data-id="{{ $role->id }}" data-name="{{ $role->name }}"
                                                data-bs-toggle="modal" data-bs-target="#editRoleModal">

                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                        @endcan
                                        @can('delete role')
                                            <button
                                                onclick="if(confirm('Are you sure you want to delete this role?')) { window.location.href='{{ url('roles/' . $role->id . '/delete') }}' }"
                                                class="btn-modern btn-danger-modern">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-muted">No roles available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create Role Modal -->
    <div class="modal fade" id="createRoleModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-user-shield me-2"></i>
                        Create Role
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                </div>

                <form action="{{ url('roles') }}" method="POST">
                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="modern-label">
                                Role Name
                            </label>

                            <input type="text" name="name" class="form-control modern-input"
                                placeholder="Enter role name" required>
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Save Role
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Edit Role Modal -->
    <div class="modal fade" id="editRoleModal" tabindex="-1">

        <div class="   modal-dialog modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-pen me-2"></i>
                        Edit Role
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                </div>

                <form id="editRoleForm" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="modern-label">
                                Role Name
                            </label>

                            <input type="text" id="role_name" name="name" class="form-control modern-input" required>
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Update Role
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- GIVE PERMISSION MODAL -->
    <div class="modal fade" id="givePermissionModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-key me-2"></i>
                        Assign Permissions to Role
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                </div>

                <form id="givePermissionForm" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <h6 class="text-white mb-3">
                            Role: <span id="roleNameText"></span>
                        </h6>

                        @error('permission')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="permission-grid">

                            @foreach ($permissions as $permission)
                                <label class="permission-item">

                                    <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                        class="permission-checkbox">

                                    <div class="permission-content">
                                        <span class="permission-title">
                                            {{ $permission->name }}
                                        </span>
                                    </div>

                                </label>
                            @endforeach

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Update Permissions
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


    {{-- Edit Modal JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const editButtons = document.querySelectorAll('.editRoleBtn');

            editButtons.forEach(button => {

                button.addEventListener('click', function() {

                    let roleId = this.dataset.id;
                    let roleName = this.dataset.name;

                    document.getElementById('role_name').value = roleName;

                    document.getElementById('editRoleForm').action =
                        `/roles/${roleId}`;

                });

            });

        });
    </script>


    {{-- Edit permission Modal JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const buttons = document.querySelectorAll('.openPermissionModal');

            buttons.forEach(btn => {

                btn.addEventListener('click', function() {

                    let roleId = this.dataset.id;
                    let roleName = this.dataset.name;
                    let permissions = JSON.parse(this.dataset.permissions || "[]");

                    // set form action
                    document.getElementById('givePermissionForm').action =
                        `/roles/${roleId}/give-permission`;

                    // set role name
                    document.getElementById('roleNameText').innerText = roleName;

                    // reset all checkboxes
                    document.querySelectorAll('.permission-checkbox').forEach(cb => {
                        cb.checked = false;
                    });

                    // check assigned permissions
                    document.querySelectorAll('.permission-checkbox').forEach(cb => {
                        if (permissions.includes(cb.value)) {
                            cb.checked = true;
                        }
                    });

                });

            });

        });
    </script>
@endsection

