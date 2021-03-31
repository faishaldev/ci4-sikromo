<div class="card mt-4">
    <div class="row">

        <!-- Daftar Sumber Pengeluaran-->
        <div class="col card-header py-3">
            <h6 class="m-0 font-weight-bold">Daftar Sumber Pengeluaran</h6>
        </div>
        <!-- Akhir Daftar Pengeluaran -->

        <!-- Tombol Tambah Sumber Pengeluaran -->
        <div class="col card-header">
            <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#sumberPengeluaranModal" id="tomboltambah">
                <span data-feather="plus"></span>
                Tambah Sumber Pengeluaran
            </button>
        </div>
        <!-- Akhir Tombol Sumber Pengeluaran -->

        <?= $this->include('layout/messages'); ?>

    </div>

    <!-- Tabel Daftar Sumber Pengeluaran -->
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
                <?php foreach ($sumberPengeluaran as $sPen) : ?>
                    <tr>
                        <td><?= $sPen['id_sumber_pengeluaran']; ?></td>
                        <td><?= $sPen['nama']; ?></td>
                        <td>
                            <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editSumberPengeluaranModal" id="btn-edit"></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Akhir Tabel Sumber Pengeluaran -->

</div>