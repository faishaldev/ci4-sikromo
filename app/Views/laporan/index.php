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
            </div>
            <!-- Akhir Judul -->

            <?= $this->include('laporan/filterLaporan'); ?>

            <div class="col mb-4">
                <div class="card border-left-success h-100 py-2 filterlaporan">
                    <div class="card-body">

                        <!-- Sub Judul -->
                        <div class="no-gutters align-items-center text-center">
                            <div class="mr-2">
                                <div class="text-md font-weight-bold text-uppercase mb-1">Income Statement</div>
                            </div>
                            <hr>
                        </div>
                        <!-- Akhir Sub Judul -->

                        <?= $this->include('laporan/tabelLaporan'); ?>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?= $this->endSection(); ?>