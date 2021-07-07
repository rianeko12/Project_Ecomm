   <!-- Title Page -->
   <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15 fs-70 c-black" style="background-image: url(<?php echo base_url(); ?>assets/gambar/ecom.jpg);background-position: 0px -250px;">
       <h2 class="tit6 t-center">
           Products
       </h2>
   </section>

   <!-- Content page -->
   <section>
       <div class=" bread-crumb bo5-b p-t-17 p-b-17">
           <div class="container">
               <a href="index.html" class="txt27">
                   Home
               </a>

               <span class="txt29 m-l-10 m-r-10">/</span>

               <span class="txt29">
                   Blog
               </span>
           </div>
       </div>

       <div class="container">
           <div class="row">
               <div class="col-md-8 col-lg-9">
                   <div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
                       <!-- Block4 -->
                       <div class="row">
                           <?php if (empty($produk)) : ?>
                               <tr>
                                   <td>
                                       <div class="alert alert-danger" role="alert">
                                          Data Tidak Ditemukan!
                                       </div>
                                   </td>
                               </tr>
                           <?php endif; ?>
                           <?php foreach ($produk as $produk) : ?>
                               <div class="pl-4 pt-4">
                                   <div class="card" style="width: 15rem;">
                                       <form method="post" action="<?php echo base_url(); ?>toko/konsumen/tambah_keranjang">
                                           <img src="<?php echo base_url(); ?>assets/gambar/<?php echo $produk->gambar ?>" class="card-img" width="100" height="200">
                                           <div class="card-body">
                                               <h4 class="card-title">
                                                   <?php echo $produk->nama_produk ?>
                                               </h4>
                                               <h5 class="card-text">Rp.
                                                   <?php echo number_format($produk->harga) ?>
                                               </h5>
                                           </div>
                                           <div class="card-footer">
                                               <input type="hidden" name="id" value="<?php echo $produk->id_produk; ?>" />
                                               <input type="hidden" id="nama" name="nama" value="<?php echo $produk->nama_produk; ?>" />
                                               <input type="hidden" name="harga" value="<?php echo $produk->harga; ?>" />
                                               <input type="hidden" name="gambar" value="<?php echo $produk->gambar; ?>" />
                                               <input type="hidden" name="qty" value="1" />

                                               <button type="submit" class="btn btn-md btn-success">Beli</button>
                                               <a href="<?php echo base_url('/toko/konsumen/detail_produk/') . $produk->id_produk ?>" class="btn btn-md btn-primary">Detail</a>

                                           </div>
                                       </form>
                                   </div>
                               </div>
                           <?php endforeach ?>
                       </div>
                       <!-- Pagination -->
                       <div class="pagination flex-l-m flex-w m-l--6 p-t-25">
                           <?php echo $this->pagination->create_links(); ?>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 col-lg-3">
                   <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                       <!-- Search -->
                       <form action="<?php echo base_url('toko/konsumen/list_produk') ?>" method="post">
                           <div class="input-group mb-3">
                               <input type="text" class="form-control" placeholder="Search" name="search">
                               <div class="input-group-append">
                                   <input type="submit" class="btn btn-primary" name="submit">
                               </div>
                           </div>
                           <strong>Hasil : <?php echo $total_rows; ?></strong>
                       </form>
                       <!-- Categories -->
                       <div class="categories">
                           <h4 class="txt33 bo5-b p-b-35 p-t-58">
                               Categories
                           </h4>

                           <ul>
                               <li class="bo5-b p-t-8 p-b-8">
                                   <a href="#" class="txt27">
                                       Cooking recipe
                                   </a>
                               </li>

                               <li class="bo5-b p-t-8 p-b-8">
                                   <a href="#" class="txt27">
                                       Delicious foods
                                   </a>
                               </li>

                               <li class="bo5-b p-t-8 p-b-8">
                                   <a href="#" class="txt27">
                                       Events Design
                                   </a>
                               </li>

                               <li class="bo5-b p-t-8 p-b-8">
                                   <a href="#" class="txt27">
                                       Restaurant Place
                                   </a>
                               </li>

                               <li class="bo5-b p-t-8 p-b-8">
                                   <a href="#" class="txt27">
                                       WordPress
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>