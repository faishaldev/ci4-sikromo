<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-md-4 offset-sm-1 pt-5">

			<div class="card">
				<h2 class="card-header text-center"><?= lang('Auth.loginTitle') ?></h2>
				<div class="card-body">

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>

						<?php if ($config->validFields === ['email']) : ?>
							<div class="form-group">
								<label for="login"><?= lang('Auth.email') ?></label>
								<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php else : ?>
							<div class="form-group">
								<label for="login"><?= lang('Auth.emailOrUsername') ?></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user"></i></div>
									</div>
									<input type="text" id="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" autofocus>
								</div>
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="form-group">
							<label for="password"><?= lang('Auth.password') ?></label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
								</div>
								<input type="password" id="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autofocus>
							</div>
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

						<?php if ($config->allowRemembering) : ?>
							<div class="form-check text-center">
								<label class="form-check-label">
									<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
									<?= lang('Auth.rememberMe') ?>
								</label>
							</div>
						<?php endif; ?>

						<br>
						<div class="text-center">
							<button type="submit" class="btn btn-primary"><?= lang('Auth.loginAction') ?></button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
					</form>

					<?php if ($config->allowRegistration) : ?>
						<hr>
						<div class="row">
							<p class="col text-center tombol"><a style="color:gray; text-decoration:none" href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
						<?php endif; ?>
						<?php if ($config->activeResetter) : ?>
							<p class="col text-center tombol"><a style="color:gray; text-decoration:none" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
						</div>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>