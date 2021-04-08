<!-- Tabel Laporan -->
<div class="table-responsive mt-3">
    <table class="table table-bordered table-sm text-center tables1">
        <thead class="bg-light">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pemasukanPerRange as $pemPeRan) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $pemPeRan['tgl_pemasukan']; ?></td>
                    <td><?= $pemPeRan['jumlah']; ?></td>
                    <td>0</td>
                    <td>1000000</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <th class="bg-light" colspan="2">Total</th>
            <th>Rp<?= number_format($totalPemasukanPerRange, 2, ',', '.'); ?></th>
            <th>Rp<?= number_format($totalPengeluaranPerRange, 2, ',', '.'); ?></th>
            <th>Rp<?= number_format(($totalPemasukanPerRange - $totalPengeluaranPerRange), 2, ',', '.'); ?></th>
        </tfoot>
    </table>
    <div class="container text-center">
        <button type="button" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-primary">Cetak</button>
    </div>
</div>
<!-- Akhir Tabel Laporan -->