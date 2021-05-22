<p>Seseorang telah meminta reset password pada email ini untuk <?= base_url() ?>.</p>

<p>Untuk melakukan reset password gunakan kode atau URL ini dan ikuti instruksinya.</p>

<p>Kode Anda: <?= $hash ?></p>

<p>Kunjungi <a href="<?= site_url('reset-password') . '?token=' . $hash ?>">Reset Form</a>.</p>

<br>

<p>Jika Anda tidak meminta reset password, Anda dapat dengan aman mengabaikan email ini.</p>