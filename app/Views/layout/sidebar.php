<!-- Sidebar -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">

            <!-- Admin Logo -->
            <li class="nav-item">
                <img class="mb-2 rounded mx-auto d-block" src="<?= base_url('logo/User_font_awesome.svg') ?>" alt="" width="72" height="57">
            </li>
            <h5 class="text-center">Admin</h5>
            <hr>
            <!-- Akhir Admin Logo -->

            <!-- Tombol Menu Dashboard -->
            <li class="nav-item">
                <a href="/" class="nav-link <?= ($currentMenu == 'dashboard') ? 'active' : ''; ?>" aria-current="page">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <hr>
            <!-- Akhir Tombol Menu Dashboard -->

            <!-- Tombol Menu Pemasukan -->
            <li class="nav-item">
                <a href="/pemasukan" class="nav-link <?= ($currentMenu == 'pemasukan') ? 'active' : ''; ?>">
                    <span data-feather="arrow-up"></span>
                    Pemasukan
                </a>
            </li>
            <hr>
            <!-- Akhir Tombol Menu Pemasukan -->

            <!-- Tombol Menu Pengeluaran -->
            <li class="nav-item">
                <a href="/pengeluaran" class="nav-link <?= ($currentMenu == 'pengeluaran') ? 'active' : ''; ?>">
                    <span data-feather="arrow-down"></span>
                    Pengeluaran
                </a>
            </li>
            <hr>
            <!-- Akhir Tombol Menu Pengeluaran -->

            <!-- Tombol Menu Hutang -->
            <li class="nav-item">
                <a href="/hutang" class="nav-link <?= ($currentMenu == 'hutang') ? 'active' : ''; ?>">
                    <span data-feather="dollar-sign"></span>
                    Hutang
                </a>
            </li>
            <hr>
            <!-- Akhir Tombol Menu Hutang -->

            <!-- Tombol Menu Karyawan -->
            <li class="nav-item">
                <a href="/karyawan" class="nav-link <?= ($currentMenu == 'karyawan') ? 'active' : ''; ?>">
                    <span data-feather="users"></span>
                    Karyawan
                </a>
            </li>
            <hr>
            <!-- Akhir Tombol Menu Karyawan -->

            <!-- Tombol Menu Laporan -->
            <li class="nav-item">
                <a href="/laporan" class="nav-link <?= ($currentMenu == 'laporan') ? 'active' : ''; ?>">
                    <span data-feather="layers"></span>
                    Laporan
                </a>
            </li>
            <hr>
            <!-- Akhir Tombol Menu Laporan -->

        </ul>
    </div>

    <?= $this->include('layout/footer'); ?>

</nav>
<!-- Akhir Sidebar -->