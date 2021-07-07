<div class="content-wrapper pt-2">
    <section class="content">
        <h4><strong>Detail Data User</strong></h4>


        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $detail->nama ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $detail->email?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo $detail->username; ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo md5($detail->password) ?></td>
            </tr>
            <tr>
                <th>Jenis</th>
                <td><?php echo $detail->jenis ?></td>
            </tr>
        </table>
        <?php echo anchor('/login/user/index', '<button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>') ?>
    </section>
</div>