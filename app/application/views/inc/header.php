<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Relay For Life - Kenya Cancer Association</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


<!-- Styles -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/purple.css"  />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="http://images.webinane.com/jquery.1.9.1.js" type="text/javascript"></script>
<script src='<?php echo base_url();?>assets/js/testimonials.js'></script>
<script src='<?php echo base_url();?>assets/js/styleswitcher.js'></script>

<script src='<?php echo base_url();?>assets/js/script.js'></script>
<script src='http://images.webinane.com/bootstrap.js'></script>
<script src="<?php echo base_url();?>assets/js/html5lightbox.js"></script>
<script src="http://images.webinane.com/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script defer src="http://images.webinane.com/jquery.flexslider.js"></script>
<script defer src="<?php echo base_url();?>assets/js/jquery.mousewheel.js"></script>
			
<!-- Scripts For Layer Slider  -->
<script src="<?php echo base_url();?>assets/layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
jQuery("#layerslider,#layerslider2,#layerslider3").layerSlider({
	responsive: true,
	responsiveUnder: 1280,
	layersContainer: 1170,
	skin: 'fullwidth',
	hoverPrevNext: true,
	skinsPath: 'layerslider/skins/'
});
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#post-carousel').carouFredSel({
		auto: false,
		prev: '#prev5',
		next: '#next5',
		items: {
			visible: 1,
		},
	});

	});		
	
</script>	
<script>
$(window).load(function(){
  $('.shop').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: false,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,	
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});

	$('.posts-carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: false,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,	
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
});
</script>
</head>
<body>
<div class="theme-layout">

<div id="top-bar">
	<div class="container">
		<ul>
			<li>
				<i class="icon-home"></i>
				KENCASA Offices, KNH Nairobi.
			</li>
			<li>
				<i class="icon-phone"></i>
				(+254) 717-666-044
			</li>
			<li>
				<i class="icon-envelope"></i>
				info@relayforlifekenya.org
			</li>
		</ul> 
		<div class="search-box">
			<input type="submit" value="" class="submit-button">
			<input type="text" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" class="search-input">
		</div>
	</div>
</div>

<header class="header2 sticky">
	<div class="container">
		<div class="logo">
			<a href="#" title=""><img src="<?php echo base_url();?>assets/images/logo.png"alt="Logo"><h1><i>Relay For Life</i> Kenya</h1></a>
		</div><!-- Logo -->
		<a class="header-btn" href="" title="">DONATE</a>
		<nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a href="<?php echo base_url();?>home/home.php">Home</a>

				<li><a>About Us</a>
					<ul>
						<li><a href="<?php echo base_url();?>about-us/what-is-relay.html" title="">What is Relay For Life?</a></li>
						<li><a href="<?php echo base_url();?>about-us/about.html" title="">Meet The Team</a></li>
						
					</ul><!-- Drop Down -->				
				</li>
                <li><a>Get Involved</a>
                    <ul>
                        <li><a href="#">Participate in Relay 2015</a>
                        <li><a href="#">Sign Up As a Volunteer</a>
                        <li><a href="#">Support Relay with A Donation</a>

                        </li>
                    </ul><!-- Drop Down -->
				<li><a>Products</a>
					<ul>
						<li><a href="<?php echo base_url();?>products/products.html">Shop for Products</a>
							</li>
						<li><a href="<?php echo base_url();?>products/cart.html">View My Cart</a>
							</li>
						
						<li><a href="<?php echo base_url();?>products/checkout.html">Checkout</a>
						</li>
						
					</ul>
				</li>
				
				<li><a>Gallery</a>
					<ul>
						<li><a href="<?php echo base_url();?>gallery/image-gallery.html">Image Gallery</a>
						
						<li><a href="#">Video Gallery</a>
							
						</li>
						</ul><!-- Drop Down -->
				</li>
				<li><a href="<?php echo base_url();?>resource-center/resource-center.html">Resource Center</a>
					
				</li>
				<li><a href="<?php echo base_url();?>faqs/faq.html">FAQs</a></li>
				<li><a href="<?php echo base_url();?>contact-us/contact.html">Contact Us</a></li>
					
				
			</ul> 

		</nav><!-- Menu -->

	</div>		
</header>
    <div class="responsive-header">
        <div class="responsive-logo">
            <a href="#" title=""><img style="width: 40px;" src="images/logo.png" alt="Logo" /><h1>Relay For Life</h1></a>
        </div>
        <span><i class="icon-align-justify"></i></span>
        <ul>
            <li class="active"><a href="<?php echo base_url();?>home/home.php">Home</a>

            <li><a>About Us</a>
                <ul>
                    <li><a href="<?php echo base_url();?>about-us/what-is-relay.html" title="">What is Relay For Life?</a></li>
                    <li><a href="<?php echo base_url();?>about-us/about.html" title="">Meet The Team</a></li>

                </ul><!-- Drop Down -->
            </li>
            <li><a>Get Involved</a>
                <ul>
                    <li><a href="#">Participate in Relay 2015</a>
                    <li><a href="#">Sign Up As a Volunteer</a>
                    <li><a href="#">Support Relay with A Donation</a>

                    </li>
                </ul><!-- Drop Down -->
            <li><a>Products</a>
                <ul>
                    <li><a href="<?php echo base_url();?>/products/products.html">Shop for Products</a>
                    </li>
                    <li><a href="<?php echo base_url();?>products/cart.html">View My Cart</a>
                    </li>

                    <li><a href="<?php echo base_url();?>products/checkout.html">Checkout</a>
                    </li>

                </ul>
            </li>

            <li><a>Gallery</a>
                <ul>
                    <li><a href="<?php echo base_url();?>gallery/image-gallery.html">Image Gallery</a>

                    <li><a href="#">Video Gallery</a>

                    </li>
                </ul><!-- Drop Down -->
            </li>
            <li><a href="<?php echo base_url();?>resource-center/resource-center.html">Resource Center</a>

            </li>
            <li><a href="<?php echo base_url();?>faqs/faq.html">FAQs</a></li>
            <li><a href="<?php echo base_url();?>contact-us/contact.html">Contact Us</a></li>


    </div><!--Responsive header-->
