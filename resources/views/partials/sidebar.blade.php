<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ route('admin.dashboard') }}">
            <div class="logo-img">
                <img src="{{ asset('src/img/brand-white.svg') }}" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">ThemeKit</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded"
                class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item active">
                    <a href="{{ route('admin.dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                </div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Data Master</span>
                        <span class="badge badge-danger">150+</span></a>
                    <div class="submenu-content">
                        <a href="{{ route('admin.dtpengguna') }}" class="menu-item">Pengguna</a>
                        <a href="{{ route('admin.dtsiswa') }}" class="menu-item">Data Siswa</a>
                        <a href="{{ route('admin.dtortu') }}" class="menu-item">Data Orang Tua</a>
                        <a href="{{ route('admin.dtkelas') }}" class="menu-item">Data Kelas</a>
                    </div>
                </div>
                
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Transaksi</span>
                        <span class="badge badge-success">50+</span></a>
                    <div class="submenu-content">
                        <a href="{{ route('admin.pembayaran') }}" class="menu-item">Pembayaran SPP</a>
                        <a href="pages/widget-data.html" class="menu-item">Bukti Pembayaran/Angsuran</a>
                    </div>
                {{-- <div class="nav-item">
                    <a href="pages/widget-data.html"><i class="ik ik-menu"></i><span>Laporan</span> <span
                            class="badge badge-success">New</span></a>
                </div> --}}
                </div>

            </nav>
        </div>
    </div>
</div>
