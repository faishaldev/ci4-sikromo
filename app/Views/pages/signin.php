<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Sikromo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

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

        .container {
            border-radius: 12.5px;
        }

        .header {
            border-radius: 12.5px;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url('css/signin.css') ?>" rel="stylesheet">
</head>

<body class="text-center bg-secondary">
    <div class="container bg-white">

        <main class="form-signin">

            <form>
                <h1 class="header bg-dark text-light">CV Romo</h1>
                <hr>
                <h1 class="h3 mb-3 fw-normal">Login Form</h1>
                <label for="inputEmail" class="visually-hidden">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Masukkan Email Anda" required autofocus>
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Password Anda" required>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Ingatkan Saya
                    </label>
                </div>

                <button class="btn btn-primary" type="submit">Sign in</button>
                <button class="btn btn-danger" type="reset">Reset</button>

            </form>

        </main>

    </div>
</body>

</html>