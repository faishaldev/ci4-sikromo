<!-- Tabel Karyawan -->
<div class="table-responsive pt-2">
    <table class="table table-striped table-sm tables2 text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $u) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $u->username; ?></td>
                    <td><?= $u->email; ?></td>
                    <td><?= $u->name; ?></td>
                    <td>
                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPenggunaModal<?= $u->userid; ?>" id="btn-edit"></button>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Tabel Karyawan -->