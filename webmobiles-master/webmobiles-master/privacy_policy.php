<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

    <title>Privacy WebMobile</title>
  
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
				<h2>Privacy Policy</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Privacy Policy</li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->


  <section class="white-wrapper nopadding">
    	<div class="container" style="margin-top:40px; margin-bottom:40px">
        	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            	<div class="widget padding-top">
                    <h3>  Privacy <span> Policy</span>  </h3>
                    <p>
                    We hate spam just as much as you do. We will never share your information with third parties unless required to do so by law or requested by you. The information we collect from you will be used to maintain your services with us and to represent the quality of our work to others, such as in our online portfolio. 
                    </p>

                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->
            
        	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            	<div class="wow fadeInRight margin-top">
					<img class=" img-responsive" src="images/privacy.png" alt="">
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