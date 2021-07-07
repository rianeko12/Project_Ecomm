<div class="content-wrapper">
    <section class="content">
        <?php foreach ($user as $u) : ?>
            <form action="<?php echo base_url() . '/login/user/update'; ?>" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $u->id_user ?>">
                    <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama" value="<?php echo $u->nama; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" placeholder="Email" type="email" name="email" value="<?php echo $u->email; ?>">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $u->username; ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" placeholder="Password" type="text" name="password" value="<?php echo md5($u->password); ?>">
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <input class="form-control" placeholder="jenis" type="text" name="jenis" value="<?php echo $u->jenis; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('login/user/index', '<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>') ?>
            </form>
        <?php endforeach; ?>
    </section>
</div>