@extends('layout.dashboard')
@include('include.alerts')

@section('main')
   <x-role-section-link />

    <div class="modern-page">

        <!-- PAGE HEADER -->
        <div class="page-header">
            <div>
                <h2>User Management</h2>
                <p>Manage system users, roles and permissions</p>
            </div>

            <a href="{{ url('users/create') }}" title="Add" class="cssbuttons-io-button">
                <svg height="25" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                </svg>
                <span>Add</span>
            </a>


        </div>

        <!-- ALERT -->
        @if (session('status'))
            <div class="modern-alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- CARD -->
        <div class="modern-card">

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
                                            <a href="{{ url('users/' . $user->id . '/edit') }}" class="icon-btn edit">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        @endcan

                                        @can('delete user')
                                            <button
                                                onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('users/' . $user->id . '/delete') }}' }"
                                                class="icon-btn delete">
                                                <i class="fas fa-trash"></i>
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

<style>
    .modern-page {
        padding: 30px;
        font-family: 'Inter', sans-serif;
        color: #fff;
    }

    /* HEADER */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .page-header h2 {
        margin: 0;
        font-size: 24px;
    }

    .page-header p {
        margin: 4px 0 0;
        font-size: 13px;
        color: #9aa4b2;
    }



    /* ALERT */
    .modern-alert {
        background: rgba(32, 157, 216, 0.1);
        border: 1px solid rgba(32, 157, 216, 0.2);
        padding: 12px 14px;
        border-radius: 10px;
        font-size: 13px;
        margin-bottom: 15px;
        color: #cfefff;
    }

    /* CARD */
    .modern-card {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 14px;
        padding: 15px;
        backdrop-filter: blur(15px);
    }

    /* TABLE */
    .modern-table {
        width: 100%;
        border-collapse: collapse;
    }

    .modern-table thead {
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .modern-table th {
        text-align: left;
        padding: 12px;
        font-size: 12px;
        color: #9aa4b2;
        text-transform: uppercase;
    }

    .modern-table td {
        padding: 14px 12px;
        font-size: 13px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .modern-table tbody tr {
        transition: 0.2s;
    }

    .modern-table tbody tr:hover {
        background: rgba(255, 255, 255, 0.03);
    }

    /* BADGE */
    .badge-modern {
        display: inline-block;
        padding: 4px 10px;
        font-size: 11px;
        border-radius: 20px;
        background: rgba(32, 157, 216, 0.12);
        border: 1px solid rgba(32, 157, 216, 0.25);
        color: #209DD8;
        margin-right: 4px;
    }

    /* ACTION BUTTONS */
    .action-group {
        display: flex;
        justify-content: center;
        gap: 8px;
    }

    .icon-btn {
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 255, 255, 0.03);
        color: #9aa4b2;
        transition: 0.2s;
        text-decoration: none;
        cursor: pointer;
    }

    .icon-btn:hover {
        transform: translateY(-2px);
        border-color: #209DD8;
        color: #fff;
    }

    /* EDIT */
    .icon-btn.edit:hover {
        background: rgba(32, 157, 216, 0.15);
    }

    /* DELETE */
    .icon-btn.delete:hover {
        background: rgba(255, 0, 80, 0.15);
        border-color: rgba(255, 0, 80, 0.3);
    }

    /* RESPONSIVE */
    @media(max-width:768px) {
        .page-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .modern-table td,
        .modern-table th {
            padding: 10px;
            font-size: 12px;
        }
    }
</style>
