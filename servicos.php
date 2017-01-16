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
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

    <!-- Page Wrap -->
        <div class="page" id="top" ng-app="jazzapp" ng-Controller="ServicoController">
            
            <!-- Navigation panel -->
            <nav class="main-nav dark js-stick">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.php" class="logo">
                            <img src="images/jazzhair/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                   
                     <?php require 'header.php'; ?>
            
                     </nav>

              <!-- About Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                                        
                    <!-- Logo Grid -->
                    <div class="row multi-columns-row alt-features-grid">
                        
                        <!-- Logo Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img class="img-servicos" src="images/jazzhair/cabelo.jpg" alt=""/>
                                </div>
                                <h3 class="alt-features-title font-alt" style="text-align: center;">Cabelo</h3>
                                <div class="alt-features-descr align-left text_config">
                                   Seus cabelos precisam ser sempre bem cuidados, sempre ministrados por um profissional de confiança.  Aqui, você tem as duas coisas. Os melhores produtos, nacionais e importados, são aplicados pelas mãos de profissionais com formação em escolas de Paris e Milão.
                                </div>
                                <div class="post-prev-more" style="margin-top: 5%;">
                                    <button type="button" data-toggle="modal" data-target="#hair"
                                    class="btn btn-mod btn-gray btn-round" ng-click="changePage(hairService);">Veja mais
                                    <i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- End Logo Item -->
                        
                        <!-- Logo Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img class="img-servicos" 
                                    src="images/jazzhair/nails.jpg" class="service_img" alt="" />
                                </div>
                                <h3 class="alt-features-title font-alt text_config" style="text-align: center;">Manicure</h3>
                                <div class="alt-features-descr align-left">
                                    Unhas curtas ou compridas? Esmalte claro ou aquele vermelho fatal? Não importa o seu estilo... Vamos cuidar das suas unhas para você brilhar em todos os lugares!
                                </div>
                                <div class="post-prev-more" style="margin-top: 5%;">
                                    <a href="#" class="btn btn-mod btn-gray btn-round"
                                    ng-click="changePage(nailService);" data-toggle="modal" data-target="#hair">Veja mais
                                    <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Logo Item -->
                        
                        <!-- Logo Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img class="img-servicos"
                                    src="images/jazzhair/depilacao.jpg" alt=""/>
                                </div>
                                <h3 class="alt-features-title font-alt" style="text-align: center;">Depilação</h3>
                                <div class="alt-features-descr align-left ">
                                    Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                                    In maximus ligula semper metus pellentesque mattis. 
                                    Maecenas  volutpat, diam enim.
                                </div>
                            </div>
                        </div>
                        <!-- End Logo Item -->
                        
                        <!-- Logo Item -->
                        <!-- <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img src="images/clients-logos/with-bg/client-4.jpg" alt="" />
                                </div>
                                <h3 class="alt-features-title font-alt text_config">Digital stuff</h3>
                                <div class="alt-features-descr align-left">
                                    Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                                    In maximus ligula semper metus pellentesque mattis. 
                                    Maecenas  volutpat, diam enim.
                                </div>
                            </div>
                        </div> -->
                        <!-- End Logo Item -->
                        
                        <!-- Logo Item -->
                        <!-- <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img src="images/clients-logos/with-bg/client-5.jpg" alt="" />
                                </div>
                                <h3 class="alt-features-title font-alt text_config">Bigstream inc.</h3>
                                <div class="alt-features-descr align-left">
                                    Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                                    In maximus ligula semper metus pellentesque mattis. 
                                    Maecenas  volutpat, diam enim.
                                </div>
                            </div>
                        </div> -->
                        <!-- End Logo Item -->
                        
                        <!-- Logo Item -->
                        <!-- <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img src="images/clients-logos/with-bg/client-6.jpg" alt="" />
                                </div>
                                <h3 class="alt-features-title font-alt text_config">Rhythm and partners</h3>
                                <div class="alt-features-descr align-left">
                                    Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                                    In maximus ligula semper metus pellentesque mattis. 
                                    Maecenas  volutpat, diam enim.
                                </div>
                            </div>
                        </div> -->
                        <!-- End Logo Item -->
                        
                        
                        
                    </div>
                    <!-- End Logo Grid -->
                    
                </div>
            </section>
            <!-- End About Section -->




            <!-- Call Action Section -->
            <section class="page-section pt-0 pb-0 banner-section bg-dark" data-background="">
                <div class="container relative" style="margin-left: 0;">
                    
                    <div class="row">
                        
                           <div class="col-sm-6 banner-image wow fadeInUp" style="margin-top: 0%;">
                                <!-- <img src="images/promo-1.png" alt="" /> -->

                                    <div class="work-full-media mt-0 white-shadow">
                                <ul class="clearlist work-full-slider owl-carousel">
                                    <li>
                                        <img src="images/jazzhair/noiva1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/jazzhair/noiva2.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img style="width: 630px;" src="images/jazzhair/noiva3.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>

                            </div>
                        
                        <div class="col-sm-6">
                            
                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <h1 class="font-alt">Noivas</h1>
                                    <h3 class="banner-heading font-alt">Celebre um dos dias mais importantes da sua vida com estilo!</h3>
                                    <div class="banner-decription">
                                       O JAZZ HAIR atende suas Noivas com todo carinho, profissionalismo e dedicação. 
                                         Montamos seu Dia Da Noiva personalizado, e além disso, vamos até você! 
                                         Entre em contato para mais informações, orçamentos e datas disponíveis. 
                                         <br><br>
                                         <p><i class="fa fa-envelope-o">
                                             
                                         </i> contato@jazzhair.com.br / <i class="fa fa-phone"></i> 5084-0565</p>
                                    </div>
                                </div>
                            </div>
                            

                                                        <!-- Gallery -->
                          <!--   <div class="work-full-media mt-0 white-shadow">
                                <ul class="clearlist work-full-slider owl-carousel">
                                    <li>
                                        <img src="images/portfolio/full-project-1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/portfolio/full-project-2.jpg" alt="" />
                                    </li>
                                </ul>
                            </div> -->
                            <!-- End Gallery -->
                        </div>
                        
                     
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->


               <section class="page-section" id="about">
                <div class="container relative">
                    
                    
                    <!-- Logo Grid -->
                    <div class="row multi-columns-row alt-features-grid">
                        
                        <!-- Logo Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img class="img-servicos" 
                                    src="images/jazzhair/homem.jpg" alt=""/>
                                </div>
                                <h3 class="alt-features-title font-alt" style="text-align: center;">Homens</h3>
                                <div class="alt-features-descr align-left text_config">
                                    O atendimento ao público masculino é feito com o mesmo cuidado e qualificação dedicados às clientes. Modelagem de barba e corte masculinos estão entre as especialidades da casa.
                                </div>
                            </div>
                        </div>
                        <!-- End Logo Item -->
                        
                        <!-- Logo Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img class="img-servicos" src="images/jazzhair/make.jpg" alt=""/>
                                </div>
                                <h3 class="alt-features-title font-alt text_config" style="text-align: center;">Maquiagem</h3>
                                <div class="alt-features-descr align-left">
                                   Se você quer valorizar os pontos fortes do seu rosto ou arrasar em qualquer ocasião, a maquiagem é fundamental. Nós amamos maquiar e estamos sempre por dentro das novidades e tendências para deixar você ainda mais linda!
                                </div>
                            </div>
                        </div>
                        <!-- End Logo Item -->
                        
                        <!-- Logo Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-left">
                                <div class="alt-features-icon">
                                    <img class="img-servicos" 
                                        src="images/jazzhair/estetica.jpg" alt=""/>
                                </div>
                                <h3 class="alt-features-title font-alt" style="text-align: center;">Estética</h3>
                                <div class="alt-features-descr align-left ">
                                    Todos possuimos em particular nossa beleza e nós da Jazz Hair
                                    sabemos o quão importante é mante-la alinhada com seu dia a dia.
                                    Aqui usamos as mais modernas técnicas para valorizar sua beleza!
                                </div>
