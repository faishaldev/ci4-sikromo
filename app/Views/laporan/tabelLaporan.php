<!-- Tabel Laporan -->
<div class="table-responsive mt-3">
    <table class="table table-bordered table-sm text-center tables3">
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
            foreach ($income as $dr => $value) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?php echo $value['tanggal']; ?></td>
                    <td><?php echo $value['total_pemasukan']; ?></td>
                    <td><?php echo $value['total_pengeluaran']; ?></td>
                    <td><?php echo $value['total_pemasukan'] - $value['total_pengeluaran']; ?></td>
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
</div>
<!-- Akhir Tabel Laporan -->