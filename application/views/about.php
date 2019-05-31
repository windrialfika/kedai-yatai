<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="<?=base_url()?>/images/favicon.png" type="image/gif">
        <title>Tentang Kami | Kedai Yatai Tebet</title>
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
                            <h2>Tentang Kami</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url()?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">About</li>
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
            <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                        <img src="<?php echo base_url()?>images/about.jpg" alt="" class="img-responsive">
                        <br><br><br><br>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Kedai Yatai Tebet</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" align="justify" data-wow-duration="500ms">
                                Kedai Yatai Tebet Ramen dan Tusukan merupakan sebuah kedai di daerah Jakarta Selatan, dimana kedai ini menjual berbagai macam masakan Jepang seperti Ramen dan Tusukan. Kedai Yatai Tebet Ramen dan Tusukan (Kedai Yatai) berusaha selalu memberikan pelayanan yang memuaskan kepada pelanggan. Dan Kedai Yatai Tebet dibangun sejak tahun 2012.
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </section>      
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