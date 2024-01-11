<nav class="sidebar-wrapper">


    <!-- Sidebar brand starts -->
    <div class="brand">
        <a href="index.html" class="logo">
            <img src="includes/images/logo.svg" class="d-none d-md-block me-4" alt="Rapid Admin Dashboard" />
            <img src="includes/images/logo-sm.svg" class="d-block d-md-none me-4" alt="Rapid Admin Dashboard" />
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
                        <i class="bi bi-bank"></i>
                        <span class="menu-text">Agences</span>
                    </a>
                </li>
                <li class="sidebar-dropdown active">
                    <a href="#">
                        <i class="bi bi-layout-sidebar"></i>
                        <span class="menu-text">Layouts</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="layout.html" class="current-page">Default Layout</a>
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