<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

    <title>Services WebMobile</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
  
    <!-- Bootstrap Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Styles -->
    <link href="style.css" rel="stylesheet">
    
    <!-- Carousel Slider -->
    <link href="css/owl-carousel.css" rel="stylesheet">
    
    <!-- CSS Animations -->
    <link href="css/animate.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>
  
    <!-- SLIDER ROYAL CSS SETTINGS -->
    <link href="royalslider/royalslider.css" rel="stylesheet">
    <link href="royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">
    
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link href="images/prettyPhoto/favicon.png" rel="shortcut icon">
  
    <section class="slider-wrapper">
    
        <!--Start Header-->
    <?php
    $home="index"; $company = ""; $oper_pro = ""; $sustain = ""; $investors = "";
    include 'header.php';
    ?>




<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Services</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Mobile Software Development</li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->


  <section class="white-wrapper nopadding">
    	<div class="container" style="margin-top:40px; margin-bottom:40px">
        	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            	<div class="widget padding-top">
                    <h3>  Mobile <span> SOFTWARE</span> DEVELOPMENT </h3>
                    <p>
             Mobile software is the cornerstone of any modern business. Webmobiles I.T Solution has extensive experience creating innovative mobile apps with different technology stacks. We develop the right mobile apps for our customers; our solutions are robust and reliable, and we always use the most up-to-date
             </p>
                 
                    <p>Our software development teams are dedicated to the craft of quality bespoke software products and mobile applications. Our team applies Agile Development techniques and Continuous Process Improvement (CPI) to manage custom software development projects. We take each project as an opportunity to improve and achieve excellence.</p>
                    
                    <P>
                    We recognize that successful software integration and implementation can bring big changes to your business processes. With the high risks and rewards involved, we take every opportunity to find methods for making our software development faster, better, on schedule and within budget. 
                    </P>
               
                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->
            
        	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            	<div class="wow fadeInRight margin-top">
					<img class=" img-responsive" src="images/webmobile.png" alt="">
                </div>
			</div><!-- end col-lg-6 -->
		</div><!-- end container -->
    </section><!-- end grey-wrapper -->
    
    
    <section id="one-parallax" class="parallax" style="background-image:linear-gradient(rgba(20,20,30,0.54), rgba(20,20,30,0.54)),url('images/webmobile2.png');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="overlay">
        	<div class="container">
                <div class="general-title">
                    <h2>Think More of Us</h2>
                    <hr>
                    <p class="lead">At Mobile Web we help business build an intelligently designed digital future. <br> Tell us about your idea, and we’ll offer the most fitting technological solution.</p>
                </div><!-- end general title -->
            	<div class="clients padding-top text-center">
                <a class="btn btn-warning" href="contact.php" role="button">Talk to us Now</a>

                </div><!-- end row -->
            </div><!-- end container -->
    	</div><!-- end overlay -->
    </section><!-- end transparent-bg -->

<?php
include "footer.php";
    ?>

     <!-- Main Scripts-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom-portfolio.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript">
	var revapi;
	jQuery(document).ready(function() {
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"on"
		});
	});	//ready
  </script>
      
  <!-- Royal Slider script files -->
  <script src="royalslider/jquery.easing-1.3.js"></script>
  <script src="royalslider/jquery.royalslider.min.js"></script>
  <script>
	jQuery(document).ready(function($) {
	  var rsi = $('#slider-in-laptop').royalSlider({
		autoHeight: false,
		arrowsNav: false,
		fadeinLoadedSlide: false,
		controlNavigationSpacing: 0,
		controlNavigation: 'bullets',
		imageScaleMode: 'fill',
		imageAlignCenter: true,
		loop: false,
		loopRewind: false,
		numImagesToPreload: 6,
		keyboardNavEnabled: true,
		autoScaleSlider: true,  
		autoScaleSliderWidth: 486,     
		autoScaleSliderHeight: 315,
	
		/* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
		imgWidth: 792,
		imgHeight: 479
	
	  }).data('royalSlider');
	  $('#slider-next').click(function() {
		rsi.next();
	  });
	  $('#slider-prev').click(function() {
		rsi.prev();
	  });
	});
  </script>
    
    
</body>
</html>