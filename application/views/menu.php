<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="<?=base_url()?>/images/favicon.png" type="image/gif">
        <title>Menu | Kedai Yatai Tebet</title>
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
                            <h2>Menu</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url()?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Menu</li>
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
                        <?php
            
                            // "$products" send from "menu" controller,its stores all product which available in database. 
                            foreach ($products as $product) {
                            $id = $product['id_menu'];
                            $name = $product['nama_menu'];
                            $price = $product['harga_satuan'];
                        ?>  
                        <div class="col-sm-3">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="<?php echo base_url() . $product['img_menu'] ?>" class="img-responsive" alt="this is a title" >
                                </div>
                        <?php
                            // Create form and send values in 'menu/add' function.
                            echo form_open('menu/add');
                            echo form_hidden('id', $id);
                            echo form_hidden('name', $name);
                            echo form_hidden('price', $price);
                        ?>
                                <figcaption>
                                <h4 align="center">
                                <a>
                                    <?php echo $name; ?>
                                </a>
                                </h4>
                                <p align="center">
                                    Rp <?php echo $price; ?>
                                </p></br>
                                <div align="center">
                                <?php
                                    $btn = array(
                                    'class' => 'btn btn-info',
                                    'value' => 'Pesan',
                                    'name' => 'action'
                                    );
                        
                                    // Submit Button.
                                    echo form_submit($btn);
                                    echo form_close();
                                ?>
                                </div>
                                </figcaption>
                            </figure>
                        </div>
                        <?php
                            }
                        ?>
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