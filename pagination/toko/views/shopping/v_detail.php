<div class="content-wrapper">
    <section>
        <div class="container">
            <div class="p-t-150 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
                <div class="row">
                    <div class="col-md-6 pl-5">
                        <img src="<?php echo base_url(); ?>assets/gambar/<?php echo $detail->gambar ?>" width="400">
                    </div>
                    <div class="col-md-6">
                        <h3><?php echo $detail->nama_produk ?></h3>
                        <h5>Rp.<?php echo number_format($detail->harga) ?></h5>
                        <form method="post" action="<?php echo base_url(); ?>toko/konsumen/tambah_keranjang">
                            <input type="hidden" name="id" value="<?php echo $detail->id_produk; ?>" />
                            <input type="hidden" name="nama" value="<?php echo $detail->nama_produk; ?>" />
                            <input type="hidden" name="harga" value="<?php echo $detail->harga; ?>" />
                            <input type="hidden" name="gambar" value="<?php echo $detail->gambar; ?>" />
                            <input type="number" min="1" class="form-control" name="qty">
                            <div class="pt-4">
                                <button type="submit" class="btn btn-md btn-success">Beli</button>
                                <a href="<?php echo base_url('/toko/konsumen/list_produk') ?>" class="btn btn-md btn-warning">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>