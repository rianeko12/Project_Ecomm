<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/pato/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pato/css/main.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
                        </a>
                    </div>

                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="<?php echo base_url('toko/konsumen') ?>">Home</a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('toko/konsumen/list_produk') ?>">Product</a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('toko/konsumen/list_produk') ?>">About</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('/login/logout'); ?>">Logout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">
                        <li>
                            <?php $keranjang = $this->cart->total_items() ?>
                            <a href="<?php echo base_url() ?>/toko/keranjang/"><i class="fa fa-cart-plus fs-30 c-white"></i></a>
                            <font color="white"><?php echo $keranjang ?></font>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content-wrapper" style="padding-top: 80px;">
        <section>
            <div class="container">
                <div class="p-t-80 p-b-124 bo5-r h-full p-r-10 p-r-0-md bo-none-md">
                    <?php
                    $no = 1;
                    if ($cart = $this->cart->contents()) { ?>
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>QTY</th>
                                <th>Jumlah</th>
                                <th>Hapus</th>
                            </tr>
                            <?php
                            $total = 0;
                            $grandtotal = 0;
                            ?>

                            <?php foreach ($cart as $item) : ?>
                                <?php
                                $total = $total + $item['subtotal'];
                                $grandtotal = $item['subtotal'] + $grandtotal;
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>assets/gambar/<?php echo $item['gambar'] ?>" width="80">
                                    </td>
                                    <td><?php echo $item['name'] ?></td>
                                    <td>Rp.<?php echo number_format($item['price']) ?></td>
                                    <td><?php echo $item['qty'] ?></td>
                                    <td>Rp.<?php echo number_format($item['subtotal']) ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>/toko/keranjang/hapus/<?php echo $item['rowid']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td>
                                    Order Total :
                                </td>
                                <td colspan="5" align="right">
                                    <b>Rp.<?php echo number_format($grandtotal) ?></b>
                                </td>
                            </tr>
                        </table>
                        <a href="<?php echo base_url() ?>/toko/keranjang/hapus/all" class="btn btn-sm btn-danger" onclick="javascript: return confirm('Yakin Ingin Mengosongkan Cart?')">
                            Kosongkan Cart</a>
                        <button class="btn btn-sm btn-warning" type="submit">Update Cart</button>
                        <a href="<?php echo base_url() ?>/toko/keranjang/check_out" class='btn btn-md btn-primary float-right' style="margin-right: 130px;">Check Out</a>

                    <?php } else { ?>

                        <?php
                        echo "<script>alert('Keranjang Masih Kosong...')</script>";
                        echo "<script>location='../konsumen/list_produk';</script>";
                        ?>

                    <?php } ?>
                </div>
            </div>
        </section>
    </div>