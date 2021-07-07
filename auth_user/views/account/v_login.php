<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <title>Halaman Login | Tutorial Simple Login Register CodeIgniter </title>
</head>

<body>

    <?php
    // Cetak jika ada notifikasi
    if ($this->session->flashdata('sukses')) {
        echo '<p class="warning" style="margin: 10px 20px;">' .
            $this->session->flashdata('sukses') . '</p>';
    }
    ?>

    <?php echo form_open('login'); ?>
    <div class="container" style="margin-left: 480px; margin-top: 100px;">
        <div class="card mr-auto bg-success" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">Halaman Login</h2>
                <p>Username:</p>
                <p><input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>" /></p>
                <p> <?php echo form_error('username'); ?> </p>
                <p>Password:</p>
                <p><input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>" /></p>
                <p> <?php echo form_error('password'); ?> </p>
                <p><input class="btn btn-warning" type="submit" name="btnSubmit" value="Login" style="margin-left: 93px;" /></p>
                <?php echo form_close(); ?>
                <div style="color: black;">
                    <p>Kembali ke beranda, Silakan klik <?php echo anchor(site_url() . '../login/beranda', 'di sini..'); ?></p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>