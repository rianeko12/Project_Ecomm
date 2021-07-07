<div class="content-wrapper">
    <section class="content-header">
        <h1>Data User
        </h1>
    </section>

    <section class="content">
        <div class="container">
            <Button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data</Button>
            <table class="table mt-3">
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Jenis</th>
                    <th colspan="3">Aksi</th>
                </tr>

                <?php
                $no = 1;
                foreach ($user as $user) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $user->nama; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo md5($user->password); ?></td>
                        <td><?php echo $user->jenis; ?></td>
                        <td>
                            <?php echo anchor('/login/user/detail/' . $user->id_user, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                        </td>
                        <td>
                            <?php echo anchor('/login/user/edit/' . $user->id_user, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?>
                        </td>
                        <td onclick="javascript: return confirm('Yakin ingin menghapus data?')">
                            <?php echo anchor('/login/user/hapus/' . $user->id_user, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('/login/user/tambah_aksi'); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" placeholder="Email" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" placeholder="Username" type="text" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Password" type="password" name="password">
                    </div>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>