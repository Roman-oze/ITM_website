@extends('layout.dashboard')
@include('include.alerts')
@section('main')
    <div class="container py-4">

        <div class="modern-card">

            <div class="modern-page-header mb-4">
                <div class="d-flex flex-wrap justify-content-between align-items-center">

                    <div>
                        <h3 class="modern-page-title">
                            <i class="fas fa-handshake me-2"></i>
                            Client Management
                        </h3>

                        <p class="modern-page-subtitle mb-0">
                            Manage company clients, logos and website links.
                        </p>
                    </div>

                    <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                        data-bs-target="#createClientModal">

                        <svg height="25" width="25" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                        </svg>

                        <span>Add</span>

                    </button>

                </div>


                <div class="table-responsive">

                    <table class="modern-table">

                        <thead>

                            <tr>

                                <th width="60">#</th>

                                <th width="90">Logo</th>

                                <th>Client Name</th>

                                <th>Website</th>

                                <th width="100">Status</th>

                                <th width="170" class="text-center">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($clients as $client)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <img src="{{ $client->image ? asset('uploads/client/' . $client->image) : asset('admin/images/no-image.png') }}"
                                            width="50" height="50" style="object-fit:cover;border-radius:50%;">

                                    </td>

                                    <td>

                                        <strong>{{ $client->title }}</strong>

                                    </td>

                                    <td>

                                        <a href="{{ $client->link }}" target="_blank" class="client-link">

                                            {{ $client->link }}

                                        </a>

                                    </td>

                                    <td>

                                        @if ($client->status)
                                            <span class="badge bg-success">

                                                Active

                                            </span>
                                        @else
                                            <span class="badge bg-danger">

                                                Inactive

                                            </span>
                                        @endif

                                    </td>

                                    <td>

                                        <div class="d-flex justify-content-center gap-2">

                                            {{-- @can('view client')
                                                <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-info">

                                                    <i class="fas fa-eye"></i>

                                                </a>
                                            @endcan --}}

                                            {{-- @can('update client')
                                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-warning">

                                                <i class="fas fa-edit"></i>

                                            </a>
                                        @endcan --}}
                                            <button type="button" class="btn-modern btn-secondary-modern editClientBtn"
                                                data-id="{{ $client->id }}" data-title="{{ $client->title }}"
                                                data-link="{{ $client->link }}" data-status="{{ $client->status }}"
                                                data-image="{{ $client->image }}" data-bs-toggle="modal"
                                                data-bs-target="#editClientModal">

                                                <i class="fa fa-edit"></i>

                                                Edit

                                            </button>

                                            @can('delete client')
                                                <a href="{{ url('clients/' . $client->id . '/delete') }}"
                                                    onclick="return confirm('Delete this client?')"
                                                   class="btn-modern btn-danger-modern">

                                                    <i class="fa fa-trash"></i> Delete
                                                </a>

                                            @endcan

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6" class="text-center py-5">

                                        <img src="{{ asset('admin/images/no-data.svg') }}" width="150">

                                        <h5 class="mt-3">

                                            No Client Found

                                        </h5>

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>


                @if ($clients->hasPages())
                    <div class="modern-pagination">

                        {{ $clients->links() }}

                    </div>
                @endif

            </div>

        </div>


        {{-- create modal --}}
        <div class="modal fade" id="createClientModal" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">

                            <i class="fas fa-handshake me-2"></i>

                            Create Client

                        </h5>

                        <button class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">
                                        Client Logo
                                    </label>

                                    <input type="file" name="image" class="form-control modern-input">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">
                                        Client Name
                                    </label>

                                    <input type="text" name="title" class="form-control modern-input" required>

                                </div>

                                <div class="col-md-8 mb-3">

                                    <label class="modern-label">
                                        Website
                                    </label>

                                    <input type="url" name="link" class="form-control modern-input">

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label class="modern-label">
                                        Status
                                    </label>

                                    <select name="status" class="form-select modern-input">

                                        <option value="1">

                                            Active

                                        </option>

                                        <option value="0">

                                            Inactive

                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button type="submit" class="btn-save">

                                Save Client

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        {{-- Edit modal --}}
        <div class="modal fade" id="editClientModal" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content modern-modal">

                    <div class="modal-header modern-modal-header">

                        <h5 class="modal-title">

                            <i class="fas fa-edit me-2"></i>

                            Edit Client

                        </h5>

                        <button class="btn-close btn-close-white" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <form id="editClientForm" method="POST" enctype="multipart/form-data">

                        @csrf

                        @method('PUT')

                        <div class="modal-body">

                            <div class="text-center mb-4">

                                <img id="editClientPreview" src="" width="120" height="120"
                                    style="object-fit:cover;border-radius:15px;">

                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">

                                        Change Logo

                                    </label>

                                    <input type="file" name="image" class="form-control modern-input">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="modern-label">

                                        Client Name

                                    </label>

                                    <input type="text" id="edit_title" name="title"
                                        class="form-control modern-input">

                                </div>

                                <div class="col-md-8 mb-3">

                                    <label class="modern-label">

                                        Website

                                    </label>

                                    <input type="url" id="edit_link" name="link"
                                        class="form-control modern-input">

                                </div>

                                <div class="col-md-4 mb-3">

                                    <label class="modern-label">

                                        Status

                                    </label>

                                    <select id="edit_status" name="status" class="form-select modern-input">

                                        <option value="1">

                                            Active

                                        </option>

                                        <option value="0">

                                            Inactive

                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer modern-modal-footer">

                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button type="submit" class="btn-save">

                                Update Client

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <script>
            document.querySelectorAll(".editClientBtn").forEach(button => {

                button.addEventListener("click", function() {

                    document.getElementById("editClientForm").action =
                        "/clients/update/" + this.dataset.id;

                    document.getElementById("edit_title").value = this.dataset.title;

                    document.getElementById("edit_link").value = this.dataset.link;

                    document.getElementById("edit_status").value = this.dataset.status;

                    document.getElementById("editClientPreview").src =
                        "/uploads/client/" + this.dataset.image;

                });

            });
        </script>
    @endsection
