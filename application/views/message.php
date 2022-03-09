<?php if ($this->session->has_userdata('message')) : ?>
    <div class="alert alert-primary" role="alert">
        <?= $this->session->flashdata('message'); ?>
    </div>
<?php endif; ?>