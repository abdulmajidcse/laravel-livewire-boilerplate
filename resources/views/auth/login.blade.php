<x-guest-layout>
    <x-slot name="tabTitle">Log in</x-slot>

    <p class="login-box-msg">Log in to start your session</p>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="input-group mb-3">
            <x-text-input type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" autofocus />
            <x-input-group-append :icon="'fas fa-envelope'" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="input-group mb-3">
            <x-text-input type="password" name="password" :value="old('password')" placeholder="{{ __('Password') }}" />
            <x-input-group-append :icon="'fas fa-lock'" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember"
                        @if (old('remember')) checked @endif />
                    <x-input-label for="remember" :value="__('Remember me')" />
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    @if (Route::has('register'))
        <div class="social-auth-links text-center mt-2 mb-3">
            <a href="{{ route('register') }}" class="btn btn-block btn-danger">Register a new account</a>
        </div>
        <!-- /.social-auth-links -->
    @endif

    @if (Route::has('password.request'))
        <p class="mb-0">
            <a href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        </p>
    @endif
</x-guest-layout>
