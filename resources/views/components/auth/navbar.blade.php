<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link" title="{{ __('Visit Site') }}"><i class="fas fa-home"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" title="{{ __('Profile') }}">
                <i class="fas fa-user-circle mr-1"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> {{ __('Profile') }}
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="fas fa-lock mr-2"></i> {{ __('Log Out') }}</a>
                </form>
            </div>
        </li>
        <li class="nav-item">
            <x-theme />
        </li>
    </ul>
</nav>
<!-- /.navbar -->
