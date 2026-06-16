@extends('layout.dashboard')
@include('include.alerts')

@section('main')
   <x-role-section-link />

<style>
    :root {
        --primary: #0f172a;
        --primary-light: #1e293b;
        --accent: #38bdf8;
        --text-light: #e2e8f0;
        --muted: #94a3b8;
        --danger: #ef4444;
        --warning: #f59e0b;
        --card-bg: #111827;
        --border: rgba(255,255,255,0.08);
    }

    body {
        background: #0b1220;
        color: var(--text-light);
        font-family: 'Segoe UI', sans-serif;
    }

    .modern-card {
        background: var(--card-bg);
        border: 1px solid var(--border);
        border-radius: 14px;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.25);
    }

    .table-responsive {
        overflow-x: auto;
    }

    .modern-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 700px;
    }

    .modern-table thead {
        background: var(--primary);
        color: white;
    }

    .modern-table thead th {
        padding: 14px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .modern-table tbody tr {
        border-bottom: 1px solid var(--border);
        transition: 0.3s;
    }

    .modern-table tbody tr:hover {
        background: rgba(56, 189, 248, 0.08);
    }

    .modern-table td {
        padding: 14px;
        font-size: 14px;
        color: var(--text-light);
    }

    .fw-medium {
        font-weight: 600;
    }

    .text-muted {
        color: var(--muted);
    }

    /* Badges */
    .badge-modern {
        display: inline-block;
        padding: 5px 10px;
        margin: 2px;
        border-radius: 8px;
        font-size: 12px;
        background: rgba(56, 189, 248, 0.15);
        color: var(--accent);
        border: 1px solid rgba(56, 189, 248, 0.3);
    }

    /* Action buttons */
    .action-group {
        display: flex;
        gap: 10px;
        justify-content: center;
    }

    .icon-btn {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
    }

    .icon-btn.edit {
        background: rgba(56, 189, 248, 0.15);
        color: var(--accent);
    }

    .icon-btn.edit:hover {
        background: var(--accent);
        color: #0b1220;
    }

    .icon-btn.delete {
        background: rgba(239, 68, 68, 0.15);
        color: var(--danger);
    }

    .icon-btn.delete:hover {
        background: var(--danger);
        color: white;
    }

</style>

<div class="container py-4">

    <div class="modern-card">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">User Management</h4>
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