<!-- Tabel Daftar Transaksi Keluar -->
<div class="table-responsive">
    <table class="table table-striped table-sm tables1 text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Sumber</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pengeluaran as $pen) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= date('d/m/Y', strtotime($pen['tgl_pengeluaran'])); ?></td>
                    <td><?= $pen['jumlah']; ?></td>
                    <td><?= $pen['sumber']; ?></td>
                    <td>
                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPengeluaranModal<?= $pen['id_pengeluaran']; ?>" id="btn-edit"></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Tabel Daftar Transaksi Keluar -->