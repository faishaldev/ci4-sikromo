<!-- Notifikasi Perubahan -->
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<!-- Notifikasi Perubahan -->