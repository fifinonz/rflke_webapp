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
			<a href="#" title=""><img src="images/logo.png"alt="Logo"><h1><i>Relay For Life</i> Kenya</h1></a>
		</div><!-- Logo -->
		<a class="header-btn" href="" title="">GET IN TOUCH</a>
		<nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a href="index.html">Home</a>

				<li><a>About Us</a>
					<ul>
						<li><a href="what-is-relay.html" title="">What is Relay For Life?</a></li>
						<li><a href="about.html" title="">Meet The Team</a></li>
						
					</ul><!-- Drop Down -->				
				</li>
				<li><a>Products</a>
					<ul>
						<li><a href="products.html">Shop for Products</a>
							</li>
						<li><a href="cart.html">View My Cart</a>
							</li>
						
						<li><a href="checkout.html">Checkout</a>
						</li>
						
					</ul>
				</li>
				
				<li><a>Gallery</a>
					<ul>
						<li><a href="image-gallery.html">Image Gallery</a>
						
						<li><a href="video-gallery.html">Video Gallery</a>
							
						</li>
						</ul><!-- Drop Down -->
				</li>
				<li><a href="resource-center.html">Resource Center</a>
					
				</li>
				<li><a href="faq.html">FAQs</a></li>
				<li><a href="contact.html">Contact Us</a></li>
					
				
			</ul> 

		</nav><!-- Menu -->

	</div>		
