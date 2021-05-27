<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('hutang/createModal'); ?>
        <?= $this->include('hutang/editModal'); ?>
        <?= $this->include('hutang/editStatusModal'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Hutang</h1>
                <div class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    <?php echo date('l, d F Y'); ?>
                </div>
            </div>
            <!-- Akhir Judul -->

            <div class="card mt-2">
                <div class="row">

                    <!-- Daftar Hutang -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Hutang</h6>
                    </div>
                    <!-- Akhir Daftar Hutang -->

                    <!-- Tombol Tambah Hutang -->
                    <div class="col card-header">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#hutangModal" id="tomboltambah">
                            <span data-feather="plus"></span>
                            Tambah Hutang
                        </button>
                    </div>
                    <!-- Akhir Tombol Tambah Hutang -->

                    <?= $this->include('layout/messages'); ?>

                </div>

                <?= $this->include('hutang/tabelHutang'); ?>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>