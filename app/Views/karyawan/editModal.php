<!-- Modal -->
<?php foreach ($karyawan as $k) : ?>
    <div class="modal fade" id="editKaryawanModal<?= $k['id_karyawan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Judul -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Karyawan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <!-- Akhir Judul -->

                <!-- Form Tambah Hutang -->
                <div class="modal-body">
                    <form action="/karyawan/update/<?= $k['id_karyawan']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_karyawan" value="<?= $k['id_karyawan']; ?>">
                        <div class="form-group">
                            <label for="inputNama" class="">Nama :</label>
                            <input type="text" id="inputNama" class="form-control" name="nama" value="<?= $k['nama']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputUmur" class="">Umur :</label>
                            <input type="number" id="inputUmur" class="form-control" name="umur" value="<?= $k['umur']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputKontak" class="">Kontak :</label>
                            <input type="text" id="inputKontak" class="form-control" name="kontak" value="<?= $k['kontak']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputPosisi" class="">Posisi :</label>
                            <input type="text" id="inputPosisi" class="form-control" name="posisi" value="<?= $k['posisi']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputAlamat" class="">Alamat :</label>
                            <input type="text" id="inputAlamat" class="form-control" name="alamat" value="<?= $k['alamat']; ?>" required autofocus>
                        </div>
                        <div class=" modal-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                    </form>
                    <form action="karyawan/delete/<?= $k['id_karyawan']; ?>" method="post">
                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                    </form>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
            <!-- Akhir Form Tambah Hutang -->

        </div>
    </div>
    </div>
    <!-- Akhir Modal -->
<?php endforeach; ?>