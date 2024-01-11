<nav class="sidebar-wrapper">

    <!-- Sidebar brand starts -->
    <div class="sidebar-brand">
        <a href="index.html" class="logo">
            <img src="themes/images/logo.svg" alt="Vivo Admin Dashboard" />
        </a>
    </div>
    <!-- Sidebar brand starts -->

    <!-- Sidebar menu starts -->
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                <li>
                    <a wire:navigate href="{{route('dashboard')}}">
                        <i class="bi bi-house"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-x-diamond"></i>
                        <span class="menu-text">Authentication</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="signup.html">Signup</a>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                            <li>
                                <a href="maintenance.html">Maintenance</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{route('superadmin')}}">
                        <i class="bi bi-hand-index-thumb"></i>
                        <span class="menu-text">SuperAdmin</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar menu ends -->

</nav>