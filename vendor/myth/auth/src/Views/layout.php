<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('public/favicon.png'); ?>">

    <title>Sikromo - Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('public/fontawesome-free-5.15.3-web/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <style>
        .login {
            margin-top: 75px;
        }

        .tombol:hover {
            font-weight: 500;
        }

        body {
            background-image: url(<?= base_url('196-1963020_website-backgrounds-website-login-page-background.jpg'); ?>);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <?= $this->renderSection('pageStyles') ?>
</head>

<body class="bg-secondary login register">

    <?= view('Myth\Auth\Views\_navbar') ?>

    <main role="main" class="container">
        <?= $this->renderSection('main') ?>
    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?= $this->renderSection('pageScripts') ?>
</body>

</html>