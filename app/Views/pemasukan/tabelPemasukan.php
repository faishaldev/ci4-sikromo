<!-- Tabel Daftar Transaksi Masuk -->
<div class="table-responsive">
    <table class="table table-striped table-sm tables1 text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Sumber</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pemasukan as $pem) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= date('d/m/Y', strtotime($pem['tgl_pemasukan'])); ?></td>
                    <td><?= $pem['jumlah']; ?></td>
                    <td><?= $pem['sumber']; ?></td>
                    <td><?= $pem['keterangan']; ?></td>
                    <td>
                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPemasukanModal<?= $pem['id_pemasukan']; ?>" id="btn-edit"></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Tabel Daftar Transaksi Masuk -->