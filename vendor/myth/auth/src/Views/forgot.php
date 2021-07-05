<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 pt-5">

            <div class="card" style="border-radius: 25px; border: 0.5rem solid gray !important;">
                <h2 class="card-header text-center"><?= lang('Auth.forgotPassword') ?></h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?= lang('Auth.enterEmailForInstructions') ?></p>

                    <form action="<?= base_url(route_to('forgot')) ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?= lang('Auth.emailAddress') ?></label>
                            <input type="email" id="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" autofocus>
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.sendInstructions') ?></button>
                    </form>

                    <hr>

                    <p class="text-center"><a style="color:gray; text-decoration:none" href="<?= base_url(route_to('login')) ?>" class="tombol"><?= lang('Auth.signIn') ?></a></p>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>