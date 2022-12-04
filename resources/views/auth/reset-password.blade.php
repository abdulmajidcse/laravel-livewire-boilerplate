<x-guest-layout>
    <x-slot name="tabTitle">Reset Password</x-slot>

    <p class="login-box-msg">
        {{ __('You are only one step a way from your new password, reset your password now.') }}
    </p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="input-group mb-3">
            <x-text-input type="email" name="email" :value="old('email', $request->email)" placeholder="{{ __('Email') }}" />
            <x-input-group-append :icon="'fas fa-envelope'" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="input-group mb-3">
            <x-text-input type="password" name="password" :value="old('password')" placeholder="{{ __('Password') }}" />
            <x-input-group-append :icon="'fas fa-lock'" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="input-group mb-3">
            <x-text-input type="password" name="password_confirmation" :value="old('password_confirmation')"
                placeholder="{{ __('Confirm Password') }}" />
            <x-input-group-append :icon="'fas fa-lock'" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Reset Password') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mt-3 mb-0">
        <a href="{{ route('login') }}">Back to log in</a>
    </p>
</x-guest-layout>
