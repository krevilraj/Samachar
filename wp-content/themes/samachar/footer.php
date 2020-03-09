<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
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
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

 */ ?>


<!-- Footer / Start -->
<footer id="footer" class="container clearfix">

	<div class="footer-column footer-column-1">
		<div class="widget">
			<h3 class="widget-title">About</h3>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
				et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
				aliquip ex ea commodo consequat.</p>
		</div><!-- .widget -->
	</div><!-- .footer-column .footer-column-1 -->

	<div class="footer-column footer-column-2">
		<div class="widget widget_posts_thumbnail">
			<h3 class="widget-title">Popular Posts</h3>
			<ul>
				<li>
					<a href="post.html" rel="bookmark"><img src="<?php echo get_template_directory_uri('/')?>/assets/images/44-52x52.jpg" class="entry-thumbnail"
															alt="Post Title"/></a>
					<a href="post.html" rel="bookmark">How to skateboard for beginners</a>

					<div class="entry-meta">
						<span class="entry-date">Sep. 15, 2014</span>
					</div>
				</li>
				<li>
					<a href="post.html" rel="bookmark"><img src="<?php echo get_template_directory_uri('/')?>/assets/images/17-52x52.jpg" class="entry-thumbnail"
															alt="Post Title"/></a>
					<a href="post.html" rel="bookmark">Tips for getting started in travel writing</a>

					<div class="entry-meta">
						<span class="entry-date">Sep. 15, 2014</span>
					</div>
				</li>
				<li>
					<a href="post.html" rel="bookmark"><img src="<?php echo get_template_directory_uri('/')?>/assets/images/34-52x52.jpg" class="entry-thumbnail"
															alt="Post Title"/></a>
					<a href="post.html" rel="bookmark">New life for old building in East Rochester</a>

					<div class="entry-meta">
						<span class="entry-date">Sep. 15, 2014</span>
					</div>
				</li>
			</ul>
		</div><!-- .widget .widget_posts_thumbnail -->
	</div><!-- .footer-column .footer-column-2 -->

	<div class="footer-column footer-column-3">
		<div class="widget widget_twitter">
			<h3 class="widget-title"><strong>Latest Tweets</strong></h3>
			<ul>
				<li>RT <a href="#">@envato</a>: <a href="#">#WordPress</a> 3.9.2 is now available as a security
					release. It is strongly advised to update immediately. <a href="#">http://t.co/PPcIPyrkZz</a>
					<span class="timestamp"><a href="#">3 hours ago</a></span></li>
				<li>Heatwave Offer. Sign up for an annual plan and get 3 months of free WP Engine <a href="#">#WordPress</a>
					hosting! Code: "HeatWave14" <a href="#">http://t.co/bsg79FCgvy</a> <span class="timestamp"><a
								href="#">1 day ago</a></span></li>
			</ul>
		</div><!-- .widget .widget_twitter -->
	</div><!-- .footer-column .footer-column-3 -->

	<div class="footer-column footer-column-4">
		<div class="widget widget_newsletter">
			<h3 class="widget-title">Newsletter</h3>

			<p>Make sure you don't miss interesting happenings by joining our newsletter program. We don't do
				spam.</p>

			<form role="form">
				<input type="text" placeHolder="Enter your email...">
				<button class="btn" type="button">Signup</button>
			</form>
		</div><!-- .widget .widget_newsletter -->
	</div><!-- .footer-column .footer-column-4 -->

	<!-- Site Bottom / Start -->
	<div id="site-bottom" class="container clearfix">

		<nav id="footer-nav">
			<!--<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">Subscribe</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Advertise</a></li>
				<li><a href="#">Privacy</a></li>
			</ul>-->

			<?php
			if (has_nav_menu('top')):
				wp_nav_menu(
						array(
								'menu' => 'Footer Menu',
								'menu_class' => '',
								'container' => '',
						)
				);
			endif;

			?>



		</nav><!-- #footer-nav -->

		<div class="copyright">
			&copy; 2014 <a href="index.html">SuperNews</a> &middot; Designed by <a
					href="http://www.theme-junkie.com/">Theme Junkie</a>
		</div><!-- .copyright -->

	</div>
	<!-- Site Bottom / End -->

</footer>
<!-- Footer / End -->

</div>
<!-- Page / End -->

<!-- JavaScripts -->


<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/jquery.js"></script>
<script type="text/javascript">

	$(document).ready(function () {

		$('#menu-top-menu').prepend('<li class="home_item"><a href="<?php echo esc_url(home_url()); ?>"><i class="fa fa-home"></i></a></li>');
	});


</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/jquery.matchHeight.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/superfish.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/retina.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/jquery.sticky.js"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri('/')?>/assets/js/jquery.prettyPhoto.js'></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri('/')?>/assets/js/jquery.custom.js"></script>


<?php wp_footer(); ?>
</body>
</html>

