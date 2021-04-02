<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title><?= $title; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('fontawesome-free-5.15.3-web/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .dataTables_length {
            margin-left: 1rem;
        }

        .dataTables_filter {
            margin-right: 1rem;
        }

        .dataTables_info {
            margin-left: 1rem;
        }

        .dataTables_paginate {
            margin-right: 1rem;
        }

        #tomboltambah {
            float: right;
        }

        #sumberPemasukan {
            float: right;
        }

        #tombolwaktu {
            float: right;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url('css/dashboard.css') ?>" rel="stylesheet">
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/feather.min.js') ?>"></script>
    <script src="<?= base_url('js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('js/dashboard.js') ?>"></script>
    <script src="<?= base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('js/modal.js'); ?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js'); ?>"></script>

    <?= $this->include('layout/datatables'); ?>
    <?= $this->include('layout/barChart'); ?>

</body>

</html>