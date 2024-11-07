@extends('layout.dashboard')

@section('main')
<main class="container mt-2">

    <h1 class="mt-4">Menu Control Panel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Menu list </li>
    </ol>
    <br>
 <div class="card">
    <div class="card-header">

        <a href="{{route('menus.create')}}" class="btn btn-dark  float-left   "> <i class="fas fa-plus-circle"></i> Create Menu</a>
        <a href="{{route('menu-permissions.create')}}" class="btn btn-dark  float-end   "> <i class="fa-solid fa-key"></i> Assign Menu</a>
    </div>
 </div>

    <div class="row m-2">
        @foreach ($menus as $menu)
            <div class="col-md-6 mb-4">
                <div class="card-penel shadow-sm animated-card ">
                    <div class="card-header d-flex justify-content-between align-items-center p-3 menu-bg">
                        <h5 class="mb-0">
                            <i class="{{ $menu->icon }}"></i> {{ $menu->name }}
                        </h5>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#menu{{ $menu->id }}" aria-expanded="false" aria-controls="menu{{ $menu->id }}">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            @if ($menu->permissions->where('can_delete', true)->isNotEmpty())
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="d-inline ms-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger p-0" title="Delete Menu">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="collapse" id="menu{{ $menu->id }}">
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <!-- Action Buttons with Permission Check -->
                                @if ($menu->permissions->where('can_create', true)->isNotEmpty())
                                    <a href="{{ route('menu.create', $menu->id) }}" class="btn btn-outline-success">Create <i class="fas fa-plus-circle"></i></a>
                                @else
                                    <span class="text-muted">No Create Access</span>
                                @endif

                                @if ($menu->permissions->where('can_edit', true)->isNotEmpty())
                                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-outline-warning">Edit <i class="fas fa-edit"></i></a>
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

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $child->name }}
                                                <span>
                                                 @can('edit')
                                                    @if ($child->permissions->where('can_edit', true)->isNotEmpty())
                                                        <a href="{{ route('menus.edit', $child->id) }}" class="btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i></a>
                                                 @endif
                                                    @endcan
                                                    @can('delete')
                                                    @if ($child->permissions->where('can_delete', true)->isNotEmpty())
                                                        <form action="{{ route('menus.destroy', $child->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    @endif
                                                    @endcan
                                                </span>
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