</header>
    <div class="responsive-header">
        <div class="responsive-logo">
            <a href="#" title=""><img style="width: 40px;" src="images/"logo.png" alt="Logo" /><h1>Relay For Life</h1></a>
        </div>
        <span><i class="icon-align-justify"></i></span>
        <ul>
            <li><a href="#" title="">Home</a>
                <ul>
                    <li><a href="index.html" title="">Home Simple 1</a></li>
                    <li><a href="index.html" title="">Home Modern Style</a></li>
                    <li><a href="index3.html" title="">Home Simple 2</a></li>
                    <li><a href="index4.html" title="">Home Simple 3</a></li>
                    <li><a href="index7.html" title="">Home Traditional Style</a></li>
                    <li><a href="index5.html" title="">Home With Video</a></li>
                    <li><a href="index6.html" title="">Home With Portfolio</a></li>
                    <li><a href="index8.html" title="">Home With Sidebar<span>NEW</span></a></li>
                    <li><a href="index9.html" title="">Home Organization 1<span>NEW</span></a></li>
                    <li><a href="index10.html" title="">Home Organization 2<span>NEW</span></a></li>
                    <li><a href="index11.html" title="">Home Minimalist 1<span>NEW</span></a></li>
                    <li><a href="index12.html" title="">Home Minimalist 2<span>NEW</span></a></li>
                    <li><a href="index13.html" title="">NonProfit Organization 2015<span>NEW</span></a></li>
                    <li><a href="#" title=""><strong>Header Styles</strong></a>
                        <ul>
                            <li><a href="header1.html" title="">Transparent Header</a></li>
                            <li><a href="header2.html" title="">Header With Social Icons</a></li>
                            <li><a href="header3.html" title="">Header With Countdown</a></li>
                            <li><a href="sticky-menu.html" title="">Sticky Header</a></li>
                            <li><a href="menu-below-slider.html" title="">Menu Below Slider</a></li>
                            <li><a href="middle-logo.html" title="">With Logo In The Mid</a></li>
                            <li><a href="index5.html" title="">Toggle Header</a></li>
                        </ul>
                    </li>
                </ul><!-- Drop Down -->
            </li>
            <li><a href="#" title="">Pages</a>
                <ul>
                    <li><a href="about.html" title="">About Wide</a></li>
                    <li><a href="contact.html" title="">Contact Wide</a></li>
                    <li><a href="what-is-relay.html" title="">Profile Single Page</a></li>
                    <li><a href="#" title="">Events</a>
                        <ul>
                            <li><a href="events.html" title="">Right Sidebar</a></li>
                            <li><a href="events-left-sidebar.html" title="">Left Sidebar</a></li>
                            <li><a href="single-event-page.html" title="">Event Single Page</a></li>
                        </ul>
                    </li>
                    <li><a href="successful-stories.html" title="">Successful Stories Wide</a></li>
                    <li><a href="services-single.html" title="">Single Service Page</a></li>
                    <li><a href="single-causes.html" title="">Single Cause Page</a></li>
                    <li><a href="causes.html" title="">Our Causes Wide</a></li>
                    <li><a href="404.html" title="">404 Page Wide</a></li>
                    <li><a href="#" title="">Projects</a>
                        <ul>
                            <li><a href="projects.html" title="">On Going Projects Wide</a></li>
                            <li><a href="single-post-project.html" title="">Single Post Project</a></li>
                            <li><a href="single-post-project-left-sidebar.html" title="">Single Post Project Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Search With Right Sidebar</a>
                        <ul>
                            <li><a href="search-found.html" title="">Search Results Found</a></li>
                            <li><a href="nothing-found.html" title="">Search Result Not Found</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Search With Left Sidebar</a>
                        <ul>
                            <li><a href="search-found-left-sidebar.html" title="">Search Results Found</a></li>
                            <li><a href="nothing-found-left-sidebar.html" title="">Search Result Not Found</a></li>
                        </ul>
                    </li>
                </ul><!-- Drop Down -->
            </li>
            <li><a href="#" title="">Cart</a>
                <ul>
                    <li><a href="#" title="">My Cart</a>
                        <ul>
                            <li><a href="cart.html" title="">Right Sidebar</a></li>
                            <li><a href="cart-left-sidebar.html" title="">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Products</a>
                        <ul>
                            <li><a href="products.html" title="">Right Sidebar</a></li>
                            <li><a href="products-left-sidebar.html" title="">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Checkout</a>
                        <ul>
                            <li><a href="checkout.html" title="">Right Sidebar</a></li>
                            <li><a href="checkout-left-sidebar.html" title="">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Order Recieved</a>
                        <ul>
                            <li><a href="order-recieved.html" title="">Right Sidebar</a></li>
                            <li><a href="order-recieved-left-sidebar.html" title="">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Single Product Page</a>
                        <ul>
                            <li><a href="single-product.html" title="">Right Sidebar</a></li>
                            <li><a href="single-product-left-sidebar.html" title="">Left Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#" title="">Portfolio</a>
                <ul>
                    <li><a href="portfolio-2-column.html" title="">2 Column Wide</a></li>
                    <li><a href="portfolio-3-column.html" title="">3 Column Wide</a></li>
                    <li><a href="portfolio-4-column.html" title="">4 Column Wide</a></li>
                </ul>
            </li>
            <li><a href="#" title="">Gallery</a>
                <ul>
                    <li><a href="gallery-one-column.html" title="">1 Column Wide</a></li>
                    <li><a href="image-gallery.html" title="">2 Column Wide</a></li>
                    <li><a href="gallery-three-column.html" title="">3 Column Wide</a></li>
                    <li><a href="gallery-four-column.html" title="">4 Column Wide</a></li>
                    <li><a href="#" title="">Video Gallery</a>
                        <ul>
                            <li><a href="gallery-three-column-video.html" title="">3 Column With Lightbox</a></li>
                            <li><a href="gallery-three-column-video2.html" title="">3 Column </a></li>
                            <li><a href="video-gallery.html" title="">2 Column With Lightbox</a></li>
                            <li><a href="gallery-two-column-video2.html" title="">2 Column</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Right Sidebar</a>
                        <ul>
                            <li><a href="gallery-one-column-with-sidebar.html" title="">1 Column</a></li>
                            <li><a href="gallery-two-column-with-sidebar.html" title="">2 Column</a></li>
                            <li><a href="gallery-three-column-with-sidebar.html" title="">3 Column</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Left Sidebar</a>
                        <ul>
                            <li><a href="gallery-one-column-with-left-sidebar.html" title="">1 Column</a></li>
                            <li><a href="gallery-two-column-with-left-sidebar.html" title="">2 Column</a></li>
                            <li><a href="gallery-three-column-with-left-sidebar.html" title="">3 Column</a></li>
                        </ul>
                    </li>
                </ul><!-- Drop Down -->
            </li>
            <li><a href="#" title="">Blog</a>
                <ul>
                    <li><a href="blog-without-sidebar.html" title="">Blog Wide</a></li>
                    <li><a href="blog-with-sidebar.html" title="">Blog With Left Sidebar</a></li>
                    <li><a href="resource-center.html" title="">Blog With Right Sidebar</a></li>
                    <li><a href="#" title="">Single Posts Right Sidebar</a>
                        <ul>
                            <li><a href="single-post-image.html" title="">Single Post With Image</a></li>
                            <li><a href="single-post-video.html" title="">Single Post With Video</a></li>
                            <li><a href="shujaa.html" title="">Single Post With Slider</a></li>
                            <li><a href="single-post-project.html" title="">Project Single Post</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Single Posts Left Sidebar</a>
                        <ul>
                            <li><a href="single-post-image-left-sidebar.html" title="">Single Post With Image</a></li>
                            <li><a href="single-post-video-left-sidebar.html" title="">Single Post With Video</a></li>
                            <li><a href="single-post-slider-left-sidebar.html" title="">Single Post With Slider</a></li>
                            <li><a href="single-post-project-left-sidebar.html" title="">Project Single Post</a></li>
                        </ul>
                    </li>

                </ul><!-- Drop Down -->
            </li>
            <li><a href="elements.html">Features</a>
                <ul>
                    <li><a href="title-style.html">Title Styles</a></li>
                    <li><a href="elements.html#tabs-style">4 Tabs Style</a></li>
                    <li><a href="elements.html#accordions-style">2 Accordions</a></li>
                    <li><a href="elements.html#blockquotes-style">2 Block Qoutes</a></li>
                    <li><a href="elements.html#highlightedtext">HighLighted Text</a></li>
                    <li><a href="elements.html#buttons-style">6 Buttons Sets</a></li>
                    <li><a href="elements.html#list-styles">List Styles</a></li>
                    <li><a href="elements.html#alertboxes">Alert Boxes</a></li>
                    <li><a href="elements.html#dropcap">Dropcap Variations</a></li>
                    <li><a href="elements.html#socialicons">Social Icons</a></li>
                    <li><a href="elements.html#alignedimages">Aligned Images</a></li>
                    <li><a href="elements.html#progressbars">2 Progress Bars</a></li>
                    <li><a href="elements.html#pricetable">Price Tables</a></li>
                    <li><a href="elements.html#columnsstyle">Columns Style</a></li>
                </ul>
            </li>
        </ul>
    </div><!--Responsive header-->