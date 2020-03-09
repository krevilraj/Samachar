<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php /*

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">

 */ ?>


<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="An Unlimited WordPress News & Magazine Theme with WooCommerce Support">
    <meta name="keywords" content="magazine template, news template">
    <meta name="author" content="themejunkie">

    <!-- Title -->
    <?php wp_head();?>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri('/') ?>/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri('/') ?>/assets/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri('/') ?>/assets/css/prettyPhoto.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri('/') ?>/assets/css/colors/default.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri('/') ?>/assets/css/responsive.css"/>

    <!-- Favicon -->
    <link type="image/x-icon" href="<?php echo get_template_directory_uri('/') ?>/assets/images/favicon.png"
          rel="shortcut icon">

</head>

<body class="layout-narrow">

<!-- Page / Start -->
<div id="page" class="hfeed site clearfix">
    <!-- Masthead / Start -->
    <header id="masthead" class="site-header container clearfix" role="banner">


        <div id="logo">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri('/') ?>/assets/images/logo.png"
                                      alt="Logo Title"/></a>
            <!-- <h1 class="site-title"><a href="index.html">SuperNews</a></h1> -->
        </div>

        <div class="header-ad">
            <a href="#"><img src="<?php echo get_template_directory_uri('/') ?>/assets/images/728x90.png" alt=""/></a>
        </div>

        <div class="clearfix"></div>

        <!-- Secondary Bar / Start -->
        <div id="secondary-bar" class="clearfix">

            <a id="secondary-mobile-menu" href="#"><i class="fa fa-bars"></i> <span>Secondary Menu</span></a>

            <!-- Secondary Navigation / Start -->
            <nav id="secondary-nav">
                <!--<ul id="secondary-menu" class="sf-menu">
                    <li class="home_item current_item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">Nepal</a></li>
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li>
                        <a href="layout_s1_content_s2.html">Sports</a>
                        <ul>
                            <li><a href="layout_s1_content_s2.html">Football</a></li>
                            <li><a href="layout_content_s1_s2.html">Cricket</a></li>
                            <li><a href="layout_content_s2_s1.html">BasketBall</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Video</a></li>

                </ul>-->

              <?php
                if (has_nav_menu('top')):
                    wp_nav_menu(
                        array(
                            'menu' => 'Top Menu',
                            'menu_class' => 'sf-menu',
                            'container' => '',
                        )
                    );
                endif;

                ?>

            </nav>
            <!-- Secondary Navigation / End -->

            <div class="header-search">

                <i class="fa fa-search"></i>
                <i class="fa fa-times"></i>

                <div class="search-form">
                    <form action="search.html" id="searchform" method="get">
                        <input name="s" type="text"/>
                        <button type="submit">Search</button>
                    </form>
                </div><!-- .search-form -->

            </div><!-- .header-search -->

        </div>
        <!-- Secondary Bar / End -->

    </header>
    <!-- Masthead / End -->

    <!--    Header End Here-->
