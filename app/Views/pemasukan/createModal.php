<!-- Modal -->
<div class="modal fade" id="pemasukanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Judul -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pemasukan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <!-- Akhir Judul -->

            <!-- Form Tambah Pemasukan -->
            <div class="modal-body">
                <form action="/pemasukan/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputTanggal" class="">Tanggal :</label>
                        <input type="date" id="inputTanggal" class="form-control" name="tgl_pemasukan" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputJumlah" class="">Jumlah :</label>
                        <input type="number" id="inputJumlah" class="form-control" name="jumlah" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputSumber" class="">Sumber :</label>
                        <select id="inputSumber" class="form-select" name="id_sumber" required autofocus>
                            <option value="">--Pilih sumber pemasukan--</option>
                            <?php foreach ($sumberPemasukan as $sPem) : ?>
                                <option value="<?= $sPem['id_sumber_pemasukan']; ?>"><?= $sPem['id_sumber_pemasukan'] . '. ' . $sPem['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- Akhir Form Tambah Pemasukan -->

        </div>
    </div>
</div>