<?php
/**
 * Header Template
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php if( bi_option('custom_favicon') !== '' ) : ?>
        <link rel="icon" type="image/png" href="<?php echo bi_option('custom_favicon', false, 'url'); ?>" />
    <?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?> 
    <link href="<?php bloginfo('template_url'); ?>/css/themify-icons.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flaticon.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/swiper.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/odometer-theme-default.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/nice-select.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div class="page-wrapper">
          <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- end preloader -->       
<?php responsive_container(); // before container hook ?>

         
    <?php responsive_header(); // before header hook ?>
    <!-- <header> -->
   
    <?php responsive_in_header(); // header hook ?>


<!-- <nav role="navigation">
    <div class="navbar navbar-default ">
        <div class="container">
            .navbar-toggle is used as the toggle for collapsed navbar content 
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

           <?php if( bi_option('custom_logo', false, 'url') !== '' ) { ?>
            <div id="logo"><a href="<?php echo home_url(); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="home">
                <img src="<?php echo bi_option('custom_logo', false, 'url'); ?>" alt="<?php bloginfo( 'name' ) ?>" />
            </a></div>
            <?php } else { ?>
            <?php if (is_front_page()) { ?>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
            <?php } else { ?>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
            <?php } } ?>
        </div>
        



          <div class="navbar-collapse collapse navbar-responsive-collapse">
			   <?php

                $args = array(
                    'theme_location' => 'top-bar',
                    'depth'      => 2,
                    'container'  => false,
                    'menu_class'     => 'nav navbar-nav',
                    'walker'     => new Bootstrap_Walker_Nav_Menu()
                );

               

                if (has_nav_menu('top-bar')) {
                       wp_nav_menu($args);
                    }

            ?>

            


           


          </div>

        </div>
       
     </div>           
</nav> 
           
 
    </header>end of header -->
    <!-- Start header -->
        <header id="header" class="wpo-site-header wpo-header-style-3">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <?php

                            $args = array(
                                'theme_location' => 'top-bar',
                                'depth'      => 2,
                                'container'  => false,
                                'menu_class'     => 'nav navbar-nav',
                                'walker'     => new Bootstrap_Walker_Nav_Menu()
                            );

                        

                            if (has_nav_menu('top-bar')) {
                                wp_nav_menu($args);
                                }

                        ?>
                        <!-- <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home style 1</a></li>
                                    <li><a href="index-2.html">Home style 2</a></li>
                                    <li><a href="index-3.html">Home style 3</a></li>
                                    <li><a href="index-4.html">Home style 4</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Service</a>
                                <ul class="sub-menu">
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="service-single.html">Service Single</a></li>
                                </ul>
                            </li>
                            <li><a href="donate.html">Donate</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Event</a>
                                <ul class="sub-menu">
                                    <li><a href="event.html">Event</a></li>
                                    <li><a href="event-single.html">Event Single</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog right sidebar</a></li>
                                    <li><a href="blog-left.html">Blog left sidebar</a></li>
                                    <li><a href="blog-fulwidth.html">Blog fullwidth</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-single.html">Blog details right sidebar</a></li>
                                            <li><a href="blog-single-left.html">Blog details left sidebar</a></li>
                                            <li><a href="blog-single-fluid.html">Blog details fullwidth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </div><!-- end of nav-collapse -->
                    <div class="cart-search-contact">
                        <div class="btns">
                            <a href="contact-us" class="theme-btn">Contact Now</a>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
    <?php responsive_header_end(); // after header hook ?>
    
	<?php responsive_wrapper(); // before wrapper ?>
    
    
    
    <?php responsive_in_wrapper(); // wrapper hook ?>
