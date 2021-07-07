<div class="content-wrapper">
    <section class="content">
        <?php foreach ($produk as $pro) : ?>
            <form action="<?php echo base_url() . '/login/produk/update'; ?>" method="post">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $pro->id_produk ?>">
                    <input type="text" class="form-control" name="nama" value="<?php echo $pro->nama_produk ?>">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" name="harga" value="Rp.<?php echo number_format($pro->harga) ?>">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?php echo $pro->deskripsi ?>">
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="kategori" class="form-control" value="<?php echo $pro->kategori ?>">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo anchor('/login/produk', '<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>') ?>
            </form>
        <?php endforeach; ?>
    </section>
</div>