@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')

@section('main')
<main>

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #060B23;
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
            border-color: #209DD8;
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
    </style>

    <div class="dashboard">

        <!-- HEADER -->
        <div class="header">
            <h2>Welcome Back 👋</h2>
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
        <div class="grid grid-3">

            <!-- BUDGET -->
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

                <div class="bar">
                    <div class="bar-fill"></div>
                </div>
            </div>

            <!-- GOVT CLIENT -->
            <div class="big-card">
                <h4>Government Clients</h4>

                <div class="list">
                    <span>Total Clients</span>
                    <b>30</b>
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

            <!-- PRIVATE CLIENT -->
            <div class="big-card">
                <h4>Private Clients</h4>

                <div class="list">
                    <span>Total Clients</span>
                    <b>90</b>
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

        </div>

    </div>
@endsection
