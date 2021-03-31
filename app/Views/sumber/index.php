<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Sumber</h1>
            </div>
            <!-- Akhir Judul -->

            <?= $this->include('sumber/sumber pemasukan/sumberPemasukan'); ?>
            <?= $this->include('sumber/sumber pemasukan/createModal'); ?>
            <?= $this->include('sumber/sumber pemasukan/editModal'); ?>
            <?= $this->include('sumber/sumber pengeluaran/sumberPengeluaran'); ?>
            <?= $this->include('sumber/sumber pengeluaran/createModal'); ?>
            <?= $this->include('sumber/sumber pengeluaran/editModal'); ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>