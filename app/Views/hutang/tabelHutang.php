<!-- Tabel Hutang -->
<div class="table-responsive">
    <table class="table table-striped table-sm tables1 text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Penghutang</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($hutang as $h) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= date('d/m/Y', strtotime($h['tgl_hutang'])); ?></td>
                    <td><?= $h['jumlah']; ?></td>
                    <td><?= $h['penghutang']; ?></td>
                    <td><?= $h['keterangan']; ?></td>
                    <td>
                        <button type="button" class="<?= $h['status'] == "Lunas" ? "btn btn-success" : "btn btn-danger"; ?>" data-bs-toggle="modal" data-bs-target="#editStatusModal<?= $h['id_hutang']; ?>" id="btn-edit"><?= $h['status']; ?></button>
                    </td>
                    <td>
                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHutangModal<?= $h['id_hutang']; ?>" id="btn-edit"></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Tabel Hutang -->