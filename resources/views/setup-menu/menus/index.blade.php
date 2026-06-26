@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')
@section('main')
    <main>

        <div class="container py-4">

            <div class="modern-card">

                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Event Management</h4>
                    {{--
                    <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                        data-bs-target="#createMenuModal" id="createMenuModal">

                        <svg height="25" width="25" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor" />
                        </svg>

                        <span>Add</span>

                    </button> --}}

                    <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                        data-bs-target="#createMenuModal">

                        <svg height="25" width="25" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor" />
                        </svg>

                        <span>Add</span>

                    </button>


                </div>



                <div class="row m-2" id="menuAccordion">

                    @foreach ($menus->where('parent_id', null) as $menu)
                        <div class="col-md-6 mb-4">

                            <div class="card-penel shadow-sm animated-card">

                                <div
                                    class="card-header d-flex justify-content-between align-items-center p-3 menu-bg rounded shadow">

                                    <h5 class="mb-0">
                                        <i class="{{ $menu->icon }}"></i>
                                        {{ $menu->name }}
                                    </h5>

                                    <div class="d-flex align-items-center">

                                        <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseMenu{{ $menu->id }}" aria-expanded="false"
                                            aria-controls="collapseMenu{{ $menu->id }}">

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

                                <div class="collapse" id="collapseMenu{{ $menu->id }}" data-bs-parent="#menuAccordion">

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
                                                {{-- <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-outline-info"> <i
                                                    class="fas fa-edit"></i></a> --}}
                                                <button type="button" class="btn btn-outline-info editMenuBtn"
                                                    data-bs-toggle="modal" data-bs-target="#editMenuModal"
                                                    data-id="{{ $menu->id }}" data-name="{{ $menu->name }}"
                                                    data-icon="{{ $menu->icon }}" data-link="{{ $menu->link }}"
                                                    data-parent="{{ $menu->parent_id }}" data-order="{{ $menu->order }}">

                                                    <i class="fas fa-edit"></i>

                                                </button>
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
                                                                    {{-- <a href="{{ route('menus.edit', $child->id) }}"
                                                                    class="submenu-btn edit-btn">
                                                                    <i class="fa fa-edit"></i>
                                                                </a> --}}
                                                                    <button type="button"
                                                                        class="submenu-btn edit-btn editMenuBtn"
                                                                        data-bs-toggle="modal" data-bs-target="#editMenuModal"
                                                                        data-id="{{ $child->id }}"
                                                                        data-name="{{ $child->name }}"
                                                                        data-icon="{{ $child->icon }}"
                                                                        data-link="{{ $child->link }}"
                                                                        data-parent="{{ $child->parent_id }}"
                                                                        data-order="{{ $child->order }}">

                                                                        <i class="fa fa-edit"></i>

                                                                    </button>
                                                                @endcan

                                                                @can('delete user')
                                                                    <form action="{{ route('menus.destroy', $child->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Are you sure?');"
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


                <div class="modal fade" id="editMenuModal" tabindex="-1">

                    <div class="modal-dialog modal-lg modal-dialog-centered">

                        <div class="modal-content modern-modal">

                            <div class="modal-header modern-modal-header">

                                <h5 class="modal-title">

                                    <i class="fas fa-edit me-2"></i>

                                    Update Menu

                                </h5>

                                <button class="btn-close btn-close-white" data-bs-dismiss="modal">
                                </button>

                            </div>

                            <form id="editMenuForm" method="POST">

                                @csrf
                                @method('PUT')

                                <div class="modal-body">

                                    <div class="row">

                                        <div class="col-md-6 mb-3">

                                            <label class="modern-label">
                                                Menu Name
                                            </label>

                                            <input id="edit_name" name="name" class="form-control modern-input"
                                                required>

                                        </div>

                                        <div class="col-md-6 mb-3">

                                            <label class="modern-label">
                                                Icon
                                            </label>

                                            <input id="edit_icon" name="icon" class="form-control modern-input">

                                        </div>

                                        <div class="col-12 mb-3">

                                            <label class="modern-label">
                                                Link
                                            </label>

                                            <input id="edit_link" name="link" class="form-control modern-input">

                                        </div>

                                        <div class="col-md-6 mb-3">

                                            <label class="modern-label">
                                                Parent Menu
                                            </label>

                                            <select id="edit_parent" name="parent_id" class="form-select modern-input">

                                                <option value="">
                                                    No Parent
                                                </option>

                                                @foreach ($menus as $parentMenu)
                                                    <option value="{{ $parentMenu->id }}">
                                                        {{ $parentMenu->name }}
                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-md-6 mb-3">

                                            <label class="modern-label">
                                                Sort Order
                                            </label>

                                            <input id="edit_order" type="number" name="order"
                                                class="form-control modern-input">

                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer modern-modal-footer">

                                    <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                                        Cancel

                                    </button>

                                    <button class="btn-save" type="submit">

                                        <i class="fas fa-save me-2"></i>

                                        Update Menu

                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>

            <!-- Create Menu Modal -->
            <div class="modal fade" id="createMenuModal" tabindex="-1">

                <div class="modal-dialog modal-lg modal-dialog-centered">

                    <div class="modal-content modern-modal">

                        <!-- Header -->
                        <div class="modal-header modern-modal-header">

                            <h5 class="modal-title">

                                <i class="fas fa-bars me-2"></i>

                                Create Menu

                            </h5>

                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                            </button>

                        </div>

                        <!-- Form -->
                        <form action="{{ route('menu.store') }}" method="POST">

                            @csrf

                            <div class="modal-body">

                                <div class="row">

                                    <!-- Menu Name -->
                                    <div class="col-md-6 mb-3">

                                        <label class="modern-label">
                                            Menu Name
                                        </label>

                                        <input type="text" name="name" class="form-control modern-input"
                                            placeholder="Enter menu name" required>

                                    </div>

                                    <!-- Icon -->
                                    <div class="col-md-6 mb-3">

                                        <label class="modern-label">
                                            Font Awesome Icon
                                        </label>

                                        <input type="text" name="icon" class="form-control modern-input"
                                            placeholder="fa-solid fa-house" required>

                                    </div>

                                    <!-- Link -->
                                    <div class="col-12 mb-3">

                                        <label class="modern-label">
                                            Menu Link
                                        </label>

                                        <input type="text" name="link" class="form-control modern-input"
                                            placeholder="/dashboard">

                                    </div>

                                    <!-- Parent -->
                                    <div class="col-md-6 mb-3">

                                        <label class="modern-label">
                                            Parent Menu
                                        </label>

                                        <select name="parent_id" class="form-select modern-input">

                                            <option value="">
                                                No Parent (Top Level)
                                            </option>

                                            @foreach ($menus as $menu)
                                                <option value="{{ $menu->id }}">
                                                    {{ $menu->name }}
                                                </option>
                                            @endforeach

                                        </select>

                                        <small class="text-muted">
                                            Leave empty to create a main menu.
                                        </small>

                                    </div>

                                    <!-- Sort -->
                                    <div class="col-md-6 mb-3">

                                        <label class="modern-label">
                                            Sort Order
                                        </label>

                                        <input type="number" name="order" class="form-control modern-input"
                                            placeholder="1">

                                    </div>

                                </div>

                            </div>

                            <!-- Footer -->
                            <div class="modal-footer modern-modal-footer">

                                <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                                    Cancel

                                </button>

                                <button type="submit" class="btn-save">

                                    <i class="fas fa-save me-2"></i>

                                    Create Menu

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
    </main>

    <script>
        document.querySelectorAll('.editMenuBtn').forEach(function(button) {

            button.addEventListener('click', function() {

                const id = this.dataset.id;

                document.getElementById('editMenuForm').action =
                    "{{ url('menus') }}/" + id;

                document.getElementById('edit_name').value =
                    this.dataset.name || '';

                document.getElementById('edit_icon').value =
                    this.dataset.icon || '';

                document.getElementById('edit_link').value =
                    this.dataset.link || '';

                document.getElementById('edit_parent').value =
                    this.dataset.parent || '';

                document.getElementById('edit_order').value =
                    this.dataset.order || '';

            });

        });

        // sub menu
        document.addEventListener('click', function(e) {

            const button = e.target.closest('.editMenuBtn');

            if (!button) return;

            document.getElementById('editMenuForm').action =
                "{{ url('menus') }}/" + button.dataset.id;

            document.getElementById('edit_name').value =
                button.dataset.name || '';

            document.getElementById('edit_icon').value =
                button.dataset.icon || '';

            document.getElementById('edit_link').value =
                button.dataset.link || '';

            document.getElementById('edit_parent').value =
                button.dataset.parent || '';

            document.getElementById('edit_order').value =
                button.dataset.order || '';

        });
    </script>
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
