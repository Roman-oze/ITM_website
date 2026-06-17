@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')
@section('main')
    <main>

        <div class="container-fluid px-4">
            <h2 class="mt-4">Menu Control Panel</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Menu list</li>
            </ol>

            <!-- Add Button -->
            <div class="d-flex  mb-3">
                <a href="{{ route('menus.create') }}" class="btn btn-dark rounded-pill shadow" id="upload-form">
                    <i class="fas fa-plus-circle"></i> Add Menu
                </a>
            </div>


            <div class="row m-2">
                @foreach ($menus as $menu)
                    <div class="col-md-6 mb-4">
                        <div class="card-penel shadow-sm animated-card ">
                            <div
                                class="card-header d-flex justify-content-between align-items-center p-3 menu-bg rounded shadow">
                                <h5 class="mb-0">
                                    <i class="{{ $menu->icon }}"></i> {{ $menu->name }}
                                </h5>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#menu{{ $menu->id }}" aria-expanded="false"
                                        aria-controls="menu{{ $menu->id }}">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                    @can('delete user')
                                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?');" class="d-inline ms-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-2" title="Delete Menu">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </div>
                            <div class="collapse" id="menu{{ $menu->id }}">
                                <div class="card-body">
                                    <div class="d-flex justify-content-around m-2 p-1">
                                        <!-- Action Buttons with Permission Check -->
                                        @if ($menu->permissions->where('can_create', true)->isNotEmpty())
                                            <a href="{{ route('menus.create', $menu->id) }}"
                                                class="btn btn-outline-success"> <i class="fas fa-plus-circle"></i></a>
                                        @else
                                            <span class="text-muted">No Create Access</span>
                                        @endif
                                        @if ($menu->permissions->where('can_edit', true)->isNotEmpty())
                                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-outline-info"> <i
                                                    class="fas fa-edit"></i></a>
                                        @else
                                            <span class="text-muted">No Edit Access</span>
                                        @endif
                                    </div>

                                    <!-- Submenu List -->
                                    @if ($menu->children->isNotEmpty())
                                        <div class="mt-4">

                                            <h6 class="submenu-title mb-3">
                                                <i class="fas fa-layer-group me-2"></i>
                                                Submenus
                                            </h6>

                                            <div class="modern-submenu-card">

                                                @foreach ($menu->children as $child)
                                                    <div class="modern-submenu-item">

                                                        <div class="d-flex align-items-center">

                                                            <span class="submenu-dot"></span>

                                                            <span class="submenu-name">
                                                                {{ $child->name }}
                                                            </span>

                                                        </div>

                                                        <div class="submenu-actions">

                                                            @can('update user')
                                                                <a href="{{ route('menus.edit', $child->id) }}"
                                                                    class="submenu-btn edit-btn">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            @endcan

                                                            @can('delete user')
                                                                <form action="{{ route('menus.destroy', $child->id) }}"
                                                                    method="POST" onsubmit="return confirm('Are you sure?');"
                                                                    class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" class="submenu-btn delete-btn">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            @endcan

                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

    </main>
@endsection
<style>
    /* Submenu Section */
    .submenu-title {
        color: #0f172a;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: .5px;
    }

    /* Container */
    .modern-submenu-card {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    /* Item */
    .modern-submenu-item {
        display: flex;
        justify-content: space-between;
        align-items: center;

        padding: 12px 15px;

        background: #0f172a;
        border: 1px solid #209DD8;
        border-radius: 12px;
        color: white;
        transition: .3s ease;
    }

    .modern-submenu-item:hover {
        background: #0f172a;
        border-color: #209DD8;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(15, 23, 42, .08);
    }

    /* Dot */
    .submenu-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #0f172a;
        margin-right: 12px;
        flex-shrink: 0;
    }

    /* Name */
    .submenu-name {
        font-size: 14px;
        font-weight: 600;
        color: #e7eaef;
    }

    /* Actions */
    .submenu-actions {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* Buttons */
    .submenu-btn {
        width: 34px;
        height: 34px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: none;
        border-radius: 8px;

        text-decoration: none;

        transition: .3s ease;
    }

    /* Edit */
    .edit-btn {
        background: #e0f2fe;
        color: #0284c7;
    }

    .edit-btn:hover {
        background: #0284c7;
        color: #fff;
    }

    /* Delete */
    .delete-btn {
        background: #fee2e2;
        color: #dc2626;
    }

    .delete-btn:hover {
        background: #dc2626;
        color: #fff;
    }
</style>
