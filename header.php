<?php
/**
 * The header for our theme.
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <meta charset="UTF-8" />
    <title>WP | Demo Site for Tattoo Studio</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic|Oswald:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic|Open+Sans:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key='></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <script>
        function init() {
	    var mapOptions = { "center": {  "lat": 57.51178449009698,  "lng": 11.89886324107647 }, "clickableIcons": true, "disableDoubleClickZoom": false, "draggable": true, "fullscreenControl": true, "keyboardShortcuts": true, "mapMaker": false, "mapTypeControl": true, "mapTypeControlOptions": {  "text": "Default (depends on viewport size etc.)",  "style": 0 }, "mapTypeId": "roadmap", "rotateControl": true, "scaleControl": true, "scrollwheel": true, "streetViewControl": true, "styles": [  {   "stylers": [    {     "visibility": "simplified"    }   ]  },  {   "stylers": [    {     "color": "#131314"    }   ]  },  {   "featureType": "water",   "stylers": [    {     "color": "#131313"    },    {     "lightness": 7    }   ]  },  {   "elementType": "labels.text.fill",   "stylers": [    {     "visibility": "on"    },    {     "lightness": 25    }   ]  } ], "zoom": 3, "zoomControl": true};
	    var mapElement = document.getElementById('company-map');
	    var map = new google.maps.Map(mapElement, mapOptions);
	    
	    google.maps.event.addDomListener(window, "resize", function() { var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); });
	  	}
		google.maps.event.addDomListener(window, 'load', init);
	</script>

	<?php wp_head();?>
</head>


<body <?php body_class(); ?>>
    <div class="wrapper">
        <div class="wrapper_inner">
            <header>
                <div class="header_bottom">
                    <div class="header_inner_left">
                        <div class="mobile_menu_button">
                            <span class="navbar-toggler" data-toggle="collapse" data-target="#site-navigation">
                                <i class="qode_icon_font_awesome fa fa-bars " ></i>     
                            </span>
                        </div>
                        <div class="logo_wrapper">
                            <a itemprop="url" href="index.html" >
             <img class="normal" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"/>             
             <img itemprop="image" class="mobile" src="<?php echo get_template_directory_uri(); ?>/images/dark-logo.png" alt="Logo"/>

                                </a>
                        </div>
                    </div>
                    <div class="header_inner_right">
                        <div class="header_bottom_right_widget_holder">
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>

                    <?php if ( has_nav_menu( 'primary' ) ) : ?>

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
							) ); ?>
						</nav><!-- #site-navigation -->

					<?php endif; ?>
                </div>
            </header>
            <a id="back_to_top" href="#">
                <span class="fa-stack">
                    <i class="qode_icon_font_awesome fa fa-arrow-up " ></i>        
                </span>
            </a>
            <div class="main content">



