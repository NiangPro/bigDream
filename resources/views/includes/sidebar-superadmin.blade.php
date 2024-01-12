<nav class="sidebar-wrapper">


    <!-- Sidebar brand starts -->
    <div class="brand">
        <a href="index.html" class="logo">
            {{-- <img src="includes/images/logo.svg" class="d-none d-md-block me-4" alt="Rapid Admin Dashboard" /> --}}
            <span class="d-none d-md-block me-4 text-white fs-2">BigDream</span>
            <span class="d-block d-md-none me-4 fs-1">BD</span>
            {{-- <img src="includes/images/logo-sm.svg" class="d-block d-md-none me-4" alt="Rapid Admin Dashboard" /> --}}
        </a>
    </div>
    <!-- Sidebar brand ends -->

    <!-- Sidebar menu starts -->
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                <li class="@if(request()->is('dashboard_superadmin')) active @endif">
                    <a wire:navigate href="{{route('superadmin')}}">
                        <i class="bi bi-house"></i>
                        <span class="menu-text">Accueil</span>
                    </a>
                </li>
                <li  class="@if(request()->is('agences')) active @endif">
                    <a wire:navigate href="{{route('agence')}}">
                        <i class="bi bi-shop"></i>
                        <span class="menu-text">Agences</span>
                    </a>
                </li>
                <li  class="@if(request()->is('historiques')) active @endif">
                    <a wire:navigate href="{{route('historique')}}">
                        <i class="bi bi-archive-fill"></i>
                        <span class="menu-text">Historiques</span>
                    </a>
                </li>
                <li class="sidebar-dropdown @if(request()->is('admins')) active @endif">
                    <a href="#">
                        <i class="bi bi-people-fill"></i>
                        <span class="menu-text">Utilisateurs</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a wire:navigate href="{{route('admin')}}" class="@if(request()->is('admins')) current-page @endif">Admins</a>
                            </li>
                            <li>
                                <a href="{{route('dashboard')}}">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar menu ends -->

</nav>