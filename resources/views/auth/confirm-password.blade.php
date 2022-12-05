<x-guest-layout>
    <x-slot name="tabTitle">{{ __('Confirm Password') }}</x-slot>

    <p class="login-box-msg">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="input-group mb-3">
            <x-text-input type="password" name="password" :value="old('password')" placeholder="{{ __('Password') }}"
                autocomplete="current-password" />
            <x-input-group-append :icon="'fas fa-lock'" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Confirm') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</x-guest-layout>
