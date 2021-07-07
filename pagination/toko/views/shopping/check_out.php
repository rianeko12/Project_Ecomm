<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-9">
            <div class="p-t-100 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
                <h2>Konfirmasi Check Out</h2>
                <div class="kotak2">
                    <?php
                    $grand_total = 0;
                    if ($cart = $this->cart->contents()) {
                        foreach ($cart as $item) {
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h4>Total Belanja: Rp." . number_format($grand_total, 0, ",", ".") . "</h4>";
                    ?>
                        <form class="form-horizontal" action="<?php echo base_url() ?>toko/keranjang/proses_order" method="post" name="frmCO" id="frmCO">
                            <div class="form-group  has-success has-feedback">
                                <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group  has-success has-feedback">
                                <label class="control-label col-xs-3" for="firstName">Nama :</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group  has-success has-feedback">
                                <label class="control-label col-xs-3" for="lastName">Alamat:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group  has-success has-feedback">
                                <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
                                <div class="col-xs-9">
                                    <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp">
                                </div>
                            </div>

                            <div class="form-group  has-success has-feedback">
                                <div class="col-xs-offset-3 col-xs-9">
                                    <button type="submit" class="btn btn-primary">Proses Order</button>
                                </div>
                            </div>
                        </form>
                    <?php
                    } else {
                        echo "<h5>Shopping Cart masih kosong</h5>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>