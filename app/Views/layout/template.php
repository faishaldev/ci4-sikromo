<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Musthafa Kamal Faishal (24060118120042) - Informatika '18 UNDIP">
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />

    <!-- Judul -->
    <title><?= $title; ?></title>
    <!-- Akhir Judul -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('fontawesome-free-5.15.3-web/css/all.min.css') ?>">
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/additional.css'); ?>">
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/feather.min.js') ?>"></script>
    <script src="<?= base_url('js/chart.min.js') ?>"></script>
    <script src="<?= base_url('js/dashboard.js') ?>"></script>
    <script src="<?= base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js'); ?>"></script>

    <?= $this->include('layout/datatables/datatablesUmum'); ?>
    <?= $this->include('layout/datatables/datatablesKaryawan'); ?>
    <?= $this->include('layout/datatables/datatablesLaporan'); ?>
    <?= $this->include('layout/chart/barChart'); ?>
    <?= $this->include('layout/chart/doughnutChart'); ?>
    <script>
        $("select").on("change", function() {
            $('#' + $(this).val()).show('form').siblings('form').hide();
        })
    </script>

</body>

</html>