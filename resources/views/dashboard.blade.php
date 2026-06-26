@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')

@section('main')
    <main>

        <style>
            body {
                margin: 0;
                font-family: 'Inter', sans-serif;
                color: #fff;
            }

            /* ===== CONTAINER ===== */
            .dashboard {
                padding: 40px;
            }

            /* ===== HEADER ===== */
            .header {
                margin-bottom: 30px;
            }

            .header h2 {
                margin: 0;
                font-size: 26px;
            }

            .header p {
                margin-top: 5px;
                color: #9aa4b2;
                font-size: 13px;
            }

            /* ===== GRID ===== */
            .grid {
                display: grid;
                gap: 18px;
            }

            /* ===== TOP CARDS ===== */
            .grid-4 {
                grid-template-columns: repeat(4, 1fr);
            }

            .card {
                background: rgba(255, 255, 255, 0.04);
                border: 1px solid rgba(255, 255, 255, 0.08);
                padding: 20px;
                border-radius: 14px;
                backdrop-filter: blur(10px);
                transition: 0.3s;
            }

            .card:hover {
                transform: translateY(-5px);
                border-color: #3b82f6;
            }

            /* ===== CARD CONTENT ===== */
            .card i {
                font-size: 18px;
                margin-bottom: 10px;
                color: #209DD8;
            }

            .card h3 {
                margin: 0;
                font-size: 22px;
                color: white;
            }

            .card span {
                font-size: 13px;
                color: #9aa4b2;
            }

            /* ===== SECOND ROW ===== */
            .grid-3 {
                grid-template-columns: repeat(3, 1fr);
                margin-top: 20px;
            }

            .big-card {
                background: rgba(255, 255, 255, 0.04);
                border: 1px solid rgba(255, 255, 255, 0.08);
                padding: 25px;
                border-radius: 14px;
                backdrop-filter: blur(10px);
            }

            .big-card h4 {
                margin: 0 0 15px 0;
                font-size: 16px;
                color: #9aa4b2;
            }

            /* PROGRESS BAR */
            .bar {
                width: 100%;
                height: 10px;
                background: #1b2238;
                border-radius: 10px;
                overflow: hidden;
                margin-top: 10px;
            }

            .bar-fill {
                height: 100%;
                background: linear-gradient(135deg, #209DD8, #00d4a6);
                width: 65%;
            }

            /* LIST STYLE */
            .list {
                display: flex;
                justify-content: space-between;
                padding: 10px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
                font-size: 13px;
                color: #cbd5e1;
            }

            .list:last-child {
                border-bottom: none;
            }

            /* RESPONSIVE */
            @media(max-width:1000px) {
                .grid-4 {
                    grid-template-columns: repeat(2, 1fr);
                }

                .grid-3 {
                    grid-template-columns: 1fr;
                }
            }

            .card-head {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 18px;
            }

            /* Badges */

            .badge {
                padding: 4px 10px;
                border-radius: 20px;
                font-size: 12px;
                font-weight: 600;
            }

            .badge.success {
                background: #153c2f;
                color: #209DD8;
            }

            .badge.primary {
                background: #1e3a8a;
                color: #209DD8;
            }

            .badge.info {
                background: #083344;
                color: #22d3ee;
            }

            /* Circular Visualization */

            .chart-circle {
                width: 90px;
                height: 90px;
                margin: 0 auto 20px;

                border-radius: 50%;

                display: flex;
                align-items: center;
                justify-content: center;

                font-size: 24px;
                font-weight: 700;
            }

            .chart-circle.government {
                background: conic-gradient(#38bdf8 75%, #263047 0);
            }

            .chart-circle.private {
                background: conic-gradient(#3b82f6 82%, #263047 0);
            }

            .chart-circle span {
                width: 70px;
                height: 70px;

                border-radius: 50%;

                background: #161d2d;

                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Avatar Group */

            .avatar-group {
                display: flex;
                margin-bottom: 18px;
            }

            .avatar {
                width: 42px;
                height: 42px;

                border-radius: 50%;

                background: #3b82f6;
                color: #fff;

                display: flex;
                align-items: center;
                justify-content: center;

                font-weight: 700;

                border: 3px solid #161d2d;

                margin-left: -10px;
            }

            .avatar:first-child {
                margin-left: 0;
            }

            .progress-text {
                margin-top: 10px;
                text-align: right;
                color: #209DD8;
            }

            /* THIRD ROW */

            .activity-list {
                display: flex;
                flex-direction: column;
                gap: 18px;
            }

            .activity-item {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .activity-item span {
                margin-left: auto;
                color: #94a3b8;
                font-size: 13px;
            }

            .activity-item h6 {
                margin: 0;
                color: #fff;
                font-size: 14px;
            }

            .activity-item small {
                color: #94a3b8;
            }

            .activity-icon {
                width: 42px;
                height: 42px;
                border-radius: 12px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #209DD8;
            }


            .activity-icon.primary {
                border: 2px solid #209DD8;
            }

            /* Progress */

            .status-item {
                display: flex;
                justify-content: space-between;
                margin-top: 18px;
                margin-bottom: 8px;
            }

            .progress-line {
                width: 100%;
                height: 8px;
                background: #1e293b;
                border-radius: 20px;
                overflow: hidden;
            }

            .progress-fill {
                height: 100%;
                border-radius: 20px;
            }



            .progress-fill.primary {
                background: #209DD8;
            }


            /* Quick Actions */

            .quick-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 18px;
                margin-top: 15px;
            }

            .quick-btn {
                background: #111827;
                border: 1px solid rgba(255, 255, 255, .08);
                border-radius: 14px;
                padding: 22px;
                text-align: center;
                text-decoration: none;
                color: #cbd5e1;
                transition: .3s;
            }

            .quick-btn:hover {
                background: #0f172a;
                border-color: #3b82f6;
                color: #ced5d8;
            }

            .quick-btn i {
                font-size: 24px;
                margin-bottom: 12px;
                display: block;
            }

            .quick-btn span {
                display: block;
                font-size: 14px;
            }

            .view-all {
                color: #3b82f6;
                text-decoration: none;
                font-size: 13px;
            }
        </style>

        <div class="dashboard">

            <!-- HEADER -->
            <div class="header">
                <h2>Welcome Back</h2>
                <p>Here is your system overview dashboard</p>
            </div>

            <!-- TOP CARDS -->
            <div class="grid grid-4">

                <div class="card">
                    <i class="fa fa-users"></i>
                    <h3>120</h3>
                    <span>Clients</span>
                </div>

                <div class="card">
                    <i class="fa fa-diagram-project"></i>
                    <h3>45</h3>
                    <span>Projects</span>
                </div>

                <div class="card">
                    <i class="fa fa-spinner"></i>
                    <h3>18</h3>
                    <span>Running</span>
                </div>

                <div class="card">
                    <i class="fa fa-file-pen"></i>
                    <h3>9</h3>
                    <span>Draft</span>
                </div>

            </div>

            <!-- SECOND ROW -->
            <div class="grid grid-4 mt-3">

                <!-- Budget -->
                <div class="big-card">
                    <h4>Budget Overview</h4>

                    <div class="list">
                        <span>Total Budget</span>
                        <b>$120,000</b>
                    </div>

                    <div class="list">
                        <span>Used</span>
                        <b>$78,000</b>
                    </div>

                    <div class="list">
                        <span>Remaining</span>
                        <b>$42,000</b>
                    </div>

                    <div class="bar mt-3">
                        <div class="bar-fill" style="width:65%"></div>
                    </div>

                    <div class="progress-text">
                        <small>65% Budget Utilized</small>
                    </div>
                </div>

                <!-- Government -->
                <div class="big-card">

                    <div class="card-head">
                        <h4>Government Clients</h4>
                        <span class="badge success">+8%</span>
                    </div>

                    <div class="chart-circle government">
                        <span>30</span>
                    </div>

                    <div class="list">
                        <span>Active Projects</span>
                        <b>12</b>
                    </div>

                    <div class="list">
                        <span>Completed</span>
                        <b>18</b>
                    </div>

                </div>

                <!-- Private -->
                <div class="big-card">

                    <div class="card-head">
                        <h4>Private Clients</h4>
                        <span class="badge primary">+15%</span>
                    </div>

                    <div class="chart-circle private">
                        <span>90</span>
                    </div>

                    <div class="list">
                        <span>Active Projects</span>
                        <b>33</b>
                    </div>

                    <div class="list">
                        <span>Completed</span>
                        <b>57</b>
                    </div>

                </div>

                <!-- Team -->
                <div class="big-card">

                    <div class="card-head">
                        <h4>Team Members</h4>
                        <span class="badge info">Online</span>
                    </div>

                    <div class="avatar-group">

                        <div class="avatar">R</div>
                        <div class="avatar">A</div>
                        <div class="avatar">S</div>
                        <div class="avatar">J</div>
                        <div class="avatar">+37</div>

                    </div>

                    <div class="list">
                        <span>Developers</span>
                        <b>18</b>
                    </div>

                    <div class="list">
                        <span>Designers</span>
                        <b>6</b>
                    </div>

                    <div class="list">
                        <span>QA Engineers</span>
                        <b>5</b>
                    </div>

                    <div class="list">
                        <span>Total Members</span>
                        <b>41</b>
                    </div>

                </div>

            </div>


            <!-- THIRD ROW -->
            <div class="grid grid-3 mt-3">

                <!-- Recent Activities -->
                <div class="big-card">

                    <div class="card-head">
                        <h4>Recent Activities</h4>
                        <a href="#" class="view-all">View All</a>
                    </div>

                    <div class="activity-list">

                        <div class="activity-item">
                            <div class="activity-icon primary">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div>
                                <h6>New Client Added</h6>
                                <small>ABC Corporation joined today</small>
                            </div>
                            <span>2m</span>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon primary">
                                <i class="fa-solid fa-folder-open"></i>
                            </div>
                            <div>
                                <h6>Project Updated</h6>
                                <small>CRM System progress updated</small>
                            </div>
                            <span>1h</span>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon primary">
                                <i class="fa-solid fa-user-check"></i>
                            </div>
                            <div>
                                <h6>Employee Joined</h6>
                                <small>New Software Engineer</small>
                            </div>
                            <span>Today</span>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon primary">
                                <i class="fa-solid fa-wallet"></i>
                            </div>
                            <div>
                                <h6>Budget Approved</h6>
                                <small>Finance department approved budget</small>
                            </div>
                            <span>Yesterday</span>
                        </div>

                    </div>

                </div>

                <!-- Project Status -->
                <div class="big-card">

                    <div class="card-head">
                        <h4>Project Status</h4>
                    </div>

                    <div class="status-item">
                        <span>Completed</span>
                        <b>25</b>
                    </div>

                    <div class="progress-line">
                        <div class="progress-fill primary" style="width:65%"></div>
                    </div>

                    <div class="status-item">
                        <span>Running</span>
                        <b>18</b>
                    </div>

                    <div class="progress-line">
                        <div class="progress-fill primary" style="width:45%"></div>
                    </div>

                    <div class="status-item">
                        <span>Pending</span>
                        <b>9</b>
                    </div>

                    <div class="progress-line">
                        <div class="progress-fill primary" style="width:20%"></div>
                    </div>

                    <div class="status-item">
                        <span>Cancelled</span>
                        <b>2</b>
                    </div>

                    <div class="progress-line">
                        <div class="progress-fill primary" style="width:8%"></div>
                    </div>

                </div>

                <!-- Quick Actions -->
                <div class="big-card">

                    <div class="card-head">
                        <h4>Quick Actions</h4>
                    </div>

                    <div class="quick-grid">

                        <a href="#" class="quick-btn">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Add Client</span>
                        </a>

                        <a href="#" class="quick-btn">
                            <i class="fa-solid fa-folder-plus"></i>
                            <span>New Project</span>
                        </a>

                        <a href="#" class="quick-btn">
                            <i class="fa-solid fa-users"></i>
                            <span>Employees</span>
                        </a>

                        <a href="#" class="quick-btn">
                            <i class="fa-solid fa-chart-column"></i>
                            <span>Reports</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>
    @endsection
