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
        <a class="nav-link" href="{{ url('/owner') }}">
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
        <a class="nav-link" href="{{ url('/customer') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M9.284 3.503a1.621 1.621 0 1 0 3.242 0a1.621 1.621 0 1 0-3.242 0"/><path d="M8.473 8.367v-.81a2.432 2.432 0 0 1 4.865 0v.81M6.6 8.369h6.738M3.604 5.612a1.712 1.712 0 1 0 0-3.425a1.712 1.712 0 0 0 0 3.425"/><path d="M6.6 8.609a2.996 2.996 0 1 0-5.993 0v1.284h1.285l.428 3.424h2.568l.428-3.424H6.6z"/></g></svg>
            <span>Data Customer</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/resep') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.231 30.234c4.746-1.353 9.124-1.447 12.631 1.441M9.231 27.256c4.746-1.353 9.124-1.448 12.631 1.44M9.231 24.357c4.746-1.353 9.124-1.448 12.631 1.44M9.231 21.243c4.746-1.353 9.124-1.448 12.631 1.44M9.231 18.206c4.746-1.352 9.124-1.447 12.631 1.441"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m5.5 9.647l.117 28.625c6.889-2.91 13.067-2.542 18.402 1.714c5.657-3.267 11.575-5.01 18.364-1.675L42.5 9.958c-5.727-2.244-11.963-3.367-18.48 1.285C18.854 7.395 12.035 7.268 5.5 9.647"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.231 15.372c4.746-1.353 9.124-1.448 12.631 1.44m4.625 7.198c-.077 2.73 1.627 4.636 4.237 6.122l5.48-.657c3.441-2.47 3.41-4.841 3.303-7.21zm1.438-7.664l-1.477 4.07c1.735.102 3.566-.661 5.111 1.148l1.05-2.784c-2.432.204-3.472-1.396-4.684-2.434"/></svg>
            <span>Resep</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/karyawan') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <circle cx="152" cy="184" r="72" fill="currentColor" />
                <path fill="currentColor"
                    d="M234 296c-28.16-14.3-59.24-20-82-20c-44.58 0-136 27.34-136 82v42h150v-16.07c0-19 8-38.05 22-53.93c11.17-12.68 26.81-24.45 46-34" />
                <path fill="currentColor" d="M340 288c-52.07 0-156 32.16-156 96v48h312v-48c0-63.84-103.93-96-156-96" />
                <circle cx="340" cy="168" r="88" fill="currentColor" />
            </svg>
            <span>Data Karyawan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/penitip') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-width="2"
                    d="M16 12c2.374 1.183 4 3.65 4 7v4H4v-4c0-3.354 1.631-5.825 4-7m4 1a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm6-6c-1.5 0-3 .36-5-2c-2 2.36-4.5 3-7 2m1 6l5.025 5.257L17 13m-5 5v5" />
            </svg>
            <span>Data Penitip</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/beliBahan') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M13.707 3.293A.996.996 0 0 0 13 3H4a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l8 8a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414zM12 19.586l-7-7V5h7.586l7 7z" />
                <circle cx="8.496" cy="8.495" r="1.505" fill="currentColor" />
            </svg>
            <span>Pembelian Bahan Baku</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/pengeluaran_lain') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                <path fill="currentColor"
                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372m47.7-395.2l-25.4-5.9V348.6c38 5.2 61.5 29 65.5 58.2c.5 4 3.9 6.9 7.9 6.9h44.9c4.7 0 8.4-4.1 8-8.8c-6.1-62.3-57.4-102.3-125.9-109.2V263c0-4.4-3.6-8-8-8h-28.1c-4.4 0-8 3.6-8 8v33c-70.8 6.9-126.2 46-126.2 119c0 67.6 49.8 100.2 102.1 112.7l24.7 6.3v142.7c-44.2-5.9-69-29.5-74.1-61.3c-.6-3.8-4-6.6-7.9-6.6H363c-4.7 0-8.4 4-8 8.7c4.5 55 46.2 105.6 135.2 112.1V761c0 4.4 3.6 8 8 8h28.4c4.4 0 8-3.6 8-8.1l-.2-31.7c78.3-6.9 134.3-48.8 134.3-124c-.1-69.4-44.2-100.4-109-116.4m-68.6-16.2c-5.6-1.6-10.3-3.1-15-5c-33.8-12.2-49.5-31.9-49.5-57.3c0-36.3 27.5-57 64.5-61.7zM534.3 677V543.3c3.1.9 5.9 1.6 8.8 2.2c47.3 14.4 63.2 34.4 63.2 65.1c0 39.1-29.4 62.6-72 66.4" />
            </svg>
            <span>Pengeluaran Lain</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/gantiPasswordview') }}">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32"><path fill="currentColor" d="M21 2a8.998 8.998 0 0 0-8.612 11.612L2 24v6h6l10.388-10.388A9 9 0 1 0 21 2m0 16a7 7 0 0 1-2.032-.302l-1.147-.348l-.847.847l-3.181 3.181L12.414 20L11 21.414l1.379 1.379l-1.586 1.586L9.414 23L8 24.414l1.379 1.379L7.172 28H4v-3.172l9.802-9.802l.848-.847l-.348-1.147A7 7 0 1 1 21 18"/><circle cx="22" cy="10" r="2" fill="currentColor"/></svg></i>
            <span>Ganti Password</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/konfirmasiProses') }}">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8.625 8.5h-4.5a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v3.5h3.5a1 1 0 0 1 0 2"/><path fill="currentColor" d="M21 13a1 1 0 0 1-1-1A7.995 7.995 0 0 0 5.08 8.001a1 1 0 0 1-1.731-1.002A9.995 9.995 0 0 1 22 12a1 1 0 0 1-1 1m-1.125 9a1 1 0 0 1-1-1v-3.5h-3.5a1 1 0 0 1 0-2h4.5a1 1 0 0 1 1 1V21a1 1 0 0 1-1 1"/><path fill="currentColor" d="M12 22A10.012 10.012 0 0 1 2 12a1 1 0 0 1 2 0a7.995 7.995 0 0 0 14.92 3.999a1 1 0 0 1 1.731 1.002A10.032 10.032 0 0 1 12 22"/></svg></i>
            <span>Pemrosesan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
