<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="<?=base_url()?>/images/favicon.png" type="image/gif">
        <title>Kontak | Kedai Yatai Tebet</title>
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
                            <h2>Hubungi Kami</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url()?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Kontak</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Hubungi Kami</h2>
                            
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                                    </div>
                                    
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Temukan Kami</h2>
                            
                            <div class="map">
                                <iframe src="https://wego.here.com/directions/mix//YATAI-TebetRamen-Tusukan,-Jl.-Tebet-Barat-Dalam-No.-60-Dekat-Cheese-cake-factory,-Jakarta,-Indonesia:e-eyJuYW1lIjoiWUFUQUkgVGViZXRcL1JhbWVuIFR1c3VrYW4iLCJhZGRyZXNzIjoiSmwuIFRlYmV0IEJhcmF0IERhbGFtIE5vLiA2MCAoIERla2F0IENoZWVzZSBjYWtlIGZhY3RvcnkpLCBKYWthcnRhLCBJbmRvbmVzaWEiLCJsYXRpdHVkZSI6LTYuMjM2NTcsImxvbmdpdHVkZSI6MTA2Ljg0NjcyOTksInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MTQxNTM1MzkxNTQ0OTIwMn0=?map=-6.23657,106.84673,17,normal&fb_locale=en_US" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <i class="ion-ios-location-outline"></i>
                            <p>Jl. Tebet Barat Dalam No. 60<br>Jakarta, Indonesia </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <p>kedaiyatai@mail.com<br><br></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>0812-8992-4848<br><br></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <i class="ion-printer"></i>
                            <p>628-9087<br><br></p>
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