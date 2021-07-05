<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <?= $this->include('pengguna/editModal'); ?>

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Pengguna</h1>
                <div class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    <?php date_default_timezone_set("Asia/Bangkok");
                    echo date('l, d F Y'); ?>
                </div>
            </div>
            <!-- Akhir Judul -->

            <div class="card mt-2">
                <div class="row">

                    <!-- Daftar Pengguna -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Daftar Pengguna</h6>
                    </div>
                    <!-- Akhir Daftar Pengguna -->

                    <?= $this->include('layout/messages'); ?>

                </div>

                <?= $this->include('pengguna/tabelPengguna'); ?>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>