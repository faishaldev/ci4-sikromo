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

                <?= $this->include('dashboard/pemasukan'); ?>

            </div>

            <div class="row">

                <?= $this->include('dashboard/pengeluaran'); ?>

            </div>

            <!-- Grafik Pendapatan & Pengeluaran -->
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Grafik Pendapatan & Pengeluaran Per Bulan </h6>
                </div>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </div>
            <!-- Akhir Grafik Pendapatan & Pengeluaran -->

        </main>
    </div>
</div>

<?= $this->endSection(); ?>