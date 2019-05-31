<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="<?=base_url()?>/images/favicon.png" type="image/gif">
        <title>Pemesanan | Kedai Yatai Tebet</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="<?php echo base_url()?>css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url()?>css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url()?>css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="<?php echo base_url()?>js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="<?php echo base_url()?>js/wow.min.js"></script>
        <!-- slider js -->
        <script src="<?php echo base_url()?>js/slider.js"></script>
        <script src="<?php echo base_url()?>js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="<?php echo base_url()?>js/main.js"></script>
        <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Apakah anda ingin menghapus semua pemesanan ?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>menu/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="<?php echo base_url()?>" >
                            <img src="<?php echo base_url()?>images/logo.png" height='52px' alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo base_url() ?>">Beranda</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>menu">Menu</a></li>
                            <?php $qty = count($this->cart->contents()); ?>
                            <li><a href="<?php echo base_url() ?>menu/pemesanan">Pemesanan <span class="badge"><?php echo $qty?></span></a></li>
                            <li><a href="<?php echo base_url() ?>about">Tentang Kami</a></li>
                            <li><a href="<?php echo base_url() ?>kontak">Kontak</a></li>
                            <li><a class="ion-person" href="<?php echo base_url() ?>admin/login"></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Pemesanan</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url()?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>menu">
                                        Menu
                                    </a>
                                </li>
                                <li class="active">Pemesanan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section class="works service-page">
                <div class="container">
                    <div class="row">
                    <div id="text" align="center"> 
            <?php  $cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             if(empty($cart_check)) {
             echo '<section class="moduler wrapper_404">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" ><i class="icon ion-ios-cart-outline"></i></h1>
                            <h2 class="wow fadeInUp animated" data-wow-delay=".6s">Pemesanan Kosong</h2>
                            <p class="wow fadeInUp animated" data-wow-delay=".9s">Silahkan terlebih dahulu anda memesan menu.</p>
                            <a href="/kedai-yatai/menu" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">Menu</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>'; 
             }  ?> 
                </div>
                        <table class="table table-bordered">
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                  <thead class="thead-inverse">
                    <tr align="center">
                        <td><b>No</b></td>
                        <td><b>Nama Makanan</b></td>
                        <td><b>Harga</b></td>
                        <td><b>Banyak</b></td>
                        <td><b>Sub Total</b></td>
                        <td><b>Hapus</b></td>
                    </tr>
                    </thead>
                    <?php
                     // Create form and send all values in "menu/update_cart" function.
                    echo form_open('menu/update_cart');
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td align="center">
                       <?php echo $i++; ?>
                            </td>
                            <td>
                      <?php echo $item['name']; ?>
                            </td>
                            <td>
                                Rp <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td align="center">
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: center"'); ?>
                            </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                Rp <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td align="center">
                              
                            <?php 
                            // cancle image.
                            $path = "<img src='http://localhost/kedai-yatai/assets/images/cart_cross.jpg' width='25px' height='20px'>";
                            echo anchor('menu/remove/' . $item['rowid'], $path); ?>
                            </td>
                     <?php endforeach; ?>
                    </tr>
                    <tr>
                    <?php $rows = count($this->cart->contents()); ?>
                    <?php $total = + $grand_total; ?>
                        <td colspan="3"><b>Total Pembayaran: Rp <?php 
                        
                        //Grand Total.
                        echo number_format($total, 2); ?></b></td>
                        
                        <?php // "clear cart" button call javascript confirmation message ?>
                        <td colspan="3" align="right"><input type="button" class ='btn btn-info' value="Kosongkan Pemesanan" onclick="clear_cart()">
                            
                            <?php //submit button. ?>
                            <input type="submit" class ='btn btn-info' value="Perbarui">
                            <?php echo form_close(); ?>
                            
                            <!-- "Place order button" on click send "billing" controller  -->
                            <input type="button" class ='btn btn-info' value="Berikutnya" onclick="window.location = 'informasi'"></td>
                    </tr>
<?php endif; ?>
            </table>
                    </div>
                </div>
            </section> <!-- #works -->               
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Memiliki pertanyaan atau masalah ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Kami di sini untuk membantu Anda.</p>
                                <a href="<?php echo base_url() ?>kontak" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Hubungi Kami</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright © 2016 <a href="<?php echo base_url() ?>">Kedai Yatai Tebet</a> All Right Reserved</p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="#" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->
                
        </body>
    </html>