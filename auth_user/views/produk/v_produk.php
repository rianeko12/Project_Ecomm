<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Produk
            <small>Control panel</small>
        </h1>
    </section>

    <section class="content">
        <Button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data</Button>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>kategori</th>
                <th colspan="3">Aksi</th>
            </tr>

            <?php foreach ($produk as $produk) : ?>
                <tr>
                    <td><?php echo $produk->id_produk; ?></td>
                    <td>
                        <img src="<?php echo base_url(); ?>assets/gambar/<?php echo $produk->gambar ?>" width="100" height="100">
                    </td>
                    <td><?php echo $produk->nama_produk; ?></td>
                    <td><?php echo $produk->harga; ?></td>
                    <td><?php echo $produk->kategori; ?></td>
                    <td>
                        <?php echo anchor('/login/produk/detail/' . $produk->id_produk, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                    </td>
                    <td>
                        <?php echo anchor('/login/produk/edit/' . $produk->id_produk, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?>
                    </td>
                    <td onclick="javascript: return confirm('Yakin ingin menghapus data?')">
                        <?php echo anchor('/login/produk/hapus/' . $produk->id_produk, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
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
                    <?php echo form_open_multipart('/login/produk/tambah_aksi'); ?>
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input class="form-control" placeholder="Nama Produk" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" placeholder="Harga Produk" type="text" name="harga">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input class="form-control" placeholder="Kategori Produk" type="text" name="kategori">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="foto" />
                    </div>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>