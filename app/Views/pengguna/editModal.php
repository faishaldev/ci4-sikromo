<!-- Modal -->
<?php foreach ($users as $u) : ?>
    <div class="modal fade" id="editPenggunaModal<?= $u->userid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Judul -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <!-- Akhir Judul -->

                <!-- Form Edit Karyawan -->
                <div class="modal-body">
                    <form action="/pengguna/update/<?= $u->userid; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_user" value="<?= $u->userid; ?>">
                        <div class="form-group">
                            <label for="inputUsername" class="">Username :</label>
                            <input type="text" id="inputUsername" class="form-control" name="username" value="<?= $u->username; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="">Email :</label>
                            <input type="text" id="inputEmail" class="form-control" name="email" value="<?= $u->email; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputRole" class="">Role :</label>
                            <input type="text" id="inputRole" class="form-control" name="role" value="<?= $u->name; ?>" disabled>
                        </div>
                        <div class=" modal-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                    </form>
                    <form action="/pengguna/delete/<?= $u->userid; ?>" method="post">
                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <!-- Akhir Form Edit Karyawan -->

            </div>
        </div>
    </div>
    </div>
<?php endforeach; ?>
<!-- Akhir Modal -->