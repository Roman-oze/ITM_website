{{-- @include('include._sidenav', ['menus' => $menus]) --}}

@extends('layout.dashboard')

@section('main')
<main class="dashboard-viewport py-4">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Software Giant Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
    body {
        margin: 0;
        font-family: 'Inter', 'Segoe UI', sans-serif;
        background: #f6f7fb;
        color: #111827;
    }

    .canvas {
        padding: 35px;
    }

    /* HERO SUMMARY */
    .hero {
        background: linear-gradient(135deg, #6366f1, #22c55e);
        color: white;
        padding: 25px;
        border-radius: 18px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
    }

    .hero h2 {
        margin: 0;
        font-weight: 700;
    }

    .hero small {
        opacity: 0.9;
    }

    /* FLOATING KPI */
    .kpi {
        background: white;
        border-radius: 18px;
        padding: 18px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        transition: 0.3s;
        position: relative;
        overflow: hidden;
    }

    .kpi:hover {
        transform: translateY(-5px);
    }

    .kpi::before {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        background: rgba(99,102,241,0.08);
        border-radius: 50%;
        top: -40px;
        right: -40px;
    }

    .kpi-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef2ff;
        color: #4f46e5;
        font-size: 18px;
    }

    .kpi-value {
        font-size: 26px;
        font-weight: 700;
        margin-top: 10px;
    }

    .kpi-label {
        color: #6b7280;
        font-size: 14px;
    }

    /* PANEL */
    .panel {
        background: white;
        border-radius: 18px;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .title {
        font-weight: 600;
        margin-bottom: 15px;
    }

    /* ACTIVITY */
    .activity-item {
        display: flex;
        gap: 10px;
        margin-bottom: 12px;
        font-size: 14px;
    }

    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin-top: 6px;
    }

    .blue { background: #3b82f6; }
    .green { background: #22c55e; }
    .yellow { background: #f59e0b; }

    /* TABLE */
    table {
        font-size: 14px;
    }

    .progress {
        height: 6px;
        border-radius: 10px;
    }

</style>
</head>

<body>

<div class="canvas">

    <!-- HERO -->
  <!-- Workspace Controller Header -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center pb-4 mb-4 border-bottom border-light">
            <div>
                <h1 class="h3 mb-1 text-slate-900 fw-bold tracking-tight">System Workspace</h1>
                <p class="text-muted small mb-0">Operational performance metrics, resource deployment, and team composition diagnostics.</p>
            </div>

            <!-- Quick System Actions Context Button -->
            <div class="mt-3 mt-sm-0">
                <button class="btn btn-action-primary px-3 py-2 rounded-2 fs-sm fw-medium d-inline-flex align-items-center gap-2 shadow-sm">
                    <i class="fas fa-plus fs-xs"></i> Deploy Resource
                </button>
            </div>
        </div>

    <!-- KPI ROW -->
    <div class="row g-4">

        <div class="col-md-3">
            <div class="kpi">
                <div class="d-flex justify-content-between">
                    <div class="kpi-label">Employees</div>
                    <div class="kpi-icon"><i class="fas fa-user-tie"></i></div>
                </div>
                <div class="kpi-value">320</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="kpi">
                <div class="d-flex justify-content-between">
                    <div class="kpi-label">Projects</div>
                    <div class="kpi-icon"><i class="fas fa-folder-open"></i></div>
                </div>
                <div class="kpi-value">148</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="kpi">
                <div class="d-flex justify-content-between">
                    <div class="kpi-label">Revenue</div>
                    <div class="kpi-icon"><i class="fas fa-dollar-sign"></i></div>
                </div>
                <div class="kpi-value">$58K</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="kpi">
                <div class="d-flex justify-content-between">
                    <div class="kpi-label">Support Tickets</div>
                    <div class="kpi-icon"><i class="fas fa-life-ring"></i></div>
                </div>
                <div class="kpi-value">24</div>
            </div>
        </div>

    </div>

    <!-- MIDDLE SECTION -->
    <div class="row mt-4 g-4">

        <!-- PERFORMANCE -->
        <div class="col-md-6">
            <div class="panel">
                <div class="title">System Performance</div>

                <p class="mb-1">CPU</p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-primary" style="width: 72%"></div>
                </div>

                <p class="mb-1">RAM</p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" style="width: 55%"></div>
                </div>

                <p class="mb-1">Storage</p>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 80%"></div>
                </div>

            </div>
        </div>

        <!-- ACTIVITY -->
        <div class="col-md-6">
            <div class="panel">
                <div class="title">Live Activity</div>

                <div class="activity-item">
                    <div class="dot green"></div>
                    New employee joined development team
                </div>

                <div class="activity-item">
                    <div class="dot blue"></div>
                    Project ERP moved to production
                </div>

                <div class="activity-item">
                    <div class="dot yellow"></div>
                    Server load increased temporarily
                </div>

                <div class="activity-item">
                    <div class="dot green"></div>
                    Backup completed successfully
                </div>

            </div>
        </div>

    </div>

    <!-- PROJECT TABLE -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="panel">

                <div class="title">Ongoing Projects</div>

                <div class="table-responsive">
                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Status</th>
                                <th>Progress</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>ERP System</td>
                                <td>Government</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td><div class="progress"><div class="progress-bar bg-success" style="width:70%"></div></div></td>
                            </tr>

                            <tr>
                                <td>CRM Platform</td>
                                <td>Private Ltd</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td><div class="progress"><div class="progress-bar bg-warning" style="width:40%"></div></div></td>
                            </tr>

                            <tr>
                                <td>E-Commerce App</td>
                                <td>Startup</td>
                                <td><span class="badge bg-primary">Review</span></td>
                                <td><div class="progress"><div class="progress-bar bg-primary" style="width:60%"></div></div></td>
                            </tr>

                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
 <div class="row g-4 mt-2">

            <!-- LEFT SECTION: System Analytics Chart Block -->
            <div class="col-12 col-xl-7">
                <div class="card dashboard-panel border border-slate-100 shadow-sm rounded-3 bg-white h-100">
                    <div class="card-header border-0 bg-white pt-4 px-4 pb-2 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div class="status-dot pulsing bg-primary"></div>
                            <h5 class="card-title text-slate-900 fw-bold mb-0 fs-sm">Registration Trajectory</h5>
                        </div>
                        <span class="badge bg-light text-slate-600 fs-xs px-2 py-1 border">Realtime Sync</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="chart-viewport-wrapper position-relative">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SECTION: Premium Engineering Employee Roster Hub -->
            <div class="col-12 col-xl-5">
                <div class="card dashboard-panel border border-slate-100 shadow-sm rounded-3 bg-white h-100">
                    <div class="card-header border-0 bg-white pt-4 px-4 pb-2 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div class="status-dot bg-success"></div>
                            <h5 class="card-title text-slate-900 fw-bold mb-0 fs-sm">Engineering Core Team</h5>
                        </div>
                        <a href="#" class="text-primary text-decoration-none fs-xs fw-semibold hover-underline">View Directory</a>
                    </div>

                    <div class="card-body px-4 pt-2 pb-3">
                        <div class="employee-roster-list d-flex flex-column gap-3">

                            <!-- Employee Row Entry Item -->
                            <div class="employee-row-item p-2 rounded-2 d-flex align-items-center justify-content-between border-bottom border-light pb-3 last-border-none">
                                <div class="d-flex align-items-center gap-3 min-w-0">
                                    <div class="avatar-wrap position-relative flex-shrink-0">
                                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Team Lead Avatar" class="roster-avatar img-fluid rounded-circle">
                                        <span class="activity-pin online"></span>
                                    </div>
                                    <div class="min-w-0">
                                        <h6 class="text-slate-900 fw-semibold mb-0 fs-sm text-truncate">Sarah Jenkins</h6>
                                        <span class="text-muted fs-xs d-block text-truncate">Lead Platform Engineer</span>
                                    </div>
                                </div>
                                <div class="employee-meta text-end d-none d-sm-block">
                                    <span class="badge bg-primary-subtle text-primary border border-primary border-opacity-10 fs-xs px-2 rounded-pill">Platform</span>
                                </div>
                            </div>

                            <!-- Employee Row Entry Item -->
                            <div class="employee-row-item p-2 rounded-2 d-flex align-items-center justify-content-between border-bottom border-light pb-3 last-border-none">
                                <div class="d-flex align-items-center gap-3 min-w-0">
                                    <div class="avatar-wrap position-relative flex-shrink-0">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="Architect Avatar" class="roster-avatar img-fluid rounded-circle">
                                        <span class="activity-pin online"></span>
                                    </div>
                                    <div class="min-w-0">
                                        <h6 class="text-slate-900 fw-semibold mb-0 fs-sm text-truncate">Marcus Vance</h6>
                                        <span class="text-muted fs-xs d-block text-truncate">Principal DevOps Architect</span>
                                    </div>
                                </div>
                                <div class="employee-meta text-end d-none d-sm-block">
                                    <span class="badge bg-purple-subtle text-purple border border-purple border-opacity-10 fs-xs px-2 rounded-pill">Infrastructure</span>
                                </div>
                            </div>

                            <!-- Employee Row Entry Item -->
                            <div class="employee-row-item p-2 rounded-2 d-flex align-items-center justify-content-between border-bottom border-light pb-3 last-border-none">
                                <div class="d-flex align-items-center gap-3 min-w-0">
                                    <div class="avatar-wrap position-relative flex-shrink-0">
                                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=100&q=80" alt="Security Avatar" class="roster-avatar img-fluid rounded-circle">
                                        <span class="activity-pin break"></span>
                                    </div>
                                    <div class="min-w-0">
                                        <h6 class="text-slate-900 fw-semibold mb-0 fs-sm text-truncate">Elena Rostova</h6>
                                        <span class="text-muted fs-xs d-block text-truncate">SecOps Compliance Analyst</span>
                                    </div>
                                </div>
                                <div class="employee-meta text-end d-none d-sm-block">
                                    <span class="badge bg-danger-subtle text-danger border border-danger border-opacity-10 fs-xs px-2 rounded-pill">Security</span>
                                </div>
                            </div>

                            <!-- Employee Row Entry Item -->
                            <div class="employee-row-item p-2 rounded-2 d-flex align-items-center justify-content-between border-bottom border-light pb-3 last-border-none">
                                <div class="d-flex align-items-center gap-3 min-w-0">
                                    <div class="avatar-wrap position-relative flex-shrink-0">
                                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt="FullStack Avatar" class="roster-avatar img-fluid rounded-circle">
                                        <span class="activity-pin offline"></span>
                                    </div>
                                    <div class="min-w-0">
                                        <h6 class="text-slate-900 fw-semibold mb-0 fs-sm text-truncate">David Kross</h6>
                                        <span class="text-muted fs-xs d-block text-truncate">Senior Fullstack Integrator</span>
                                    </div>
                                </div>
                                <div class="employee-meta text-end d-none d-sm-block">
                                    <span class="badge bg-info-subtle text-info border border-info border-opacity-10 fs-xs px-2 rounded-pill">App Layer</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>

</body>
</html>
</main>
@endsection
