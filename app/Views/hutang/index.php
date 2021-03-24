<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('hutang/create'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Hutang</h1>
            </div>
            <div class="card mt-2">
                <div class="row">
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Hutang</h6>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-3 card-header text-center">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#hutangModal">
                            <span data-feather="plus"></span>
                            Tambah Hutang
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Penghutang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Alasan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($hutang as $h) : ?>
                                <tr>
                                    <td scope="row"><?= $i++; ?></td>
                                    <td><?= $h['tgl_hutang']; ?></td>
                                    <td><?= $h['penghutang']; ?></td>
                                    <td>Rp<?= number_format($h['jumlah'], 2, ',', '.'); ?></td>
                                    <td><?= $h['alasan']; ?></td>
                                    <td>text</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>