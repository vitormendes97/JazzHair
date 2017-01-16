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
        
        <!-- Page Loader -->        
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
                

                 
                 
            <!-- Contact Section -->
            <section class="page-section" id="contact">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-sm-4">
                            <h2 class="section-title font-alt align-left mt-0 mb-70 mb-sm-40">
                                <table class="table table-hover"  style="width: 76%;">
                                        
                                        <thead>
                                            <tr>
                                                <th class="horario_atendimento">
                                                    Horário de Atendimento
                                                </th>
                                               <!--  <th style="width:20%;">
                                                </th> -->
                                            </tr>
                                        </thead>
                                        
                                        <tbody>            
                                            <tr>
                                                <td class="td-ltspacing">
                                                    Terça à Sábado
                                                    <div class="small">
                                                       Das 9 às 21h
                                                    </div>
                                                </td>
                                                <!-- <td class="align-right">
                                                    Das 9h às 21h
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td class="td-ltspacing">
                                                    Domingos e Segundas
                                                    <div class="small">
                                                       Fechado
                                                    </div>
                                                </td>
                                                <!-- <td class="align-right">
                                                    Das 9h às 21h
                                                </td> -->
                                            </tr>
                                        </tbody>
                                    </table>

                            </h2>
                        </div>
                        
                        <div class="col-sm-8">
                            
                            <div class="section-text mb-70 mb-xs-40">
                                <h3 style="font-family: Dosis, arial, sans-serif;color:black;">
                                Fale Conosco!</h3>
                                <p>Nós da Jazz Hair adoramos conversar sobre beleza.<br>Entre em contato e mande sua sugestão para nós!</p>
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-sm-5 mb-sm-60">
                                    
                                    <!-- Phone -->
                                    <div class="contact-item mb-30">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Telefone
                                        </div>
                                        <div class="ci-text">
                                             (11) 5082-3829
                                        </div>
                                    </div>
                                    <!-- End Phone -->
                                    
                                    <hr class="mb-30"/>
                                    
                                    <!-- Address -->
                                    <div class="contact-item mb-30">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Endereço
                                        </div>
                                        <div class="ci-text">
                                            Avenida Onze de Junho, 285 Vila Clementino, São Paulo, SP 
                                        </div>
                                    </div>
                                    <!-- End Address -->
                                    
                                    <hr class="mb-30"/>
                                    
                                    <!-- Email -->
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Email
                                        </div>
                                        <div class="ci-text">
                                            <a href="mailto:contato@jazzhair.com.br">contato@jazzhair.com.br</a>
                                        </div>
                                    </div>
                                    <!-- End Email -->
                                    
                                </div>
                                
                                <div class="col-sm-7">
                                    
                                    <form class="form contact-form" id="contact_form">
                                        <div class="clearfix">
                                            <div class="form-group">
                                                 <select class="input-md form-control">
                                                <option>Selecione o Assunto</option>
                                                <option>Dúvidas</option>
                                                <option>Sugestões</option>
                                                <option>Reclamações</option>
                                                <option>Parceirias</option>
                                                <option>Trabalhe conosco</option>
                                            </select>
                                            </div>
                                            <!-- Name -->
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Nome Completo" pattern=".{3,100}" required>
                                            </div>
                                            
                                            <!-- Email -->
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                            </div>
                                            
                                            <!-- Message -->
                                            <div class="form-group">
                                                <textarea name="message" id="message" class="input-md round form-control" style="height: 100px;" placeholder="Mensagem"></textarea>
                                            </div>
                                            
                                        </div>
                                                
                                        <div class="clearfix">
                                
                                            <div class="cf-left-col">
                                                
                                                <!-- Inform Tip -->                                        
                                                <div class="form-tip pt-20">
                                                    <i class="fa fa-info-circle"></i> É obrigatório preencher todos os campos.
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="cf-right-col">
                                                
                                                <!-- Send Button -->
                                                <div class="align-right pt-10">
                                                    <button class="submit_btn btn btn-mod btn-medium btn-circle" id="submit_btn">Enviar</button>
                                                </div>
                                                
                                            </div>
                                            
                                       </div>
                                           
                                       <div id="result"></div>
                                    </form>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Contact Section -->
            
            
            
            <!-- Google Map -->
            <div class="google-map">
                <div data-address="Avenida Onze de Junho, 285 Vila Clementino, São Paulo, SP" id="map-canvas"></div>
            </div>
            <!-- End Google Map -->
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
