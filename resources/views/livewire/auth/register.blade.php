<div>
    <x-slot name="tabTitle">Register</x-slot>

    <div wire:loading wire:target="store">
        <x-loading />
    </div>

    <p class="login-box-msg">Register a new account</p>

    <form wire:submit.prevent="store">

        <div class="input-group mb-3">
            <x-text-input type="text" wire:model.lazy="name" :value="old('name')" placeholder="{{ __('Name') }}"
                autofocus />
            <x-input-group-append :icon="'fas fa-user'" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="input-group mb-3">
            <x-text-input type="email" wire:model.lazy="email" :value="old('email')" placeholder="{{ __('Email') }}" />
            <x-input-group-append :icon="'fas fa-envelope'" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="input-group mb-3">
            <x-text-input type="password" wire:model.lazy="password" :value="old('password')"
                placeholder="{{ __('Password') }}" />
            <x-input-group-append :icon="'fas fa-lock'" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="input-group mb-3">
            <x-text-input type="password" wire:model.lazy="password_confirmation" :value="old('password_confirmation')"
                placeholder="{{ __('Confirm Password') }}" />
            <x-input-group-append :icon="'fas fa-lock'" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div class="row">
            {{-- <div class="col-md-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" wire:model.lazy="terms" @if (old('terms')) checked @endif />
                    <label for="agreeTerms">
                        I agree to the <a href="#">terms</a>
                    </label>
                </div>
            </div> --}}
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mb-0 mt-3">
        <a href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </p>
</div>
