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

                        <!-- Filtered Laporan -->
                        <div class="col-md-4">
                            <table class="table table-bordered border-light">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Mulai Tanggal</td>
                                        <td class="font-weight-bold text-center">:</td>
                                        <td><?php echo DATE('D, M Y'); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Sampai Tanggal</td>
                                        <td class="font-weight-bold text-center">:</td>
                                        <td><?php echo DATE('D, M Y'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-primary">Cetak</button>
                        </div>
                        <!-- Akhir Filtered Laporan -->

                        <?= $this->include('laporan/tabelLaporan'); ?>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?= $this->endSection(); ?>