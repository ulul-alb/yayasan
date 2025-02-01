<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand' href='index.html'>
            <span class="sidebar-brand-text align-middle">
                AdminKit
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                </div>
                <div class="flex-grow-1 ps-2">
                    <a class="sidebar-user-title" href="#">
                        Kiki Mutkinati
                    </a>
                    <div class="sidebar-user-subtitle">Admin</div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-item active">
                <a class='sidebar-link' href='pages-profile.html'>
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#program" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Program</span>
                </a>
                <ul id="program" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('program.index') }}'>List</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Penyaluran</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Kabar Terbaru</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#donasi" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Penghimpunan</span>
                </a>
                <ul id="donasi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Transaksi</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Kategori</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#keuangan" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Keuangan</span>
                </a>
                <ul id="keuangan" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Transaksi</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Laporan</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Kategori</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Sub Kategori</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#hrd" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">HRD</span>
                </a>
                <ul id="hrd" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Penggajian</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Presensi</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Hari Libur</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Perizinan</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#marketing" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Marketing</span>
                </a>
                <ul id="marketing" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Auto WA</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Email Marketing</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Advertising</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>CRM</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#inventaris" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Aset Manajemen</span>
                </a>
                <ul id="inventaris" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Inventaris</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Kategori</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#masterdata" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Master Data</span>
                </a>
                <ul id="masterdata" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Akun / Staff</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Donatur</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Mitra</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Relawan</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                Lainnya
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Pengaturan</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="align-middle" data-feather="anchor"></i> <span class="align-middle">Kebijakan Privasi</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tentang Kami</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="align-middle" data-feather="help-circle"></i> <span class="align-middle">FAQ</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="align-middle" data-feather="info"></i> <span class="align-middle">Bantuan</span>
                </a>
            </li>
        </ul>
    </div>
</nav>