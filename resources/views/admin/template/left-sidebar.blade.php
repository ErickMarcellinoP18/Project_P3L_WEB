<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Atma Kitchen</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/produk') }}">
            <i class="fas fa-fw fa-cookie-bite"></i>
            <span>Produk</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/bahan_baku') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"><path d="m3 7l7-4l11 4M3 7v5l11 4l7-4V7M3 7l11 4l7-4"/><path d="M3 12v5l11 4l7-4v-5"/></g></svg>
            <span>Bahan Baku</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/hampers') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Hampers</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/beliBahan') }}">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Pembelian Bahan Baku</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/customer') }}">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Data Customer</span></a>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
