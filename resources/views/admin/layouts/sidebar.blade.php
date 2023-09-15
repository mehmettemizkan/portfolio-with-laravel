<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto"></div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle m-auto">
                <div class="d-sm-none d-lg-inline-block">Hi, admin</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                {{-- <a href="#" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> --}}
                <div class="dropdown-divider"></div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#"
                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">M.T.</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">M.T.</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Dropdown</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a class="#" href="">test</a></li>

                </ul>
            </li>
            <li class="menu-header">Sections</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Hero</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a class="nav-link" href="{{ route('admin.typer-title.index') }}">Typer Title</a></li>
                    <li><a class="nav-link" href="{{ route('admin.hero.index') }}">Hero Section</a></li>

                </ul>
            </li>
            <li>
                <a class="nav-link" href="{{ route('admin.services.index') }}">
                    <i class="far fa-square"></i><span>Services</span>
                </a>
            </li>
            <li><a class="nav-link" href="{{ route('admin.about.index') }}"><i class="far fa-square"></i>
                    <span>About</span></a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Portfolio</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a class="nav-link" href="{{ route('admin.category.index') }}">Category</a></li>
                    <li><a class="nav-link" href="{{ route('admin.portfolio-item.index') }}">Portfolio Item</a></li>

                </ul>
            </li>


            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}


        </ul>
    </aside>
</div>
