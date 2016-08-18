<?php
function cabezal(){
?>
<!DOCTYPE html >
<html>
  
<head>
    <title>Dr. Guillermo Remes Cabada | Cirujano Plastico Certificado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
	
    <!--theme colour-->
	<link rel="stylesheet" id="color" href="css/blue.css">
    
    <!-- medicom style -->
    <link href="css/medicom.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
   <!-- Anything Slider -->
	<link rel="stylesheet" href="css/anythingslider.css">

    <!-- date picker -->
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
    
    <!-- Form styling -->
    <link rel="stylesheet" href="css/uniform.default.css" media="screen" />

    <link rel="stylesheet" href="css/jquery.fancybox8cbb.css?v=2.1.5">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 
    
    <div id="wrapper">
    
    
    <header class="medicom-header">
    	<div class="colourfull-row"></div>
        <div class="container">
        	<nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Dr. Guillermo Remes Cabada" title="Dr. Guillermo Remes Cabada"></a>
              </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="dropdown active">
                    <a href="index.php">Inicio</a>
                  </li>
                  
                  <li class="dropdown">
                    <a href="conocenos.php">Dr. Guillermo Remes</a>
                  </li>
                  
                  <li class="dropdown">
                    <a href="servicios.php">Servicios</a>
                  </li>

                  <li class="dropdown">
                    <a href="tecnologia.php">Tecnología</a>
                  </li>
                  
                  <li class="dropdown last">
                    <a href="contacto.php">Contacto</a>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </nav>

        </div>
        <div class="header-bottom-line"></div>
    </header>
    <?php
    }

    function footer(){
    ?>
     <div class="colourfull-row"></div>
    <footer id="footer" class="light">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4">
                    <div class="footer-widget">
                       <div class="col-md-10">
                       <a href="index.html"></a>
              <h4><span>DR. GUILLERMO REMES</span></h4>
                  <p class="footer-bottom-text">Médico Cirujano Certificado con 35 años de experiencia.</p>
                </div>
                    </div>
                </div>
            	<div class="col-md-3">
                    <div class="footer-widget">
                        <h4><span>Contacto</span></h4>
                        <p>Cirugía Plástica, Estética y Reconstructiva</p>
                        <div class="contact-widget">
                        	<i class="fa fa-home"></i><p>Palmeras No. 562, Fracc. Jardines de Virginia, Boca del Río Veracruz.</p>
							<!--<i class="fa fa-globe"></i><p><a href="#.">www.medicom.com</a></p>-->
                            <i class="fa fa-mobile"></i><p class="phone-number">(299) 130-4093</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                <table>
                  <tr><td><img src="images/amcper1.png"></td><td><img src="images/Amcper.png"></td></tr>
                </table>
            </div>
        </div>
        <div class="container">
                <div class="col-md-12">
        <p class="copyright text-center">Copyright &copy; 2016 Biomarketing. All right reserved. | Dr. Guillermo Remes</p>
        <br/>
        </div>
        </div>
        </footer><!--end #wrapper-->
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/jquery.anythingslider.js"></script>
    <script src="js/jquery.stellar.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/waypoints.js"></script>
	<script src="js/jquery.uniform.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.html"></script>
    <script src="js/bootstrap.min.html"></script>
    <script src="js/owl.carousel.js"></script>
	<script src="js/jquery.anythingslider.html"></script>
    <script src="js/jquery.stellar.js"></script>
    <!--jCarousel library-->
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <!--fancy box-->
	<script src="js/jquery.fancybox.pack8cbb.js?v=2.1.5"></script>
    <script src="js/jquery.fancybox-mediac924.js?v=1.0.6"></script>
    <script src="js/color-switcher.js"></script>
	<script type="text/javascript">
		jQuery(function($){
			
			$('.fancybox-media').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				helpers : {
					media : {}
				}
			});
			// parallaax
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 0
			});
			
		   // AnythingSlider initialization
			$('#slider').anythingSlider();
			
			//jcarousel
			jQuery('#doctors-list').jcarousel({
				scroll :1
			});

			
			//team description box
			$(".team-des-btn").click(function(){
				$('.meet-the-doctors').find('div.team-desc').fadeOut();
				$('.meet-the-doctors').find('a.team-des-btn i').removeClass("fa-minus");
				$('.meet-the-doctors').find('a.team-des-btn').removeClass("active");				
				$(this).parent().find('div.team-desc').fadeToggle();
				$(this).parent().find('a.team-des-btn i').toggleClass("fa-minus");
				$(this).parent().find('a.team-des-btn').toggleClass("active");
			  });

			
			//owl carousel
			$("#medicom-carousel").owlCarousel({
				items : 3,
				itemsDesktop : [1170,3],
				itemsDesktopSmall : [979,2]
			  });
			 	
		})(jQuery);

	</script>
    <script type="text/javascript">
	
		jQuery(function($){
			// parallaax
			$.stellar({
				horizontalScrolling: true,
				verticalOffset: 0
			});
			//$(".panel-collapse").collapse();

			
		   // AnythingSlider initialization
			$('#slider').anythingSlider({
        enablePlay          : true,      // if false, the play/stop button will still be visible, but not clickable.
        autoPlay            : true,      // This turns off the entire slideshow FUNCTIONALY, not just if it starts running or not
        autoPlayLocked      : true,     // If true, user changing slides will not stop the slideshow
        startStopped        : false,     // If autoPlay is on, this can force it to start stopped
        pauseOnHover        : true,      // If true & the slideshow is active, the slideshow will pause on hover
        resumeOnVideoEnd    : true,      // If true & the slideshow is active & a youtube video is playing, the autoplay will pause until the video completes
        stopAtEnd           : false,     // If true & the slideshow is active, the slideshow will stop on the last page. This also stops the rewind effect when infiniteSlides is false.
        playRtl             : false,     // If true, the slideshow will move right-to-left
        startText           : "Start",   // Start button text
        stopText            : "Stop",    // Stop button text
        delay               : 3000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
        resumeDelay         : 4000,     // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
        animationTime       : 600,       // How long the slideshow transition takes (in milliseconds)
        easing              : "swing",   // Anything other than "linear" or "swing" requires the easing plugin
      });
			
			//date picker
			$("#datepicker").datepicker({
				inline: true
			});
			
			//form styling
			$("select").uniform();
			
			
			
		})(jQuery);

	</script>
  </body>
</html>
    <?php }
    ?>