<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <!-- Buttons Section -->
            <div class="btn-group" role="group" aria-label="User Controls">
                <a href="{{route('permissions.index')}}"
                   class="btn btn-info  px-4 py-3 shadow-sm text-white"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="Manage Permissions">
                    <i class="fas fa-shield-alt me-2"></i>Permission
                </a>
                <a href="{{route('roles.index')}}"
                   class="btn btn-danger  px-4 py-3 shadow-sm"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="Manage Roles">
                    <i class="fas fa-user-tag me-2"></i>Roles
                </a>
                <a href="{{route('users.index')}}"
                   class="btn btn-success  px-4 py-3 shadow-sm"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="Manage Users">
                    <i class="fas fa-users me-2"></i>User
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    /* Button Styling */
    .btn {
        font-size: medium;
        font-weight: bold;
        border-radius: 50px;
        transition: all 0.3s ease-in-out;
    }
    .btn:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    /* Button Colors with Gradient */
    .btn-info {
        background: linear-gradient(135deg, #4595a1, #138496);
        border: none;
    }
    .btn-danger {
        background: linear-gradient(135deg, #bf4652, #bd2130);
        border: none;
    }
    .btn-success {
        background: linear-gradient(135deg, #59c873, #218838);
        border: none;
    }

    /* Tooltip Styling */
    .tooltip-inner {
        background-color: #000;
        color: #fff;
        padding: 10px;
        font-size: 0.9rem;
        border-radius: 5px;
    }
</style>

<!-- Required JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>
