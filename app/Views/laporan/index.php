<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <main class="col-md- ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Laporan</h1>
                <div class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    <?php echo date('l, d F Y'); ?>
                </div>
            </div>
            <!-- Akhir Judul -->

            <?= $this->include('laporan/filterLaporan'); ?>

            <div class="col mb-4">
                <div class="card border-left-success h-100 py-2 filterlaporan">
                    <div class="card-body">

                        <?= $this->include('laporan/tabelLaporan'); ?>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?= $this->endSection(); ?>