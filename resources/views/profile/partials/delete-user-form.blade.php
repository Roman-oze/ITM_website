<div class="card">
    <div class="card-header">
        <h2 class="h5 font-weight-bold text-dark mb-0">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </div>

    <div class="card-body">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
            {{ __('Delete Account') }}
        </button>

        <!-- Modal -->
        <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmUserDeletionModalLabel">{{ __('Are you sure you want to delete your account?') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-muted">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>
                        <form method="post" action="{{ route('profile.destroy') }}" id="deleteAccountForm">
                            @csrf
                            @method('delete')

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                                @if($errors->userDeletion->get('password'))
                                    <div class="text-danger mt-1">{{ $errors->userDeletion->first('password') }}</div>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" form="deleteAccountForm" class="btn btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
