<!-- Grafik Perbandingan -->
<div class="col-md-8">
    <div class="card">
        <div class="row">

            <!-- Judul -->
            <div class="col card-header py-3">
                <h6 class="m-0 font-weight-bold">Grafik Per Bulan</h6>
            </div>
            <!-- Akhir Judul -->

            <!-- Tombol Tahun -->
            <div class="col card-header">
                <form method="POST" action="#">
                    <select name="tahun" class="btn btn-sm btn-outline-secondary dropdown-toggle" onchange="this.form.submit()" id="tombolwaktu">
                        <?php
                        $tahun_sekarang = date('Y');
                        $tahun_post     = @$_POST['tahun'];
                        $tahun_post     = ($tahun_post ? $tahun_post : $tahun_sekarang);

                        for ($i = ($tahun_sekarang - 10); $i <= $tahun_sekarang; $i++) {
                            $selected = ($i == $tahun_post ? 'selected' : '');
                            echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </form>
            </div>
            <!-- Akhir Tombol Tahun -->

            <!-- Grafik Batang -->
            <canvas class="my-4 w-100" id="BarChart" width="900" height="380"></canvas>
            <!-- Akhir Grafik Batang -->

        </div>
    </div>
</div>
<!-- Akhir Grafik Perbandingan -->

<!-- Grafik Perbandingan -->
<div class="col-xl-4">
    <div class="card">
        <div class="row">

            <!-- Judul -->
            <div class="col card-header py-3">
                <h6 class="m-0 font-weight-bold">Grafik Per Tahun</h6>
            </div>
            <!-- Akhir Judul -->

            <!-- Tombol Tahun -->
            <div class="col card-header">
                <form method="POST" action="#">
                    <select name="tahun" class="btn btn-sm btn-outline-secondary dropdown-toggle" onchange="this.form.submit()" id="tombolwaktu">
                        <?php
                        $tahun_sekarang = date('Y');
                        $tahun_post     = @$_POST['tahun'];
                        $tahun_post     = ($tahun_post ? $tahun_post : $tahun_sekarang);

                        for ($i = ($tahun_sekarang - 10); $i <= $tahun_sekarang; $i++) {
                            $selected = ($i == $tahun_post ? 'selected' : '');
                            echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </form>
            </div>
            <!-- Akhir Tombol Tahun -->

            <!-- Grafik Lingkaran -->
            <canvas class="my-4 w-100" id="DoughnutChart" width="410" height="380"></canvas>
            <!-- Grafik Lingkaran -->

        </div>
    </div>
</div>
<!-- Akhir Grafik Perbandingan -->