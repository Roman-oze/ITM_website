@extends('layout.dashboard')

@include('include.alerts')

@section('main')
    <div class="container py-4">

        <div class="modern-card">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h4 class="mb-0">
                    Company Achievement Management
                </h4>

                <button type="button" class="cssbuttons-io-button" data-bs-toggle="modal"
                    data-bs-target="#createAchievementModal">

                    <svg height="25" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                        <path d="M0 0h24v24H0z" fill="none"></path>

                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>

                    </svg>

                    <span>Add Achievement</span>

                </button>

            </div>

            <div class="table-responsive">

                <table class="modern-table">

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Award</th>

                            <th>Title</th>

                            <th>Organization</th>

                            <th>Link</th>

                            <th>Type</th>

                            <th>Date</th>

                            <th>Status</th>

                            <th class="text-center">Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($achievements as $achievement)
                            <tr>

                                <td>

                                    #{{ $achievement->id }}

                                </td>

                                <td>

                                    <img src="{{ asset($achievement->image) }}" width="65" height="65"
                                        class="rounded shadow-sm object-fit-cover">

                                </td>

                                <td>

                                    <strong>

                                        {{ $achievement->title }}

                                    </strong>

                                </td>

                                <td>

                                    {{ $achievement->organization }}

                                </td>
                                <td>

                                    {{ $achievement->certificate }}

                                </td>

                                <td>

                                    @php

                                        $color = 'primary';

                                        if ($achievement->type == 'Award') {
                                            $color = 'success';
                                        }

                                        if ($achievement->type == 'Certification') {
                                            $color = 'warning';
                                        }

                                        if ($achievement->type == 'Recognition') {
                                            $color = 'info';
                                        }

                                    @endphp

                                    <span class="badge-modern bg-{{ $color }}">

                                        {{ $achievement->type }}

                                    </span>

                                </td>

                                <td>

                                    {{ date('d M Y', strtotime($achievement->achievement_date)) }}

                                </td>

                                <td>

                                    @if ($achievement->status == 'Active')
                                        <span class="badge-modern bg-success">

                                            Active

                                        </span>
                                    @else
                                        <span class="badge-modern bg-danger">

                                            Inactive

                                        </span>
                                    @endif

                                </td>

                                <td class="text-center">

                                    <div class="action-group">

                                        {{-- @can('update achievement')
                                            <a href="{{ route('achievements.edit', $achievement->id) }}"
                                                class="btn-modern btn-secondary-modern">

                                                <i class="fa fa-edit"></i>

                                                Edit

                                            </a>
                                        @endcan --}}
                                        <button type="button" class="btn-modern btn-secondary-modern editAchievementBtn"
                                            data-bs-toggle="modal" data-bs-target="#editAchievementModal"
                                            data-id="{{ $achievement->id }}" data-image="{{ asset($achievement->image) }}"
                                            data-title="{{ $achievement->title }}"
                                            data-organization="{{ $achievement->organization }}"
                                            data-type="{{ $achievement->type }}"
                                            data-date="{{ $achievement->achievement_date }}"
                                            data-description="{{ $achievement->description }}"
                                            data-certificate="{{ $achievement->certificate }}"
                                            data-featured="{{ $achievement->featured }}"
                                            data-status="{{ $achievement->status }}">

                                            <i class="fa fa-edit"></i>

                                            Edit

                                        </button>

                                        {{-- @can('delete achievement') --}}
                                        <button
                                            onclick="if(confirm('Are you sure?')){window.location.href='{{ route('achievement.delete', $achievement->id) }}'}"
                                            class="btn-modern btn-danger-modern">

                                            <i class="fas fa-trash"></i>

                                            Delete

                                        </button>
                                        {{-- @endcan --}}

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="8" class="text-center py-5">

                                    <img src="{{ asset('frontend/images/no-data.svg') }}" width="120" class="mb-3">

                                    <h5 class="text-muted">

                                        No Achievement Found

                                    </h5>

                                </td>

                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- Create Achievement Modal -->
    <!-- ========================================= -->

    <div class="modal fade" id="createAchievementModal" tabindex="-1">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">
                        <i class="fas fa-award me-2"></i>
                        Add New Achievement
                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>

                </div>

                <form action="{{ route('achievement.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <!-- Image -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Achievement Image
                                </label>

                                <input type="file" name="image" class="form-control modern-input" required>

                            </div>

                            <!-- Title -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Achievement Title
                                </label>

                                <input type="text" name="title" class="form-control modern-input" required>

                            </div>

                            <!-- Organization -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Organization
                                </label>

                                <input type="text" name="organization" class="form-control modern-input" required>

                            </div>

                            <!-- Type -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Achievement Type
                                </label>

                                <select name="type" class="form-select modern-input" required>

                                    <option value="">Select Type</option>

                                    <option>Award</option>

                                    <option>Certification</option>

                                    <option>Recognition</option>

                                </select>

                            </div>

                            <!-- Date -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Achievement Date
                                </label>

                                <input type="date" name="achievement_date" class="form-control modern-input" required>

                            </div>

                            <!-- Certificate -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Certificate Link
                                </label>

                                <input type="url" name="certificate" class="form-control modern-input"
                                    placeholder="https://">

                            </div>

                            <!-- Featured -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Featured

                                </label>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label fw-semibold">
                                        Featured
                                    </label>

                                    <select name="featured" class="form-select modern-input" required>

                                        <option value="1">
                                            Yes
                                        </option>

                                        <option value="0">
                                            No
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <!-- Status -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Status

                                </label>

                                <select name="status" class="form-select modern-input">

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

                                <textarea name="description" rows="5" class="form-control modern-input"></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer modern-modal-footer">

                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">

                            Cancel

                        </button>

                        <button type="submit" class="btn-save">

                            <i class="fas fa-save me-2"></i>

                            Save Achievement

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- Edit Achievement Modal -->
    <!-- ========================================= -->

    <div class="modal fade" id="editAchievementModal" tabindex="-1">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content modern-modal">

                <div class="modal-header modern-modal-header">

                    <h5 class="modal-title">

                        <i class="fas fa-edit me-2"></i>

                        Edit Achievement

                    </h5>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">

                    </button>

                </div>

                <form id="editAchievementForm" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="row">

                            <!-- Image -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Achievement Image

                                </label>

                                <input type="file" id="editImage" name="image" class="form-control modern-input">

                                <div class="mt-3">

                                    <img id="editImagePreview"
                                        style="width:120px;height:120px;object-fit:cover;border-radius:12px;display:none;"
                                        class="shadow">

                                </div>

                            </div>

                            <!-- Title -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Title

                                </label>

                                <input id="editTitle" type="text" name="title" class="form-control modern-input">

                            </div>

                            <!-- Organization -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Organization

                                </label>

                                <input id="editOrganization" type="text" name="organization"
                                    class="form-control modern-input">

                            </div>

                            <!-- Type -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Type

                                </label>

                                <select id="editType" name="type" class="form-select modern-input">

                                    <option>Award</option>

                                    <option>Certification</option>

                                    <option>Recognition</option>

                                </select>

                            </div>

                            <!-- Date -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Achievement Date

                                </label>

                                <input id="editDate" type="date" name="achievement_date"
                                    class="form-control modern-input">

                            </div>

                            <!-- Certificate -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">

                                    Certificate Link

                                </label>

                                <input id="editCertificate" type="url" name="certificate"
                                    class="form-control modern-input">

                            </div>

                            <!-- Featured -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Featured
                                </label>

                                <select id="editFeatured" name="featured" class="form-select modern-input" required>

                                    <option value="1">
                                        Yes
                                    </option>

                                    <option value="0">
                                        No
                                    </option>

                                </select>

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

                            Update Achievement

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.querySelectorAll(".editAchievementBtn").forEach(function(button) {

                button.addEventListener("click", function() {

                    document.getElementById("editAchievementForm").action =
                        "/achievement/update/" + this.dataset.id;

                    document.getElementById("editTitle").value =
                        this.dataset.title;

                    document.getElementById("editOrganization").value =
                        this.dataset.organization;

                    document.getElementById("editType").value =
                        this.dataset.type;

                    document.getElementById("editDate").value =
                        this.dataset.date;

                    document.getElementById("editDescription").value =
                        this.dataset.description;

                    document.getElementById("editCertificate").value =
                        this.dataset.certificate;

                    document.getElementById("editFeatured").value =
                        this.dataset.featured;

                    document.getElementById("editStatus").value =
                        this.dataset.status;

                    const preview = document.getElementById("editImagePreview");

                    if (this.dataset.image) {

                        preview.src = this.dataset.image;
                        preview.style.display = "block";

                    } else {

                        preview.src = "";
                        preview.style.display = "none";

                    }

                });

            });

        });
    </script>
@endsection
