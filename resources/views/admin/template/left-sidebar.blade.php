<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logoP3L.png') }}" alt="Logo P3L" style="height: 50px; width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">Atma Kitchen</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin') }}">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2">
                    <path d="m3 7l7-4l11 4M3 7v5l11 4l7-4V7M3 7l11 4l7-4" />
                    <path d="M3 12v5l11 4l7-4v-5" />
                </g>
            </svg>
            <span>Bahan Baku</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/hampers') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Hampers</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/customer_admin') }}">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><path fill="currentColor" fill-rule="evenodd" d="M12.918 1.623a1.623 1.623 0 1 1-3.246 0a1.623 1.623 0 0 1 3.246 0m1.024 5.037a.75.75 0 0 1-.732.586H7.098a.75.75 0 1 1 0-1.5h1.596A2.706 2.706 0 0 1 14 6.493a.27.27 0 0 1-.058.167M1.359 3.324a1.811 1.811 0 1 0 3.622 0a1.811 1.811 0 0 0-3.622 0M0 9.019a3.17 3.17 0 1 1 6.34 0v.858a.5.5 0 0 1-.5.5h-.86l-.398 3.185a.5.5 0 0 1-.496.438H2.253a.5.5 0 0 1-.496-.438l-.399-3.185H.5a.5.5 0 0 1-.5-.5z" clip-rule="evenodd"/></svg></i>
            <span>Data Customer</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/saldo') }}">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4"><path fill="#2f88ff" stroke="#000" d="M35 25C27.89 22.42 20.11 22.42 13 25L12 14C19 11 29 11 36 14L35 25Z"/><path stroke="#fff" d="M24 23L21 18"/><path stroke="#000" d="M42 39C42 40.6569 40.6569 42 39 42H9C7.34315 42 6 40.6569 6 39L6 9C6 7.34315 7.34315 6 9 6H39C40.6569 6 42 7.34315 42 9V39Z"/><path stroke="#000" d="M29 23.4552C25.6869 22.9349 22.3131 22.9349 19 23.4552"/></g></svg></i>
            <span>Saldo</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/resep') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.231 30.234c4.746-1.353 9.124-1.447 12.631 1.441M9.231 27.256c4.746-1.353 9.124-1.448 12.631 1.44M9.231 24.357c4.746-1.353 9.124-1.448 12.631 1.44M9.231 21.243c4.746-1.353 9.124-1.448 12.631 1.44M9.231 18.206c4.746-1.352 9.124-1.447 12.631 1.441"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m5.5 9.647l.117 28.625c6.889-2.91 13.067-2.542 18.402 1.714c5.657-3.267 11.575-5.01 18.364-1.675L42.5 9.958c-5.727-2.244-11.963-3.367-18.48 1.285C18.854 7.395 12.035 7.268 5.5 9.647"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.231 15.372c4.746-1.353 9.124-1.448 12.631 1.44m4.625 7.198c-.077 2.73 1.627 4.636 4.237 6.122l5.48-.657c3.441-2.47 3.41-4.841 3.303-7.21zm1.438-7.664l-1.477 4.07c1.735.102 3.566-.661 5.111 1.148l1.05-2.784c-2.432.204-3.472-1.396-4.684-2.434"/></svg>
            <span>Resep</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/gantiPasswordview')}}">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32"><path fill="currentColor" d="M21 2a8.998 8.998 0 0 0-8.612 11.612L2 24v6h6l10.388-10.388A9 9 0 1 0 21 2m0 16a7 7 0 0 1-2.032-.302l-1.147-.348l-.847.847l-3.181 3.181L12.414 20L11 21.414l1.379 1.379l-1.586 1.586L9.414 23L8 24.414l1.379 1.379L7.172 28H4v-3.172l9.802-9.802l.848-.847l-.348-1.147A7 7 0 1 1 21 18"/><circle cx="22" cy="10" r="2" fill="currentColor"/></svg></i>
            <span>Ganti Password</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/inputjarak')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M92.6 21c-32 0-64.04 24-64.04 72L92.6 221l64-128c0-48-32-72-64-72m282.3 39c-6.9.29-13.6 1.6-19.2 2.8l3.8 17.6c5.6-1.25 11.4-2.04 16.3-2.4zM92.6 61c17.7 0 32 14.33 32 32c0 17.7-14.3 32-32 32c-17.67 0-32-14.3-32-32c0-17.67 14.33-32 32-32m302.2.2l-3 17.7c4.9 1.03 9.8 2.32 14.1 4.9l8.7-15.8c-6.1-3.25-12.9-6.17-19.8-6.8m-57.5 6.7c-6.1 2.38-12.2 4.51-17.4 6.6L327 91c5.5-2.34 11.3-4.38 16.2-6.1zM431 81.3L417.3 93c3.6 4.12 6.4 9.2 8.6 13.3l16.1-8.1c-3.4-6.55-6.4-11.51-11-16.9m-127.8.9c-6.1 3.11-11.1 5.88-16.5 8.6l8.8 15.8c5.2-3 10.9-5.9 15.5-8.2zm-32.3 17.9c-5.3 3.1-10.5 6.2-15.6 9.6l9.8 15c4.9-3.2 10-6.2 15-9.2zM448.2 118c-5.9 1-11.9 1.7-17.8 2.4c.4 5 .1 10.4-.9 14.6l17.5 4.1c1-7.2 1.9-14.6 1.2-21.1m-208.1 1.7c-5 3.4-9.9 6.9-14.9 10.3l10.4 14.7c4.8-3.5 9.7-6.8 14.6-10.2zm-29.6 21.1c-5 3.6-10.2 7.6-14.5 10.9l10.9 14.3c5.5-4 9.3-7 14.3-10.7zm213 8c-3 4.6-6.5 9.2-10 12.7l13.1 12.5c4.3-5.1 8.9-10.3 12.1-15.5zm-241.8 14.1c-4.9 3.8-9.8 7.7-14.1 11.3l11.4 13.9c4.7-3.9 9.5-7.9 13.9-11.1zM401.1 173c-4.6 3.7-9.4 7.3-13.8 10.3l10.3 14.8c5.3-3.6 10.5-7.5 15-11.1zm-247.4 12.9c-4.7 3.8-9.2 7.8-13.8 11.7l11.7 13.7c4.5-3.9 9-7.8 13.6-11.6zm218.9 7c-5.1 3-10.4 6.1-15.2 8.7l8.6 15.9c5.4-3.3 11.5-6.2 16-9.2zm-246.4 16.6c-4.5 4-8.9 8-13.4 12.1l12.1 13.4c4.4-4 8.9-8 13.3-12zm215.5.4c-5.3 2.6-10.6 5.3-15.9 7.9l7.7 16.2c6.2-3 10.8-5.5 16.4-8.1zm-32 15.4c-5.5 2.5-10.8 4.9-16.4 7.2l7.3 16.5c5.5-2.4 11-4.9 16.5-7.4zM99.6 234c-5.1 4.5-8.65 8-13.3 12.5l12.7 13c4.7-4.5 8.5-8.4 12.9-12.2zm177.3 5.8c-5.5 2.3-11 4.7-16.5 7l7 16.7c5.6-2.3 11.1-4.7 16.6-7.1zm-33.1 14c-5.5 2.4-11 4.8-16.6 7l7 16.7c5.5-2.3 11.1-4.7 16.6-7zm184.8 7.2c-32 0-64 24-64 72l64 128l64-128c0-48-32-72-64-72m-218 6.8c-5.7 2.6-11.7 5-16.6 7.1l7.1 16.6c5.9-2.5 11.5-4.9 16.5-7.1zM177.4 282c-5.4 2.5-11.7 5.3-16.5 7.5l7.4 16.4c5.9-2.6 11.1-5.2 16.3-7.4zm-33 15c-5.6 2.7-11.4 5.5-16.4 8l8.1 16.1c5.4-2.8 11-5.4 15.9-7.8zm284.2 4c17.7 0 32 14.3 32 32s-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32m-316.8 12.3c-5.3 2.9-10.6 5.9-16 9l9 15.6c5.1-3 10.3-5.8 15.5-8.6zM80.1 332c-5.61 3.2-11.03 7.5-15.7 10.6L75.3 357c4.97-3.6 10.32-7.3 14.6-9.9zm-29.9 22.6c-4.8 4.4-9.53 9.5-13.2 13.8l13.7 11.7c3.85-4.7 7.2-8.2 11.7-12.2zm217.8 1.3l1.6 17.9c5.2-.9 10.4-.3 15.6.5l3.1-17.7c-6.6-1-13.6-1.7-20.3-.7m-37.2 10l6.8 16.7c5.2-2.3 10.6-4.1 16.1-5.8c-1.9-5.7-3.3-11.5-4.8-17.3c-6.3 1.8-12.6 4.2-18.1 6.4m77.5-.9l-10.2 14.8c4.2 3.1 8.3 6.4 11.6 10.5l13.6-11.8c-5.1-5.2-9-10.1-15-13.5m-94.5 9c-5.5 2.8-10.8 6-16.1 9.1l9.1 15.5c5.2-2.8 10.3-6.1 15.4-8.8zM26.01 385c-3.02 6.5-5.47 13.5-6.61 19.7l17.7 3.1c1.08-5.7 2.63-9.8 4.9-14.7c-5.49-2.4-10.73-5.3-15.99-8.1m156.09 7.8c-5.1 3.3-10.1 6.6-15.1 10l10 15c5-3.3 9.9-6.7 14.9-10zm152.7 1.2l-15.1 9.8c3.2 4.8 6.3 9.8 9.2 14.9l15.6-9c-3.5-5.6-6-10.6-9.7-15.7m-182.7 19c-5 3.3-10 6.5-14.9 10l10 15c4.8-3.5 9.9-6.8 15-10.2zm-114.8 9.5c-5.79 1.2-11.63 2.2-17.45 3.3c1.05 7 3.86 13.8 6.4 19.2l16.25-7.8c-2.17-5-4.23-10.2-5.2-14.7m316.1 2.8l-15.6 9c3.1 5.4 6.7 11.2 9.6 15.8l15.1-9.7c-3.4-5.3-6.3-10.3-9.1-15.1m-231 7.5c-5 3.1-9.9 6.1-15.1 9l8.9 15.7c5.3-3.1 10.6-6.2 15.7-9.5zm-71.3 16.3l-12.3 13.2c5.56 5.3 12.42 8.8 19.9 10.4l4-17.5c-4.44-.9-8.59-3.1-11.6-6.1m41 .3c-5.01 2.3-10.21 4.1-15.6 5.2l4.1 17.6c6.42-1.3 12.46-3.7 18.5-6.2zm280.3 4.8l-13.9 11.3c4.3 5.3 9.6 10.4 14.2 14l11.1-14.2c-4.4-3.4-8.2-7.5-11.4-11.1m24.1 17.5l-4.5 17.5c7.9 1.6 13.8 2.1 21.2 1.3l-2.2-17.9c-4.9.8-9.7.3-14.5-.9"/></svg>
            <span>Input Jarak</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
