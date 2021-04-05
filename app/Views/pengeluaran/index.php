<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('pengeluaran/createModal'); ?>
        <?= $this->include('pengeluaran/editModal'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Pengeluaran</h1>
            </div>
            <!-- Akhir Judul -->

            <div class="card mt-2">
                <div class="row">

                    <!-- Daftar Transaksi Masuk -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Transaksi Keluar</h6>
                    </div>
                    <!-- Akhir Daftar Transaksi Masuk -->

                    <!-- Tombol Tambah Pengeluaran -->
                    <div class="col card-header">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#pengeluaranModal" id="tomboltambah">
                            <span data-feather="plus"></span>
                            Tambah Pengeluaran
                        </button>
                    </div>
                    <!-- Akhir Tombol Pengeluaran -->

                    <?= $this->include('layout/messages'); ?>

                </div>

                <?= $this->include('pengeluaran/tabelPengeluaran'); ?>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>