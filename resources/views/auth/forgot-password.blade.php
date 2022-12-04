<x-guest-layout>
    <x-slot name="tabTitle">Forgot Password</x-slot>

    <p class="login-box-msg">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </p>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="input-group mb-3">
            <x-text-input type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" autofocus />
            <x-input-group-append :icon="'fas fa-envelope'" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Email Password Reset Link') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mt-3 mb-0">
        <a href="{{ route('login') }}">Back to log in</a>
    </p>
</x-guest-layout>
