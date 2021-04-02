<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
            <!-- Akhir Judul -->

            <div class="row">

                <?= $this->include('dashboard/card pemasukan/pemasukanHariIni'); ?>
                <?= $this->include('dashboard/card pemasukan/pemasukanBulanIni'); ?>
                <?= $this->include('dashboard/card pemasukan/pemasukanTahunIni'); ?>
                <?= $this->include('dashboard/card pemasukan/seluruhPemasukan'); ?>

            </div>
            <div class="row">

                <?= $this->include('dashboard/card pengeluaran/pengeluaranHariIni'); ?>
                <?= $this->include('dashboard/card pengeluaran/pengeluaranBulanIni'); ?>
                <?= $this->include('dashboard/card pengeluaran/pengeluaranTahunIni'); ?>
                <?= $this->include('dashboard/card pengeluaran/seluruhPengeluaran'); ?>

            </div>
            <div class="row">

                <?= $this->include('dashboard/chart/barChart'); ?>
                <?= $this->include('dashboard/chart/doughnutChart'); ?>

            </div>
        </main>
    </div>
</div>

<?= $this->endSection(); ?>