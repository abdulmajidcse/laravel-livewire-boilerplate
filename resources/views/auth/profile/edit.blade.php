<x-app-layout>
    <x-slot name="tabTitle">{{ __('Profile') }}</x-slot>

    <x-app-card>
        <x-slot name="leftHeader">
            <h1 class="m-0">{{ __('Profile') }}</h1>
        </x-slot>

        <x-slot name="rightHeader">
            <a href="{{ url('dashboard') }}" class="btn btn-primary"><i class="fas fa-backward mr-1"></i> Back </a>
        </x-slot>

        <div class="p-4 shadow">
            @include('auth.profile.partials.update-profile-information-form')
        </div>

        <div class="p-4 shadow">
            @include('auth.profile.partials.update-password-form')
        </div>

        <div class="p-4 shadow">
            @include('auth.profile.partials.delete-user-form')
        </div>
    </x-app-card>
</x-app-layout>
