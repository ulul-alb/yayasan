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

            <!-- <li class="sidebar-item">
                <a data-bs-target="#program" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle"></i> <span class="align-middle">Program</span>
                </a>
                <ul id="program" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.program.index') }}'>List</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.penyaluran.index') }}'>Penyaluran</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.info.index') }}'>Kabar Terbaru</a></li>
                </ul>
            </li> -->

            <li class="sidebar-item">
                <a href="#program" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layers"></i>
                    <span class="align-middle">Program</span>
                </a>
                <ul id="program" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('member.program.index') }}">List</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('member.penyaluran.index') }}">Penyaluran</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('member.info.index') }}">Kabar Terbaru</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="fa-solid fa-building-columns"></i> 
                    <span class="align-middle">Lembaga</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="fa-solid fa-clipboard-user"></i> 
                    <span class="align-middle">Staff</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="fa-solid fa-hand-holding-dollar"></i> 
                    <span class="align-middle">Donasi</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="fas fa-handshake"></i> 
                    <span class="align-middle">Donatur</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="fas fa-users"></i> 
                    <span class="align-middle">Relawan</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="fas fa-user-cog"></i> 
                    <span class="align-middle">Role</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#penghimpunan" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Penghimpunan</span>
                </a>
                <ul id="penghimpunan" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Transaksi</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='#'>Kategori</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#keuangan" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Keuangan</span>
                </a>
                <ul id="keuangan" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.keuanganTransaksi') }}'>Transaksi</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.keuanganKategori') }}'>Kategori</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.keuanganSumber') }}'>Sumber</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.keuanganAkun') }}'>akun</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#marketing" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Marketing</span>
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
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Inventaris</span>
                </a>
                <ul id="inventaris" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.inventaris') }}'>Item</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('member.inventaris.kategori') }}'>Kategori</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="align-middle" data-feather="settings"></i> 
                    <span class="align-middle">Pengaturan</span>
                </a>
            </li>
        </ul>

        <!-- Spacer antara Inventaris dan Logout -->
        <div style="margin-top: 30px;"></div>

        <!-- Tombol Logout -->
        <form action="{{ route('member.logout') }}" method="POST" style="padding-left: 20px;">
            @csrf
            <button type="submit" style="border: none; background: none; color: white; display: flex; align-items: center;">
                <i class="fas fa-sign-out-alt"></i>
                <span style="margin-left: 10px;">Logout</span>
            </button>
        </form>

        <li class="nav-header" style="margin-top: 30px;"></li>
    </div>
</nav>