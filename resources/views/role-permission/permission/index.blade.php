@extends('layout.dashboard')
@include('include.alerts')

@section('main')
    <x-role-section-link />

    <div class="container py-4">
        <div class="modern-card">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Permission Management</h4>

                {{-- <a href="{{ url('permissions/create') }}" title="Add" class="cssbuttons-io-button">
                    <svg height="25" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>
                    <span>Add</span>
                </a> --}}

                <button type="button" class="cssbuttons-io-button" data-bs-toggle="modal"
                    data-bs-target="#createPermissionModal">

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
                            <th>Permission Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->name }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center flex-wrap gap-1">
                                        @can('update permission')
                                            {{-- <a href="{{ url('permissions/' . $permission->id . '/edit') }}"
                                                class="btn-modern btn-secondary-modern">
                                                <i class="fa fa-edit"></i> Edit
                                            </a> --}}
                                            <button class="btn-modern btn-secondary-modern editPermissionBtn"
                                                data-id="{{ $permission->id }}" data-name="{{ $permission->name }}"
                                                data-bs-toggle="modal" data-bs-target="#editPermissionModal">

                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                        @endcan

                                        @can('delete permission')
                                            <button
                                                onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('permissions/' . $permission->id . '/delete') }}' }"
                                                class="btn-modern btn-danger-modern">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
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




    <!-- Create Permission Modal -->
    <div class="modal fade" id="createPermissionModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-shield-alt me-2"></i>
                        Create Permission
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                </div>

                <form action="{{ url('permissions') }}" method="POST">
                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="modern-label">
                                Permission Name
                            </label>

                            <input type="text" name="name" class="form-control modern-input"
                                placeholder="Enter permission name" required>
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Save Permission
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Edit Permission Modal -->
    <div class="modal fade" id="editPermissionModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-pen me-2"></i>
                        Edit Permission
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                </div>

                <form action="{{url('permissions',$permission->id)}}" id="editPermissionForm" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="modern-label">
                                Permission Name
                            </label>

                            <input type="text" id="permission_name" name="name" class="form-control modern-input" value="{{$permission->name}}"
                                required>
                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn-save">
                            Update Permission
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const editButtons = document.querySelectorAll('.editPermissionBtn');

            editButtons.forEach(button => {

                button.addEventListener('click', function() {

                    let id = this.dataset.id;
                    let name = this.dataset.name;

                    document.getElementById('permission_name').value = name;

                    document.getElementById('editPermissionForm').action =
                        `/permissions/${id}`;

                });

            });

        });
    </script>
@endsection