<!-- 
                                Todo mundo se preocupa com sua forma. Todos querem ser percebidos como belo, lindo e atraente. Conheça os serviços oferecidos pela Morena Mulher que vão valorizar sua beleza. -->

                            </div>
                        </div>
                        <!-- End Logo Item -->
                                        
                    </div>
                    <!-- End Logo Grid -->
                    
                </div>
            </section>

    
<div class="modal fade servicoModal" tabindex="-1" role="dialog" id="hair">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Servicos Disponíveis</p>
        <h4 class="modal-title">Categoria : {{filteredService[0].categoria}}</h4>
      </div>
      <div class="modal-body">
        <div class="service1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Serviço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="service in filteredService">
                    <td class="td-ltspacing">
                            {{service.servico}}
                            <div class="small">
                               {{service.valor | currency:'R$':true:'1.2.-3'}}
                            </div>
                    </td>
                     <!--    <td></td>
                        <td></td> -->
                    </tr>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation">
             <ul uib-pagination total-items="controll.length" 
             ng-model="currentPage" ng-change="changePage(controll)" direction-links="false">
             </ul>
        </nav>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-mod btn-gray btn-round" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                  <?php require 'footer.php'; ?>

    </div>


              <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/custom_jazz.js"></script>
        <script type="text/javascript" src="js/libs/angular.min.js"></script> 
        <script type="text/javascript" src="js/libs/ui-bootstrap.min.js"></script>
        <script type="text/javascript" src="js/libs/app.js"></script>
        <script type="text/javascript" src="js/libs/controllers/ServicoController.js"></script> 
        <script type="text/javascript" src="js/libs/services/ServicoService.js"></script>        
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