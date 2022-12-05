<span class="nav-link" role="button" {{ $attributes->merge() }}>
    <i class="fas fa-adjust theme-icon" id="switch_to_dark_theme" title="Switch to dark mode"
        onclick="setTheme('dark')"></i>
    <i class="fas fa-sun theme-icon" id="switch_to_os_theme" title="Switch to system mode" onclick="setTheme('os')"></i>
    <i class="fas fa-moon theme-icon" id="switch_to_light_theme" title="Switch to light mode"
        onclick="setTheme('light')"></i>
    </button>

    @push('scripts')
        <script>
            // theme style switch
            function switchThemeStyles(theme) {
                $('body').removeClass('dark-mode');
                $('.main-sidebar').removeClass('sidebar-dark-primary sidebar-light-indigo');
                $('.main-header').removeClass('navbar-dark navbar-light');

                if (theme == 'dark') {
                    $('body').addClass('dark-mode');
                    $('.main-sidebar').addClass('sidebar-dark-primary');
                    $('.main-header').addClass('navbar-dark');
                } else {
                    $('.main-sidebar').addClass('sidebar-light-indigo');
                    $('.main-header').addClass('navbar-light');
                }
            }

            // set theme
            function setTheme(theme) {
                if (theme) {
                    localStorage.setItem('theme', theme);
                } else if (!localStorage.getItem('theme')) {
                    localStorage.setItem('theme', 'os');
                }

                $('.theme-icon').addClass('d-none');

                if (localStorage.getItem('theme') == 'os') {
                    $('#switch_to_dark_theme').removeClass('d-none');

                    if (window.matchMedia(
                            '(prefers-color-scheme: dark)').matches) {
                        switchThemeStyles('dark');
                    } else {
                        switchThemeStyles('light');
                    }
                } else if (localStorage.getItem('theme') === 'dark') {
                    $('#switch_to_light_theme').removeClass('d-none');
                    switchThemeStyles('dark');
                } else {
                    $('#switch_to_os_theme').removeClass('d-none');
                    switchThemeStyles('light');
                }
            }

            // when page load
            setTheme();
        </script>
    @endpush
