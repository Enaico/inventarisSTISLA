<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route ('dashboard') }}">Inventaris</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route ('dashboard') }}">INV</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Master </li>
            <li class="{{ request()->is('barang*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('barang.index') }}">
                    <i class="fas fa-fire"></i>
                    <span>Barang</span>
                </a>
            </li>
            <li class="{{ request()->is('tempat*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tempat.index') }}">
                    <i class="fas fa-fire"></i>
                    <span>Tempat</span>
                </a>
            </li>

            <li class="menu-header">Setting </li>
            <li class="{{ request()->is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="fas fa-fire"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="{{ request()->is('Setting*') ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="fas fa-fire"></i>
                    <span>Setting</span>
                </a>
            </li>
        </ul>    
    </aside>
</div>
