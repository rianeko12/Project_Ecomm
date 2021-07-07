<div class="content-wrapper pt-2">
    <section class="content">
        <h4><strong>Detail Data Produk</strong></h4>


        <table class="table">
            <tr>
                <th>Nama produk</th>
                <td><?php echo $detail->nama_produk; ?></td>
            </tr>
            <tr>
                <th>Hara</th>
                <td><?php echo $detail->harga; ?></td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td><?php echo $detail->kategori; ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?php echo $detail->deskripsi; ?></td>
            </tr>
            <tr>
                <th>Foto</th>
                <td><img src="<?php echo base_url(); ?>assets/gambar/<?php echo $detail->gambar ?>" width="100" height="100"></td>
            </tr>
        </table>
        <?php echo anchor('/login/produk', '<button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>') ?>
    </section>
</div>