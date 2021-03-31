<!-- Modal -->
<div class="modal fade" id="sumberPemasukanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Judul -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Sumber Pemasukan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <!-- Akhir Judul -->

            <!-- Form Tambah Sumber Pemasukan -->
            <div class="modal-body">
                <form action="/sumber/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputNama" class="">Nama :</label>
                        <input type="text" id="inputNama" class="form-control" name="nama" required autofocus>
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