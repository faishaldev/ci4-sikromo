<!-- Modal -->
<div class="modal fade" id="karyawanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Judul -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <!-- Akhir Judul -->

            <!-- Form Edit Karyawan -->
            <div class="modal-body">
                <form action="karyawan/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputNama" class="">Nama :</label>
                        <input type="text" id="inputNama" class="form-control" name="nama" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputUmur" class="">Umur :</label>
                        <input type="number" id="inputUmur" class="form-control" name="umur" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputKontak" class="">Kontak :</label>
                        <input type="text" id="inputKontak" class="form-control" name="kontak" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputPosisi" class="">Posisi :</label>
                        <input type="text" id="inputPosisi" class="form-control" name="posisi" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat" class="">Alamat :</label>
                        <input type="text" id="inputAlamat" class="form-control" name="alamat" required autofocus>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- Form Edit Pemasukan -->

        </div>
    </div>
</div>
<!-- Akhir Modal -->