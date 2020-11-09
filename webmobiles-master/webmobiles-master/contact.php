<!DOCTYPE html>
<html lang="en">
<head>
 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

<title>WebMobile</title>

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
      
  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->

</head>
<body>
    <?php
    $home="index"; $company = ""; $oper_pro = ""; $sustain = ""; $investors = "";
    include 'header.php';
    ?>

	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Contact us </h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact us</li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->

    <section class="white-wrapper nopadding">
        
    	<!-- <div id="map"></div> -->
        <div class="clearfix"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1970.4302373939809!2d7.5606634578583405!3d8.984984098387864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0efa2ceae8d3%3A0x165b387721eda25c!2sEsu%20Jetta%20Rd%2C%20New%20Karu!5e0!3m2!1sen!2sng!4v1604768965485!5m2!1sen!2sng" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="container">
        
        <div class="contact_form">
		<div id="message"></div>
            <form id="contactform" action=" contact.php" name="contactform" method="post">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="name" id="contact_name" class="form-control" placeholder="Name" required> 
					<input type="text" name="email" id="email_address" class="form-control" placeholder="Email Address" required> 
					<!-- <input type="text" name="web" id="website" class="form-control" placeholder="Website">  -->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required> 
					<textarea class="form-control" name="comment" id="comments" rows="6" placeholder="Message" required></textarea>
					<button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right">Submit</button>
				</div>
            </form>    
        </div><!-- end contact-form -->
        
        <div class="clearfix"></div>
        
        <div class="row padding-top margin-top">
			<div class="contact_details">
				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa fa-map-marker fa-3x"></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                             <p>No 25 Esu-Jetta road,<br>
                             Jikwoyi - Abuja</p>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->
                
				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa fa-phone fa-3x"></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                             <p><strong>Phone: </strong>+234 818 987 6324<br>
							<strong>Phone: </strong> +234 803 472 2753</p>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->  

				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa fa-envelope-o fa-3x"></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                             <p><strong>Email: </strong>support@webmobiles.com.ng<br>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->                  
			</div><!-- end contact_details -->
        </div><!-- end margin-top --><br><br>
        </div><!-- end container -->
    </section><!-- end map wrapper -->

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