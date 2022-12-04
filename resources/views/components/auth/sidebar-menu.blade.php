@props(['href', 'icon', 'text', 'active' => false, 'dropdown' => false])

<li class="nav-item {{ $active && $dropdown ? 'menu-open' : '' }}">
    <x-nav-link :href="$href" :active="$active">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $text }}
            @if ($dropdown)
                <i class="right fas fa-angle-left"></i>
            @endif
        </p>
    </x-nav-link>
    @if ($dropdown)
        <ul class="nav nav-treeview">
            {{ $slot }}
        </ul>
    @endif
</li>
