<div>
    <x-slot name="tabTitle">Log in</x-slot>

    <div wire:loading wire:target="store">
        <x-loading />
    </div>

    <p class="login-box-msg">Log in to start your session</p>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit.prevent="store">

        <div class="input-group mb-3">
            <x-text-input type="email" wire:model.lazy="email" :value="old('email')" placeholder="{{ __('Email') }}"
                autofocus />
            <x-input-group-append :icon="'fas fa-envelope'" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="input-group mb-3">
            <x-text-input type="password" wire:model.lazy="password" :value="old('password')"
                placeholder="{{ __('Password') }}" />
            <x-input-group-append :icon="'fas fa-lock'" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember" wire:model.lazy="remember"
                        @if (old('remember')) checked @endif />
                    <x-input-label for="remember" :value="__('Remember me')" />
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
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
</div>
