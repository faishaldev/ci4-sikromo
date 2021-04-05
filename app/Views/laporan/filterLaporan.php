<div class="col mb-4">
    <div class="card border-left-success h-100 py-2 filtertanggal">
        <div class="card-body">

            <!-- Judul -->
            <div class="no-gutters align-items-center text-center">
                <div class="mr-2">
                    <div class="text-md font-weight-bold text-uppercase mb-1">Filter Laporan</div>
                </div>
                <hr>
            </div>
            <!-- Akhir Judul -->

            <!-- Filter Laporan -->
            <div class="container align-items-center">
                <form action="">
                    <div class="row">
                        <div class="col form-group">
                            <label for="inputMulaiTanggal" class="font-weight-bold">Mulai Tanggal :</label>
                            <input type="date" id="inputMulaiTanggal" class="form-control" name="tgl_pemasukan" required>
                        </div>
                        <div class="col form-group">
                            <label for="inputSampaiTanggal" class="font-weight-bold">Sampai Tanggal :</label>
                            <input type="date" id="inputSampaiTanggal" class="form-control" name="tgl_pemasukan" required>
                        </div>
                        <button type="button" class="col btn btn-success mt-3">Tampilkan</button>
                    </div>
                </form>
            </div>
            <!-- Akhir Filter Laporan -->

        </div>
    </div>
</div>