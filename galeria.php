<?php 
    require 'php/Pictures.php';

    $pictures = new Pictures();
    $noivas = $pictures->getFile('pictures/Noivas','Noivas');
    $cabelo = $pictures->getFile('pictures/Cabelo','Cabelo');
    $manicure = $pictures->getFile('pictures/Manicure','Manicure');
    $maquiagem = $pictures->getFile('pictures/Maquiagem','Maquiagem');
    $salao = $pictures->getFile('pictures/Salao','Salao');

 ?>


<!DOCTYPE html>
<html>
    <head>
        <title>JazzHair</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom_jazz.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/YTPlayer.css">        
        
        
    </head>
    <body class="appear-animate">
        
          <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

    <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation panel -->
            <nav class="main-nav dark js-stick">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#" class="logo">
                            <img src="images/jazzhair/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                     <?php require 'header.php'; ?>
            
            
            </nav>
       


            <!-- Portfolio Section -->
            <section class="page-section pb-0">
                <div class="relative">
                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                        <a href="#" class="filter active" data-filter="*">Todas</a>
                        <a href="#work" class="filter" data-filter=".cabelo">Cabelo</a>
                        <a href="#branding" class="filter" data-filter=".manicure">Manicure</a>
                        <a href="#design" class="filter" data-filter=".maquiagem">Maquiagem</a>
                        <a href="#" class="filter" data-filter=".noivas">Noivas</a>
                        <a href="#photography" class="filter" data-filter=".salao">Salão</a>
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid clearfix font-alt hover-white hide-titles masonry" id="work-grid">
                        
                        <!-- Work Item (Lightbox) -->
                        <?php  foreach ($salao as $salon) {?>
                        <li class="work-item mix salao">
                            <a href="<?php echo $salon; ?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="<?php echo $salon;?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Ambiente</h3>
                                    <div class="work-descr">
                                        Jazz Hair
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        <?php } ?>
                        
                        <!-- Work Item (External Page) -->
                        <?php foreach ($manicure as $nails) {
                         ?>
                        <li class="work-item mix manicure">
                            <a href="<?php echo $nails; ?>" 
                            class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img class="work-img" src="<?php echo $nails; ?>"  
                                    alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Manicure</h3>
                                    <div class="work-descr">
                                        Jazz Hair
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                        <!-- End Work Item -->
                        
                        
                         <!-- Work Item (External Page) -->
                         <?php foreach ($noivas as $bride ) { ?>
                        <li class="work-item mix noivas">
                            <a href="<?php echo $bride; ?>" 
                            class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img class="work-img" src="<?php echo $bride; ?>"  
                                    alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Noiva</h3>
                                    <div class="work-descr">
                                        Jazz Hair
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                        <!-- End Work Item --> 

                        <!-- Work Item (External Page) -->
                        <?php foreach ($cabelo as $hair) { ?>
                        <li class="work-item mix cabelo">
                            <a href="<?php echo $hair; ?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img class="work-img" src="<?php echo $hair; ?>" alt="Cabelo" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Cabelo</h3>
                                    <div class="work-descr">Jazz Hair</div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                        <!-- End Work Item -->

                            <!-- Work Item (External Page) -->
                            <?php foreach ($maquiagem as $make) { ?>
                        <li class="work-item mix maquiagem">
                            <a href="<?php echo $make; ?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img class="work-img" src="<?php echo $make; ?>" 
                                    alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Maquiagem</h3>
                                    <div class="work-descr">Jazz Hair</div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                        <!-- End Work Item -->                     
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->


              <?php require 'footer.php'; ?>
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>  
        <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>       
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
