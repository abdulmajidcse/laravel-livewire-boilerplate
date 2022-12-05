<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('auth.dashboard') }}" class="brand-link">
        {{-- <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <i class="fas fa-th brand-image img-circle elevation-3" style="opacity: .8; float: none;"></i>
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <x-auth.sidebar-menu :href="route('auth.dashboard')" :active="request()->routeIs('auth.dashboard')" icon="fas fa-tachometer-alt"
                    text="Dashboard" />

                <x-auth.sidebar-menu href="#" icon="fas fa-file-alt" text="Starter Pages" :dropdown="true">
                    <x-auth.sidebar-menu href="#" icon="far fa-circle" text="Active Page" />
                    <x-auth.sidebar-menu href="#" icon="far fa-circle" text="Inactive Page" />
                </x-auth.sidebar-menu>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
