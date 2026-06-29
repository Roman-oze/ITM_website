@extends('layout.dashboard')

@include('include.alerts')

@section('main')
    <div class="container py-4">

        <div class="modern-card">

            {{-- Header --}}
            <div class="d-flex justify-content-between align-items-center mb-3">

                <h4 class="mb-0">
                    Service Category Management
                </h4>

                <button type="button" class="cssbuttons-io-button border-0" data-bs-toggle="modal"
                    data-bs-target="#createServiceModal">

                    <svg height="25" width="25" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor" />
                    </svg>

                    <span>Add</span>

                </button>

            </div>

            {{-- Table --}}
            <div class="table-responsive">

                <table class="modern-table">

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Logo</th>

                            <th>Organization</th>

                            <th>Category</th>

                            <th>Software</th>

                            <th>Website</th>

                            <th>Country</th>

                            <th>Status</th>

                            <th class="text-center">Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($serviceCategories as $service)
                            <tr>

                                <td>#{{ $service->id }}</td>

                                <td>

                                    @if ($service->logo)
                                        <img src="{{ asset($service->logo) }}"
                                            style="width:55px;height:55px;
                                        object-fit:cover;
                                        border-radius:10px;
                                        border:1px solid #ddd;">
                                    @else
                                        <span class="text-muted">
                                            No Logo
                                        </span>
                                    @endif

                                </td>

                                <td class="fw-medium">

                                    {{ $service->organization_name }}

                                </td>

                                <td>

                                    <span class="badge-modern">

                                        {{ $service->category }}

                                    </span>

                                </td>

                                <td>

                                    {{ $service->software_name ?? '-' }}

                                </td>

                                <td>

                                    @if ($service->website)
                                        <a href="{{ $service->website }}" target="_blank">

                                            <i class="fa-solid fa-globe "></i>

                                        </a>
                                    @else
                                        -
                                    @endif

                                </td>

                                <td>

                                    {{ $service->country }}

                                </td>

                                <td>

                                    @if ($service->status == 'Active')
                                        <span class="badge-modern">

                                            Active

                                        </span>
                                    @else
                                        <span class="badge-modern bg-danger text-white">

                                            Inactive

                                        </span>
                                    @endif

                                </td>

                                <td>

                                    <div class="action-group">

                                        {{-- View --}}
                                        <button class="btn-modern btn-info-modern" data-bs-toggle="modal"
                                            data-bs-target="#serviceModal{{ $service->id }}">

                                            <i class="fa fa-eye"></i>

                                            View

                                        </button>

                                        <button type="button" class="btn-modern btn-secondary-modern editServiceBtn"
                                            data-bs-toggle="modal" data-bs-target="#editServiceModal"
                                            data-id="{{ $service->id }}" data-logo="{{ asset($service->logo) }}"
                                            data-organization="{{ $service->organization_name }}"
                                            data-category="{{ $service->category }}"
                                            data-service_type="{{ $service->service_type }}"
                                            data-software="{{ $service->software_name }}"
                                            data-website="{{ $service->website }}" data-country="{{ $service->country }}"
                                            data-status="{{ $service->status }}"
                                            data-description="{{ $service->description }}">

                                            <i class="fa fa-edit"></i>
                                            Edit

                                        </button>


                                        <button
                                            onclick="if(confirm('Are you sure?')){window.location.href='{{ route('service-category.delete', $service->id) }}'}"
                                            class="btn-modern btn-danger-modern">
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </td>

                            </tr>

                            <!-- ===========================
                 View Service Modal
            =========================== -->
                            <div class="modal fade" id="serviceModal{{ $service->id }}" tabindex="-1" aria-hidden="true">

                                <div class="modal-dialog modal-lg modal-dialog-centered">

                                    <div class="modal-content modern-modal">

                                        <!-- Header -->
                                        <div class="modal-header modern-modal-header">

                                            <h5 class="modal-title">

                                                <i class="fas fa-building me-2"></i>

                                                Service Details

                                            </h5>

                                            <button type="button" class="btn-close btn-close-white"
                                                data-bs-dismiss="modal">
                                            </button>

                                        </div>

                                        <!-- Body -->
                                        <div class="modal-body">

                                            <div class="text-center mb-4">

                                                @if ($service->logo)
                                                    <img src="{{ asset($service->logo) }}"
                                                        class="rounded-circle shadow border"
                                                        style="width:120px;
                                    height:120px;
                                    object-fit:cover;
                                    border:4px solid rgba(255,255,255,.08);">
                                                @else
                                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                                                        style="width:120px;
                                    height:120px;
                                    background:#172033;
                                    color:#209DD8;
                                    font-size:40px;">

                                                        <i class="fas fa-building"></i>

                                                    </div>
                                                @endif

                                                <h4 class="text-white mt-3 mb-1">

                                                    {{ $service->organization_name }}

                                                </h4>

                                                <span class="badge-modern">

                                                    {{ $service->category }}

                                                </span>

                                            </div>

                                            <div class="row g-3">

                                                <div class="col-md-6">

                                                    <div class="modern-info-card">

                                                        <small class="text-uppercase text-secondary">

                                                            Service Type

                                                        </small>

                                                        <h6 class="text-white mt-2">

                                                            {{ $service->service_type ?: '-' }}

                                                        </h6>

                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="modern-info-card">

                                                        <small class="text-uppercase text-secondary">

                                                            Software

                                                        </small>

                                                        <h6 class="text-white mt-2">

                                                            {{ $service->software_name ?: '-' }}

                                                        </h6>

                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="modern-info-card">

                                                        <small class="text-uppercase text-secondary">

                                                            Country

                                                        </small>

                                                        <h6 class="text-white mt-2">

                                                            {{ $service->country }}

                                                        </h6>

                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="modern-info-card">

                                                        <small class="text-uppercase text-secondary">

                                                            Status

                                                        </small>

                                                        <div class="mt-2">

                                                            @if ($service->status == 'Active')
                                                                <span class="badge bg-success">

                                                                    Active

                                                                </span>
                                                            @else
                                                                <span class="badge bg-danger">

                                                                    Inactive

                                                                </span>
                                                            @endif

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-12">

                                                    <div class="modern-info-card">

                                                        <small class="text-uppercase text-secondary">

                                                            Website

                                                        </small>

                                                        <div class="mt-2">

                                                            @if ($service->website)
                                                                <a href="{{ $service->website }}" target="_blank"
                                                                    class="text-info text-decoration-none">

                                                                    <i class="fas fa-globe me-2"></i>

                                                                    {{ $service->website }}

                                                                </a>
                                                            @else
                                                                <span class="text-muted">

                                                                    Not Available

                                                                </span>
                                                            @endif

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-12">

                                                    <div class="modern-info-card">

                                                        <small class="text-uppercase text-secondary">

                                                            Description

                                                        </small>

                                                        <p class="text-light mt-2 mb-0">

                                                            {{ $service->description ?: 'No description available.' }}

                                                        </p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- Footer -->
                                        <div class="modal-footer modern-modal-footer">

                                            @can('update service category')
                                                <button class="btn-save editServiceBtn" data-bs-dismiss="modal"
                                                    data-bs-toggle="modal" data-bs-target="#editServiceModal"
                                                    data-id="{{ $service->id }}" data-logo="{{ asset($service->logo) }}"
                                                    data-organization="{{ $service->organization_name }}"
                                                    data-category="{{ $service->category }}"
                                                    data-service_type="{{ $service->service_type }}"
                                                    data-software="{{ $service->software_name }}"
                                                    data-website="{{ $service->website }}"
                                                    data-country="{{ $service->country }}"
                                                    data-status="{{ $service->status }}"
                                                    data-description="{{ $service->description }}">

                                                    <i class="fas fa-edit me-2"></i>

                                                    Edit

                                                </button>
                                            @endcan

                                            <button class="btn-cancel" data-bs-dismiss="modal">

                                                Close

                                            </button>

                                            <button type="button" class="btn-modern btn-secondary-modern editServiceBtn"
                                                data-bs-toggle="modal" data-bs-target="#editServiceModal"
                                                data-id="{{ $service->id }}" data-logo="{{ asset($service->logo) }}"
                                                data-organization="{{ $service->organization_name }}"
                                                data-category="{{ $service->category }}"
                                                data-service_type="{{ $service->service_type }}"
                                                data-software="{{ $service->software_name }}"
                                                data-website="{{ $service->website }}"
                                                data-country="{{ $service->country }}"
                                                data-status="{{ $service->status }}"
                                                data-description="{{ $service->description }}">

                                                <i class="fa fa-edit"></i>
                                                Edit

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @empty

                            <tr>

                                <td colspan="9" class="text-center py-5">

                                    No Service Category Found.

                                </td>

                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <!-- Create Service Category Modal -->
    <div class="modal fade" id="createServiceModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-plus-circle me-2"></i>
                        Create Service Category
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                </div>

                <form action="{{ route('service-category.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <!-- Logo -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Organization Logo
                                </label>

                                <input type="file" name="logo" id="logo" accept="image/*"
                                    class="form-control modern-input">

                                <img id="previewImage" src="" class="mt-3 rounded shadow"
                                    style="width:90px;display:none;">

                            </div>

                            <!-- Organization -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Organization Name
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="organization_name" value="{{ old('organization_name') }}"
                                    class="form-control modern-input" placeholder="Organization Name" required>

                            </div>

                            <!-- Category -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Category
                                    <span class="text-danger">*</span>
                                </label>

                                <select name="category" class="form-select modern-input" required>

                                    <option value="">Select Category</option>

                                    <option value="Private Organization">Private Organization</option>

                                    <option value="Government">Government</option>

                                    <option value="International">International</option>

                                    <option value="E-Commerce">E-Commerce</option>

                                </select>

                            </div>

                            <!-- Service Type -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Service Type
                                    <span class="text-danger">*</span>
                                </label>

                                <select name="service_type" class="form-select modern-input" required>

                                    <option value="">Select Type</option>

                                    <option>Website</option>

                                    <option>Software</option>

                                    <option>ERP</option>

                                    <option>CRM</option>

                                    <option>HRM</option>

                                    <option>Accounting</option>

                                    <option>Portal</option>

                                    <option>Mobile App</option>

                                    <option>Cloud Service</option>

                                    <option>Other</option>

                                </select>

                            </div>

                            <!-- Software -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Software Name
                                </label>

                                <input type="text" name="software_name" value="{{ old('software_name') }}"
                                    class="form-control modern-input" placeholder="Software Name">

                            </div>

                            <!-- Website -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Website
                                </label>

                                <input type="url" name="website" value="{{ old('website') }}"
                                    class="form-control modern-input" placeholder="https://example.com">

                            </div>

                            <!-- Country -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Country
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="country" value="{{ old('country') }}"
                                    class="form-control modern-input" placeholder="Country" required>

                            </div>

                            <!-- Status -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Status
                                </label>

                                <select name="status" class="form-select modern-input">

                                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>
                                        Active
                                    </option>

                                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>
                                        Inactive
                                    </option>

                                </select>

                            </div>

                            <!-- Description -->
                            <div class="col-12">

                                <label class="form-label fw-semibold">
                                    Description
                                </label>

                                <textarea name="description" rows="5" class="form-control modern-input" placeholder="Write description...">{{ old('description') }}</textarea>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button type="submit" class="btn-save">

                            <i class="fas fa-save me-2"></i>

                            Save Service Category

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.getElementById('logo').addEventListener('change', function(e) {

            const file = e.target.files[0];

            if (file) {

                const reader = new FileReader();

                reader.onload = function(event) {

                    document.getElementById('previewImage').src = event.target.result;
                    document.getElementById('previewImage').style.display = 'block';

                }

                reader.readAsDataURL(file);

            }

        });
    </script>

    <!-- ============================= -->
    <!-- Edit Service Category Modal -->
    <!-- ============================= -->

    <div class="modal fade" id="editServiceModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i>
                        Edit Service Category
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                </div>

                <form id="editServiceForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="row">

                            <!-- Logo -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Organization Logo
                                </label>

                                <input type="file" id="editLogo" name="logo" accept="image/*"
                                    class="form-control modern-input">

                                <div class="mt-3">

                                    <img id="editLogoPreview" src="" class="rounded shadow border"
                                        style="width:110px;height:110px;object-fit:cover;display:none;">

                                </div>

                            </div>

                            <!-- Organization Name -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Organization Name
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" id="editOrganization" name="organization_name"
                                    class="form-control modern-input" required>

                            </div>

                            <!-- Category -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Category
                                </label>

                                <select id="editCategory" name="category" class="form-select modern-input" required>

                                    <option value="">Select Category</option>

                                    <option value="Private Organization">
                                        Private Organization
                                    </option>

                                    <option value="Government">
                                        Government
                                    </option>

                                    <option value="International">
                                        International
                                    </option>

                                    <option value="E-Commerce">
                                        E-Commerce
                                    </option>

                                </select>

                            </div>

                            <!-- Service Type -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Service Type
                                </label>

                                <select id="editServiceType" name="service_type" class="form-select modern-input"
                                    required>

                                    <option value="">Select Type</option>

                                    <option value="Website">Website</option>

                                    <option value="Software">Software</option>

                                    <option value="ERP">ERP</option>

                                    <option value="CRM">CRM</option>

                                    <option value="HRM">HRM</option>

                                    <option value="Accounting">Accounting</option>

                                    <option value="Portal">Portal</option>

                                    <option value="Mobile App">Mobile App</option>

                                    <option value="Cloud Service">Cloud Service</option>

                                    <option value="Other">Other</option>

                                </select>

                            </div>

                            <!-- Software -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Software Name
                                </label>

                                <input type="text" id="editSoftware" name="software_name"
                                    class="form-control modern-input">

                            </div>

                            <!-- Website -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Website
                                </label>

                                <input type="url" id="editWebsite" name="website" class="form-control modern-input">

                            </div>

                            <!-- Country -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Country
                                </label>

                                <input type="text" id="editCountry" name="country" class="form-control modern-input"
                                    required>

                            </div>

                            <!-- Status -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Status
                                </label>

                                <select id="editStatus" name="status" class="form-select modern-input">

                                    <option value="Active">
                                        Active
                                    </option>

                                    <option value="Inactive">
                                        Inactive
                                    </option>

                                </select>

                            </div>

                            <!-- Description -->
                            <div class="col-12">

                                <label class="form-label fw-semibold">
                                    Description
                                </label>

                                <textarea id="editDescription" name="description" rows="5" class="form-control modern-input"></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button type="submit" class="btn-save">

                            <i class="fas fa-save me-2"></i>

                            Update Service Category

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
       document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.editServiceBtn').forEach(button => {

        button.addEventListener('click', function () {

            const form = document.getElementById('editServiceForm');

            form.action =
                "{{ url('service-category/update') }}/" + this.dataset.id;

            document.getElementById('editOrganization').value =
                this.dataset.organization;

            document.getElementById('editCategory').value =
                this.dataset.category;

            document.getElementById('editServiceType').value =
                this.dataset.serviceType || this.dataset.service_type;

            document.getElementById('editSoftware').value =
                this.dataset.software;

            document.getElementById('editWebsite').value =
                this.dataset.website;

            document.getElementById('editCountry').value =
                this.dataset.country;

            document.getElementById('editStatus').value =
                this.dataset.status;

            document.getElementById('editDescription').value =
                this.dataset.description;

            const preview = document.getElementById('editLogoPreview');

            if (this.dataset.logo) {
                preview.src = this.dataset.logo;
                preview.style.display = "block";
            } else {
                preview.style.display = "none";
            }

        });

    });

});
    </script>
@endsection
<style>
    /* Modern Select */
    .modern-input.form-select,
    .form-select.modern-input {

        background-color: #1e293b !important;
        color: #ffffff !important;
        border: 1px solid #0ea5e9;
        border-radius: 12px;

    }

    .modern-input.form-select:focus,
    .form-select.modern-input:focus {

        background-color: #1e293b !important;
        color: #ffffff !important;
        border-color: #38bdf8;
        box-shadow: 0 0 0 .2rem rgba(56, 189, 248, .2);

    }

    /* Dropdown Items */
    .modern-input option,
    .form-select option {

        background: #1e293b !important;
        color: #ffffff !important;

    }

    /* Placeholder option */
    .modern-input option:first-child {

        color: #cbd5e1;

    }

    /* Disabled placeholder */
    .modern-input option:disabled {

        color: #94a3b8;

    }
</style>
