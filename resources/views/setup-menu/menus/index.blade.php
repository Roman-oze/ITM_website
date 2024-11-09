@extends('layout.dashboard')

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
        <a href="{{route('menus.create')}}" class="btn btn-dark rounded-pill shadow" id="upload-form">
            <i class="fas fa-plus-circle"></i> Add Menu
        </a>
    </div>


    <div class="row m-2">
        @foreach ($menus as $menu)
            <div class="col-md-6 mb-4">
                <div class="card-penel shadow-sm animated-card ">
                    <div class="card-header d-flex justify-content-between align-items-center p-3 menu-bg rounded">
                        <h5 class="mb-0">
                            <i class="{{ $menu->icon }}"></i> {{ $menu->name }}
                        </h5>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#menu{{ $menu->id }}" aria-expanded="false" aria-controls="menu{{ $menu->id }}">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                          @can('delete user')
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="d-inline ms-2">
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
                                    <a href="{{ route('menus.create', $menu->id) }}" class="btn btn-outline-success"> <i class="fas fa-plus-circle"></i></a>
                                @else
                                    <span class="text-muted">No Create Access</span>
                                @endif
                                @if ($menu->permissions->where('can_edit', true)->isNotEmpty())
                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-outline-info"> <i class="fas fa-edit"></i></a>
                                @else
                                <span class="text-muted">No Edit Access</span>
                                @endif
                                </div>

                            <!-- Submenu List -->
                            @if ($menu->children->isNotEmpty())
                                <div class="mt-4 p-2">
                                    <h6>Submenus:</h6>
                                    <ul class="list-group">
                                        @foreach ($menu->children as $child)
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <span>{{ $child->name }}</span>
                                            <div class="btn-group">
                                                @can('update user')
                                                    <a href="{{ route('menus.edit', $child->id) }}" class=" btn-outline-info"><i class="fa fa-edit"></i></a>
                                                @endcan
                                                @can('delete user')
                                                    <form action="{{ route('menus.destroy', $child->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
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
