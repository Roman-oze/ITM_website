
    <div class="card-header d-flex align-items-center">
        <i class="fas fa-exclamation-triangle me-2 fs-5 text-danger"></i>
        <div>
            <h5 class="mb-0 text-white">Danger Zone</h5>
            <small class="text-light">
                Permanently remove your account and all associated data.
            </small>
        </div>
    </div>

    <div class="card-body">

        <div class="alert alert-warning border-start border-4 border-warning mb-4">
            <h6 class="fw-bold mb-2">
                <i class="fas fa-info-circle me-2"></i>
                Warning
            </h6>

            <p class="mb-0">
                Once your account is deleted, all of your resources, projects,
                settings and personal data will be permanently removed.
                This action cannot be undone.
            </p>
        </div>

        <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>
                <h5 class="fw-bold mb-1 text-white">Delete your account</h5>
                <small class="text-muted">
                    Please be certain before deleting your account.
                </small>
            </div>

            <button
                type="button"
                class="btn btn-danger px-4"
                data-bs-toggle="modal"
                data-bs-target="#confirmUserDeletionModal">

                <i class="fas fa-trash-alt me-2"></i>
                Delete Account

            </button>

        </div>

    </div>

</div>

<!-- Modal -->

<div class="modal fade"
     id="confirmUserDeletionModal"
     tabindex="-1"
     aria-labelledby="confirmUserDeletionModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow-lg rounded-3">

            <div class="modal-header bg-danger text-white">

                <h5 class="modal-title">

                    <i class="fas fa-exclamation-circle me-2"></i>

                    Confirm Account Deletion

                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body p-4">

                <div class="alert alert-danger">

                    <strong>Warning!</strong><br>

                    This action is permanent and cannot be reversed.

                </div>

                <p class="text-muted mb-4">

                    Please enter your password to confirm
                    you want to permanently delete your account.

                </p>

                <form method="POST"
                      action="{{ route('profile.destroy') }}"
                      id="deleteAccountForm">

                    @csrf
                    @method('DELETE')

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            id="delete_password"
                            class="form-control"
                            placeholder="Enter your password">

                        @if($errors->userDeletion->get('password'))

                            <div class="text-danger mt-2">

                                {{ $errors->userDeletion->first('password') }}

                            </div>

                        @endif

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-light"
                    data-bs-dismiss="modal">

                    Cancel

                </button>

                <button
                    type="submit"
                    form="deleteAccountForm"
                    class="btn btn-danger">

                    <i class="fas fa-trash-alt me-2"></i>

                    Delete Account

                </button>

            </div>

        </div>

    </div>

</div>
