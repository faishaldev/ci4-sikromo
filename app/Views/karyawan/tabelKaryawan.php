<!-- Tabel Karyawan -->
<div class="table-responsive pt-2">
    <table class="table table-striped table-sm tables1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Posisi</th>
                <th>Kontak</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($karyawan as $k) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $k['nama']; ?></td>
                    <td><?= $k['umur']; ?></td>
                    <td><?= $k['posisi']; ?></td>
                    <td><?= $k['kontak']; ?></td>
                    <td><?= $k['alamat']; ?></td>
                    <td>
                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editKaryawanModal<?= $k['id_karyawan']; ?>" id="btn-edit"></button>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Tabel Karyawan -->