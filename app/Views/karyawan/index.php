<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('karyawan/createModal'); ?>
        <?= $this->include('karyawan/editModal'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Karyawan</h1>
                <div class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    <?php date_default_timezone_set("Asia/Bangkok");
                    echo date('l, d F Y'); ?>
                </div>
            </div>
            <!-- Akhir Judul -->

            <div class="card mt-2">
                <div class="row">

                    <!-- Daftar Karyawan -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Daftar Karyawan</h6>
                    </div>
                    <!-- Akhir Daftar Karyawan -->

                    <!-- Tombol Tambah Karyawan -->
                    <div class="col card-header">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#karyawanModal" id="tomboltambah">
                            <span data-feather="plus"></span>
                            Tambah Karyawan
                        </button>
                    </div>
                    <!-- Akhir Tombol Karyawan -->

                    <?= $this->include('layout/messages'); ?>

                </div>

                <?= $this->include('karyawan/tabelKaryawan'); ?>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>