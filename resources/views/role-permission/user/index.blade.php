@extends('layout.dashboard')
@include('include.alerts')

@section('main')
    <x-role-section-link />

    <div class="container py-4">

        <div class="modern-card">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">User Management</h4>

                <a href="{{ url('users/create') }}" title="Add" class="cssbuttons-io-button">
                    <svg height="25" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>
                    <span>Add</span>
                </a>
            </div>



            <div class="table-responsive">

                <table class="modern-table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Roles</th>
                            <th>Email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>

                                <td>#{{ $user->id }}</td>

                                <td class="fw-medium">{{ $user->name }}</td>

                                <td>
                                    @foreach ($user->roles as $role)
                                        <span class="badge-modern">{{ $role->name }}</span>
                                    @endforeach
                                </td>

                                <td class="text-muted">{{ $user->email }}</td>

                                <td class="text-center">

                                    <div class="action-group">

                                        @can('update user')
                                             <a href="{{ url('users/' . $user->id . '/edit') }}"
                                                class="btn-modern btn-secondary-modern">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        @endcan

                                        @can('delete user')
                                            <button
                                                onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('users/' . $user->id . '/delete') }}' }"
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
@endsection
