<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Pendaftaran Akun |Tutorial Simple Login Register CodeIgniter</title>
</head>

<body>
    <div class="container">
        <h2>Pendaftaran Akun</h2>
        <?php echo form_open('../login/register'); ?>
        <p>Nama:</p>
        <p>
            <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" />
        </p>
        <p> <?php echo form_error('name'); ?>
        </p>
        <p>Username:</p>
        <p>
            <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" />
        </p>
        <p>
            <?php echo form_error('username'); ?>
        </p>
        <p>Email:</p>
        <p><input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" /></p>
        <p>
            <?php echo form_error('email'); ?>
        </p>
        <p>Password:</p>
        <p><input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" /></p>
        <p>
            <?php echo form_error('password'); ?>
        </p>
        <p>Password Confirm:</p>
        <p><input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" class="form-control" /></p>
        <p>
            <?php echo form_error('password_conf'); ?>
        </p>
        <p><input type="submit" name="btnSubmit" value="Daftar" class="btn btn-success"/></p>
        <?php echo form_close(); ?>
        <p>
            Kembali ke beranda, Silakan klik
            <?php echo anchor(site_url() . '../login/beranda', 'di sini..'); ?>
        </p>
    </div>
</body>

</html>