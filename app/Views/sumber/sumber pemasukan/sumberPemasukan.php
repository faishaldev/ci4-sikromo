<div class="card mt-4">
    <div class="row">

        <!-- Daftar SUmber Pemasukan -->
        <div class="col card-header py-3">
            <h6 class="m-0 font-weight-bold">Daftar Sumber Pemasukan</h6>
        </div>
        <!-- Akhir Daftar Sumber Pemasukan -->

        <!-- Tombol Tambah Sumber Pemasukan -->
        <div class="col card-header">
            <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#sumberPemasukanModal" id="tomboltambah">
                <span data-feather="plus"></span>
                Tambah Sumber Pemasukan
            </button>
        </div>
        <!-- Akhir Tombol Tambah Sumber -->

        <?= $this->include('layout/messages'); ?>

    </div>

    <!-- Tabel Daftar Transaksi Masuk -->
    <div class="table-responsive">
        <table class="table table-striped table-sm tables2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sumberPemasukan as $sPem) : ?>
                    <tr>
                        <td><?= $sPem['id_sumber_pemasukan']; ?></td>
                        <td><?= $sPem['nama']; ?></td>
                        <td>
                            <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editSumberPemasukanModal" id="btn-edit"></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Akhir Tabel Daftar Transaksi Masuk -->

</div>