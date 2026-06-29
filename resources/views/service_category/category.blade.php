@extends('layout.app')
@include('include.alerts')
@section('content')
<section class="team-section">

    <div class="section-title mt-5">
        <h2>
            @if(request('category'))
                {{ request('category') }}
            @else
                Service <span>Category</span>
            @endif
        </h2>

        <span class="line"></span>

        <p class="mt-3 text-light">
            Explore trusted organizations, software solutions and digital services.
        </p>

        @if(request('category'))
            <div class="mt-3">

                <span class="badge px-4 py-2"
                    style="background:#47b2e4;font-size:15px;">

                    {{ $serviceCategories->count() }}
                    {{ $serviceCategories->count() == 1 ? 'Organization' : 'Organizations' }}

                </span>

            </div>
        @endif
    </div>

    <div class="container py-5">

        <div class="row justify-content-center g-4">

            @forelse($serviceCategories as $service)

                <div class="col-lg-4 col-md-6">

                    <div class="service-category-card h-100">

                        <div class="service-ribbon {{ strtolower($service->status) }}">
                            {{ strtoupper($service->status) }}
                        </div>

                        <div class="service-header">

                            <img src="{{ asset($service->logo) }}"
                                class="service-logo"
                                alt="{{ $service->organization_name }}">

                            <div class="mt-3">

                                <h4>{{ $service->organization_name }}</h4>

                            </div>

                        </div>

                        <div class="service-body">

                            <div class="service-item">

                                <i class="fas fa-layer-group"></i>

                                <div>

                                    <small>Category</small>

                                    <h6>{{ $service->category }}</h6>

                                </div>

                            </div>

                            <div class="service-item">

                                <i class="fas fa-laptop-code"></i>

                                <div>

                                    <small>Software</small>

                                    <h6>{{ $service->software_name ?: 'N/A' }}</h6>

                                </div>

                            </div>

                            <div class="service-item">

                                <i class="fas fa-globe"></i>

                                <div>

                                    <small>Country</small>

                                    <h6>{{ $service->country }}</h6>

                                </div>

                            </div>

                            <p class="service-description">

                                {{ Str::limit($service->description,120) }}

                            </p>

                        </div>

                        <div class="service-footer">

                            @if($service->website)

                                <a href="{{ $service->website }}"
                                    target="_blank"
                                    class="visit-btn w-100">

                                    <i class="fas fa-globe me-2"></i>

                                    Visit Website

                                </a>

                            @else

                                <button class="visit-btn disabled-btn w-100" disabled>

                                    <i class="fas fa-ban me-2"></i>

                                    Website Not Available

                                </button>

                            @endif

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-lg-8">

                    <div class="text-center py-5">

                        <i class="fas fa-folder-open fa-4x text-info mb-4"></i>

                        <h3 class="text-white">

                            No Service Category Found

                        </h3>

                        <p class="text-light">

                            There are currently no organizations available in this category.

                        </p>

                        <a href="{{ route('service-category') }}"
                            class="visit-btn mt-3">

                            <i class="fas fa-arrow-left me-2"></i>

                            View All Categories

                        </a>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>
@endsection

    <style>
        .service-category-card {

            border: 2px solid #47b2e4;

            border-radius: 16px;

            overflow: hidden;

            transition: .35s;

            height: 100%;

            display: flex;

            flex-direction: column;

            background: transparent;

        }

        .service-category-card:hover {

            transform: translateY(-6px);

            box-shadow: 0 10px 30px rgba(71, 178, 228, .18);

        }

        .service-header {

            text-align: center;

            padding: 30px 25px 20px;

            border-bottom: 1px solid rgba(71, 178, 228, .25);

        }

        .service-logo {

            width: 95px;

            height: 95px;

            object-fit: contain;

            border-radius: 12px;

            background: #fff;

            padding: 10px;

        }

        .service-header h4 {

            color: #47b2e4;

            font-size: 22px;

            font-weight: 700;

            margin-top: 15px;

            margin-bottom: 12px;

        }

        .status {

            display: inline-block;

            padding: 6px 16px;

            border-radius: 30px;

            font-size: 13px;

            font-weight: 600;

        }

        .status.active {

            background: #198754;

            color: #fff;

        }

        .status.inactive {

            background: #dc3545;

            color: #fff;

        }

        .service-body {

            flex: 1;

            padding: 25px;

        }

        .service-item {

            display: flex;

            align-items: center;

            margin-bottom: 18px;

        }

        .service-item i {

            width: 45px;

            height: 45px;

            background: #47b2e4;

            color: #fff;

            border-radius: 50%;

            display: flex;

            justify-content: center;

            align-items: center;

            margin-right: 15px;

            font-size: 18px;

        }

        .service-item small {

            color: #9ca3af;

            display: block;

            margin-bottom: 2px;

        }

        .service-item h6 {

            color: #fff;

            margin: 0;

            font-size: 15px;

            font-weight: 600;

        }

        .service-description {

            margin-top: 20px;

            color: #d1d5db;

            line-height: 1.8;

            text-align: justify;

        }

        .service-footer {

            padding: 20px 25px;

            border-top: 1px solid rgba(71, 178, 228, .25);

            display: flex;

            gap: 12px;

        }

        .visit-btn {

            flex: 1;

            text-align: center;

            padding: 11px;

            border: 2px solid #47b2e4;

            color: #47b2e4;

            border-radius: 8px;

            text-decoration: none;

            transition: .3s;

            font-weight: 600;

        }

        .visit-btn:hover {

            background: #47b2e4;

            color: #fff;

        }

        .details-btn {

            flex: 1;

            border: none;

            background: #47b2e4;

            color: #fff;

            border-radius: 8px;

            font-weight: 600;

            transition: .3s;

        }

        .details-btn:hover {

            background: #3498db;

        }

        @media(max-width:768px) {

            .service-footer {

                flex-direction: column;

            }

        }

        .service-category-card {

            position: relative;

            overflow: hidden;

        }

        /* Ribbon */

        .service-ribbon {

            position: absolute;

            top: 18px;

            right: -42px;

            width: 170px;

            text-align: center;

            padding: 8px 0;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: 1px;

            color: #fff;

            transform: rotate(45deg);

            z-index: 10;

            box-shadow: 0 6px 15px rgba(0, 0, 0, .25);

            text-transform: uppercase;

        }

        .service-ribbon.active {

            background: #22c55e;

        }

        .service-ribbon.inactive {

            background: #ef4444;

        }

        .service-footer {

            padding: 20px 25px;

            border-top: 1px solid rgba(71, 178, 228, .25);

        }

        .visit-btn {

            display: flex;

            justify-content: center;

            align-items: center;

            gap: 8px;

            width: 100%;

            padding: 12px;

            border: 2px solid #47b2e4;

            border-radius: 8px;

            color: #47b2e4;

            background: transparent;

            text-decoration: none;

            font-weight: 600;

            transition: .3s;

        }

        .visit-btn:hover {

            background: #47b2e4;

            color: #fff;

            text-decoration: none;

        }

        .disabled-btn {

            border-color: #6c757d;

            color: #6c757d;

            cursor: not-allowed;

            opacity: .7;

        }

        .disabled-btn:hover {

            background: transparent;

            color: #6c757d;

        }
    </style>
