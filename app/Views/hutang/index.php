<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('hutang/createModal'); ?>
        <?= $this->include('hutang/editModal'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Hutang</h1>
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

                <!-- Tabel Hutang -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="tables">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Penghutang</th>
                                <th scope="col">Alasan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hutang as $h) : ?>
                                <tr>
                                    <td><?= $h['tgl_hutang']; ?></td>
                                    <td><?= $h['jumlah']; ?></td>
                                    <td><?= $h['penghutang']; ?></td>
                                    <td><?= $h['alasan']; ?></td>
                                    <td>
                                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHutangModal<?= $h['id_hutang']; ?>" id="btn-edit"></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Akhir Tabel Hutang -->

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>