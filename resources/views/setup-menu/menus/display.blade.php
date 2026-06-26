@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')
@section('main')
    <div class="container-fluid px-4">
        <h2 class="mt-4">Menu Control Panel</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Menu list</li>
        </ol>

        <!-- Add Button -->
        <div class="d-flex  mb-3">
            <a href="{{ route('menus.create') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Menu
            </a>
        </div>


        <div class="card-body p-3 p-md-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Menu</th>
                            @can('manage-user')
                                <th scope="col" class="text-center">Actions</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->name }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center flex-wrap gap-1">
                                        @can('update user')
                                            <button class="btn-modern btn-secondary-modern editMenuBtn" data-bs-toggle="modal"
                                                data-bs-target="#editMenuModal" data-id="{{ $menu->id }}"
                                                data-name="{{ $menu->name }}" data-icon="{{ $menu->icon }}"
                                                data-link="{{ $menu->link }}" data-parent="{{ $menu->parent_id }}"
                                                data-order="{{ $menu->order }}">

                                                <i class="fa fa-edit"></i>
                                                Edit

                                            </button>
                                        @endcan

                                        @can('delete user')
                                            <button
                                                onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('menus/' . $menu->id . '/delete') }}' }"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ===========================
            EDIT MENU MODAL
    =========================== -->

    <div class="modal fade" id="editMenuModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">

                        <i class="fas fa-pen-to-square me-2"></i>

                        Update Menu

                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <form id="editMenuForm" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="row">

                            <!-- Menu Name -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Menu Name

                                </label>

                                <input type="text" id="edit_name" name="name" class="form-control modern-input"
                                    required>

                            </div>

                            <!-- Icon -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Icon

                                </label>

                                <input type="text" id="edit_icon" name="icon" class="form-control modern-input"
                                    placeholder="fa-solid fa-house">

                            </div>

                            <!-- Link -->
                            <div class="col-md-12 mb-3">

                                <label class="modern-label">

                                    Link

                                </label>

                                <input type="text" id="edit_link" name="link" class="form-control modern-input"
                                    placeholder="/dashboard">

                            </div>

                            <!-- Parent -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Parent Menu

                                </label>

                                <select id="edit_parent" name="parent_id" class="form-select modern-input">

                                    <option value="">
                                        No Parent (Top Menu)
                                    </option>

                                    @foreach ($menus as $parentMenu)
                                        <option value="{{ $parentMenu->id }}">
                                            {{ $parentMenu->name }}
                                        </option>
                                    @endforeach

                                </select>

                            </div>

                            <!-- Order -->
                            <div class="col-md-6 mb-3">

                                <label class="modern-label">

                                    Sort Order

                                </label>

                                <input type="number" id="edit_order" name="order" class="form-control modern-input">

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button type="submit" class="btn-save">

                            <i class="fas fa-save me-2"></i>

                            Update Menu

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
    </main>

    <script>
        document.querySelectorAll('.editMenuBtn').forEach(button => {

            button.addEventListener('click', function() {

                let id = this.dataset.id;

                document.getElementById('editMenuForm').action =
                    "/menus/" + id;

                document.getElementById('edit_name').value =
                    this.dataset.name;

                document.getElementById('edit_icon').value =
                    this.dataset.icon;

                document.getElementById('edit_link').value =
                    this.dataset.link;

                document.getElementById('edit_parent').value =
                    this.dataset.parent;

                document.getElementById('edit_order').value =
                    this.dataset.order;

            });

        });
    </script>
@endsection
