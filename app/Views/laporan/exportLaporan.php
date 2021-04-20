<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Income Statement CV Romo</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tr>
            <td valign="top">
                <h1>Income Statement</h1>
            </td>
            <td align="right">
                <h2>CV ROMO</h2>
                <pre>
                Perdagangan Barang dan Jasa
                Jl. A.R. Hakim Ltr. 16 No. 3 Kota Tegal 52131
                Telp. (0283) 356238
                Email: romotegal@yahoo.co.id
            </pre>
            </td>
        </tr>
    </table>

    <form action="laporan/export" method="GET">
        <input type="hidden" name="mulai_tanggal" value="<?= isset($_GET['mulai_tanggal']) ? $_GET['mulai_tanggal'] : '' ?>">
        <input type="hidden" name="sampai_tanggal" value="<?= isset($_GET['sampai_tanggal']) ? $_GET['sampai_tanggal'] : '' ?>">

        <table width="100%">
            <thead style="background-color: lightgray">
                <tr>
                    <th>#</th>
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
                        <th scope="row"><?= $i++; ?></th>
                        <td><?php echo $value['tanggal']; ?></td>
                        <td align="right">Rp<?php echo number_format($value['total_pemasukan'], 2, ',', '.'); ?></td>
                        <td align="right">Rp<?php echo number_format($value['total_pengeluaran'], 2, ',', '.'); ?></td>
                        <td align="right">Rp<?php echo number_format($value['total_pemasukan'] - $value['total_pengeluaran'], 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="2" align="center" style="background-color: lightgray">Total</td>
                    <td align=" right">Rp<?= number_format($totalPemasukanPerRange, 2, ',', '.'); ?></td>
                    <td align="right">Rp<?= number_format($totalPengeluaranPerRange, 2, ',', '.'); ?></td>
                    <td align="right">Rp<?= number_format(($totalPemasukanPerRange - $totalPengeluaranPerRange), 2, ',', '.'); ?></td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>