<x-guest-layout>
    <x-slot name="tabTitle">{{ __('Confirm Password') }}</x-slot>

    <p class="login-box-msg">
        {{ __('Thanks for register! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm text-primary">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="row">
        <form method="POST" action="{{ route('verification.send') }}" class="col-md-8">
            @csrf

            <div>
                <button type="submit" class="btn btn-primary btn-block mb-2 m-md-0">
                    {{ __('Resend Verification Email') }}
                </button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="col-md-4">
            @csrf

            <button type="submit" class="btn btn-danger btn-block">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
