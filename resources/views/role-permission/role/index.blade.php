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
            --info: #0ea5e9;
            --warning: #f59e0b;
            --card-bg: #111827;
            --border: rgba(255, 255, 255, 0.08);
        }

        body {
            background: #0b1220;
            color: var(--text-light);
            font-family: 'Segoe UI', sans-serif;
        }

        /* Card */
        .modern-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .page-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-light);
        }

        /* Buttons */
        .btn-modern {
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 13px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-primary-modern {
            background: var(--accent);
            color: #0b1220;
            font-weight: 600;
        }

        .btn-primary-modern:hover {
            background: #0ea5e9;
            transform: translateY(-2px);
        }

        .btn-info-modern {
            background: rgba(14, 165, 233, 0.15);
            color: var(--info);
            border: 1px solid rgba(14, 165, 233, 0.3);
        }

        .btn-secondary-modern {
            background: rgba(148, 163, 184, 0.15);
            color: var(--muted);
            border: 1px solid rgba(148, 163, 184, 0.3);
        }

        .btn-danger-modern {
            background: rgba(239, 68, 68, 0.15);
            color: var(--danger);
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .btn-danger-modern:hover {
            background: var(--danger);
            color: white;
        }

        /* Table */
        .modern-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        .modern-table thead {
            background: var(--primary);
            color: white;
        }

        .modern-table th,
        .modern-table td {
            padding: 14px;
            font-size: 14px;
            text-align: center;
        }

        .modern-table tbody tr {
            border-bottom: 1px solid var(--border);
            transition: 0.3s;
        }

        .modern-table tbody tr:hover {
            background: rgba(56, 189, 248, 0.06);
        }

        .text-muted {
            color: var(--muted);
        }

        .fw-bold {
            font-weight: 700;
        }

        /* Action buttons */
        .action-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }
    </style>

    {{-- <div class="container py-4">

        <div class="modern-card">

            <div class="page-header">

                <div class="page-title">
                    Roles Management
                </div>

                <a href="{{ url('roles/create') }}" class="btn-modern btn-primary-modern">
                    <i class="fas fa-plus-circle"></i> Add Role
                </a>

            </div> --}}
 <div class="container py-4">

    <div class="modern-card">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Roles Management</h4>
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

                    <tr>
                        <td class="fw-bold">#1</td>
                        <td>Super Admin</td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="btn-modern btn-info-modern">
                                    <i class="fas fa-key"></i> Permissions
                                </a>
                                <a href="#" class="btn-modern btn-secondary-modern">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button onclick="if(confirm('Are you sure you want to delete this role?')) { window.location.href='#' }" class="btn-modern btn-danger-modern">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-bold">#2</td>
                        <td>Editor</td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="btn-modern btn-info-modern">
                                    <i class="fas fa-key"></i> Permissions
                                </a>
                                <a href="#" class="btn-modern btn-secondary-modern">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button onclick="if(confirm('Are you sure you want to delete this role?')) { window.location.href='#' }" class="btn-modern btn-danger-modern">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-bold">#3</td>
                        <td>Standard User</td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="btn-modern btn-info-modern">
                                    <i class="fas fa-key"></i> Permissions
                                </a>
                                <a href="#" class="btn-modern btn-secondary-modern">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button onclick="if(confirm('Are you sure you want to delete this role?')) { window.location.href='#' }" class="btn-modern btn-danger-modern">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>
@endsection
