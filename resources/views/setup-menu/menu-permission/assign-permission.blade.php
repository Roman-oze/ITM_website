@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4 text-dark">Assign Menu Permission</h2>
        <ol class="breadcrumb mb-4 bg-light rounded shadow-sm p-3">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Menu Permissions List</li>
        </ol>

        <!-- Add Button Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('menu-permission.index') }}" class="btn btn-primary rounded-pill shadow-sm">
                <i class="fa-solid fa-list"></i> Menu Permission List
            </a>
            <a href="{{ route('menu.display') }}" class="btn btn-secondary rounded-pill shadow-sm">
                <i class="fa-solid fa-bars-staggered"></i> Display Menu
            </a>
        </div>

        <!-- Form Section -->
        <form action="{{ route('menu-permission.store') }}" method="POST" class="p-4 bg-white rounded shadow-lg">
            @csrf

            <!-- Menu Multi-select Dropdown -->
            <div class="form-group mb-4">
                <label for="menu_ids" class="font-weight-bold text-secondary">Menu Name</label>
                <select name="menu_ids[]" id="menu_ids" class="form-control custom-select shadow-sm" multiple required>
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}" data-submenus="{{ json_encode($menu->submenus) }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Select one or more menus for this role.</small>
            </div>

            <!-- Submenu Multi-select Dropdown (initially hidden) -->
            <div class="form-group mb-4" id="submenu-section" style="display: none;">
                <label for="submenu_ids" class="font-weight-bold text-secondary">Sub-Menu Name</label>
                <select name="submenu_ids[]" id="submenu_ids" class="form-control custom-select shadow-sm" multiple>
                    <!-- Submenu options will be populated here -->
                </select>
                <small class="form-text text-muted">Select one or more sub-menus for this role.</small>
            </div>

            <!-- Role Multi-select Dropdown -->
            <div class="form-group mb-4">
                <label for="role_ids" class="font-weight-bold text-secondary">Roles</label>
                <select name="role_ids[]" id="role_ids" class="form-control custom-select shadow-sm" multiple required>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Select one or more roles for the permissions.</small>
            </div>

            <!-- Permissions Checkboxes -->
            <div class="form-group mb-4">
                <label class="font-weight-bold text-secondary">Permissions</label>
                <div class="card p-3 border-0 shadow-sm rounded bg-light">
                    <div class="d-flex flex-wrap justify-content-start">
                        <!-- Create Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_create]" id="can_create" value="1">
                            <label class="form-check-label badge bg-secondary text-white px-3 py-1" for="can_create">Create</label>
                        </div>
                        <!-- Edit Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_edit]" id="can_edit" value="1">
                            <label class="form-check-label badge bg-success text-white px-3 py-1" for="can_edit">Edit</label>
                        </div>
                        <!-- Update Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_update]" id="can_update" value="1">
                            <label class="form-check-label badge bg-info text-white px-3 py-1" for="can_update">Update</label>
                        </div>
                        <!-- Delete Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_delete]" id="can_delete" value="1">
                            <label class="form-check-label badge bg-danger text-white px-3 py-1" for="can_delete">Delete</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark px-5 rounded-pill shadow-sm">Save Permissions</button>
            </div>
        </form>
    </div>
</main>

@endsection

@push('scripts')
<script>
    // JavaScript to populate the sub-menu dropdown when a main menu is selected
    document.getElementById('menu_ids').addEventListener('change', function() {
        var selectedMenu = this.options[this.selectedIndex];
        var submenus = JSON.parse(selectedMenu.getAttribute('data-submenus'));

        var submenuSelect = document.getElementById('submenu_ids');
        submenuSelect.innerHTML = ''; // Clear existing options

        if(submenus.length > 0) {
            // Show the submenu section
            document.getElementById('submenu-section').style.display = 'block';

            // Populate submenus
            submenus.forEach(function(submenu) {
                var option = document.createElement('option');
                option.value = submenu.id;
                option.textContent = submenu.name;
                submenuSelect.appendChild(option);
            });
        } else {
            // Hide the submenu section if no submenus are available
            document.getElementById('submenu-section').style.display = 'none';
        }
    });
</script>
@endpush
