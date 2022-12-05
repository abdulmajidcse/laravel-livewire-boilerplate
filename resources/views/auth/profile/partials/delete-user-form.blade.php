<section>
    <header>
        <h2 class="text-lg">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_account">
        {{ __('Delete Account') }}
    </button>

    <!-- Delete Account Modal -->
    <div class="modal fade" id="delete_account" tabindex="-1" aria-labelledby="delete_accountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-lg modal-title" id="delete_accountLabel">Are you sure your want to delete your
                        account?</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-body">
                        <p class="mt-1 text-sm">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mt-6">
                            <x-input-label for="confirm_password" value="Password" class="sr-only" />

                            <x-text-input id="confirm_password" name="password" type="password" class="mt-1"
                                placeholder="Password" />

                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        @if ($errors->userDeletion->isNotEmpty())
            $('#delete_account').modal('show');
        @endif
    </script>
@endpush
