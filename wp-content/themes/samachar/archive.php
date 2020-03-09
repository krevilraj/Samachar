<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php /* ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

 <?php */ ?>


    <!-- Site Main / Start -->
    <main id="main" class="site-main container" role="main" style="display:block">

        <div id="primary" class="content-area column">

            <!-- Featured Content / Start -->
            <div id="featured-content-2" class="category-box clearfix">
                <!--<h1 class="section-title"><strong><?php /*the_archive_title();*/ ?></strong><span class="see-all"><a href="category.html">More</a></span>
                </h1>-->

                <?php echo '<h1 class="category-title">' . single_cat_title('', false) . '</h1>'; ?>

                <div class="featured-big">
                    <a href="post.html"><img class="entry-thumbnail"
                                             src="<?php echo get_template_directory_uri('/') ?>/assets/images/41-472x265.jpg"
                                             alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Fusce volutpat elementum augue felis</a></h2>

                    <div class="entry-meta">
                        <span class="entry-stars"></span>
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div>
                    <div class="entry-summary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </div>
                    <div class="more-link">
                        <a href="#">Read the rest of this entry</a>
                    </div>
                </div>
                <div class="featured-small">
                    <a href="post.html"><img class="entry-thumbnail"
                                             src="<?php echo get_template_directory_uri('/') ?>/assets/images/39-216x121.jpg"
                                             alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Etiam maximus lacinia posuere nisl</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div>
                </div>
                <div class="featured-small last">
                    <a href="post.html"><img class="entry-thumbnail"
                                             src="<?php echo get_template_directory_uri('/') ?>/assets/images/38-216x121.jpg"
                                             alt=""/></a>

                    <h2 class="entry-title"><a href="post.html">Aenean efficitur enim vel ultrices laoreet</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                    </div>
                </div>
            </div>
            <!-- Featured Content / End -->

            <div class="content-ad">
                <a href="http://www.theme-junkie.com/"><img
                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/728x90.png" alt=""/></a>
            </div>

            <?php if (have_posts()): ?>

                <!-- Content / Start -->
                <div id="content" class="content-loop list category-box">

                    <h3 class="section-title"><strong><a href="listing_classic.html">Classic</a> / <a
                                href="listing_blog.html">Blog</a> / <a href="listing_grid1.html">Grid 1</a> / <a
                                href="listing_grid2.html">Grid 2</a></strong></h3>


                    <?php while (have_posts()):the_post(); ?>

                        <article id="post-1" class="hentry post clearfix">
                            <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'entry-thumbnail')); ?></a>

                            <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                            <div class="entry-meta">
                                <span class="entry-stars"></span>
                                <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                            <span class="entry-comments"><a
                                    href="post.html#comments"><?php comments_number() ?></a></span>
                            </div><!-- .entry-meta -->
                            <div class="entry-summary">
                                <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
                            </div>
                            <div class="more-link">
                                <a href="<?php the_permalink() ?>">Read more >></a>
                            </div><!-- .more-link -->
                        </article>

                    <?php endwhile; ?>


                    <?php the_posts_pagination(array(
                        'prev_text' => __('Prev', 'twentyseventeen'),
                        'next_text' => __('Next', 'twentyseventeen'),
                        'screen-reader-text' => '&nbsp',
                    ));
                    ?>
                </div>
            <?php else: ?>
                <article class="hentry post">

                    <h1 class="entry-title">Nothing Found</h1>

                </article>

            <?php endif; ?>


            <!-- Content / End -->

        </div>
        <!-- Primary / End -->

        <!-- Sidebar #1 / Start -->
        <div class="sidbear sidebar1 column">

            <div class="widget widget_latest_posts">

                <h3 class="widget-title"><strong>Latest News</strong></h3>

                <ul>
                    <li>
                        <a href="post.html"><img class="entry-thumbnail"
                                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/20-160x90.jpg"
                                                 alt="Post Title"/></a>

                        <h2 class="entry-title"><a href="post.html">Nullam dictum metus in metus auctor</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div><!-- .entry-meta -->
                    </li>

                    <li>
                        <a href="post.html"><img class="entry-thumbnail"
                                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/21-160x90.jpg"
                                                 alt="Post Title"/></a>

                        <h2 class="entry-title"><a href="post.html">Fusce volutpat elementum augue felis</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div><!-- .entry-meta -->
                    </li>

                    <li>
                        <a href="post.html"><img class="entry-thumbnail"
                                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/22-160x90.jpg"
                                                 alt="Post Title"/></a>

                        <h2 class="entry-title"><a href="post.html">Aenean efficitur enim vel ultrices laoreet</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div><!-- .entry-meta -->
                    </li>

                    <li>
                        <a href="post.html"><img class="entry-thumbnail"
                                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/23-160x90.jpg"
                                                 alt="Post Title"/></a>

                        <h2 class="entry-title"><a href="post.html">What are the benefits of eating oranges?</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div><!-- .entry-meta -->
                    </li>

                </ul>
            </div><!-- .widget .widget_latest_posts-->

            <div class="widget widget_latest_comments">

                <h3 class="widget-title"><strong>Opinions</strong></h3>

                <ul>
                    <li>
                        <a href="post.html#comments">
                            <img class="avatar"
                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar1.jpg"
                                 alt="Author Name"/>

                            <h3 class="name">Jack Lenox</h3>

                            <div class="comment">
                                If you make yourself an ass, don't complain if people ride you.
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="post.html#comments">
                            <img class="avatar"
                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar2.jpeg"
                                 alt="Author Name"/>

                            <h3 class="name">Kevin Koehler</h3>

                            <div class="comment">
                                Keep good men company and you shall be of the number.
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="post.html#comments">
                            <img class="avatar"
                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar3.jpeg"
                                 alt="Author Name"/>

                            <h3 class="name">Ben Lowery</h3>

                            <div class="comment">
                                Experience is the father of wisdom and memory the mother.
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="post.html#comments">
                            <img class="avatar"
                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar4.jpeg"
                                 alt="Author Name"/>

                            <h3 class="name">Neha Gajjar</h3>

                            <div class="comment">
                                Happy is the man who learns from the misfortunes of others.
                            </div>
                        </a>
                    </li>
                </ul>

            </div><!-- .widget .widget_latest_comments -->

            <div class="widget">
                <h3 class="widget-title"><strong>General Widget</strong></h3>
                <ul>
                    <li><a href="#">Just Another List Item 1</a></li>
                    <li><a href="#">Just Another List Item 2</a></li>
                    <li><a href="#">Just Another List Item 3</a></li>
                </ul>
            </div><!-- .widget -->

            <div class="widget widget_ads">
                <h3 class="widget-title">Sponsor</h3>
                <a href="#"><img src="<?php echo get_template_directory_uri('/') ?>/assets/images/ad_160x600.png"
                                 alt=""/></a>
            </div><!-- .widget .widget_ads -->

        </div>
        <!-- Sidebar #1 / End -->

        <!-- Sidebar #2 / Start -->
        <div id="secondary" class="widget-area widget-primary sidebar2 column" role="complementary">

            <div class="widget widget_ads">
                <h3 class="widget-title">Advertisement</h3>
                <a href="http://www.theme-junkie.com/" target="_blank"><img
                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/ad_300x250.png"
                        alt="Ad Widget"/></a>
            </div><!-- .widget .widget_ads -->

            <div class="widget widget_social clearfix">
                <ul>
                    <li><a href="#" title="Twitter"><i
                                class="fa fa-twitter"></i><span><strong>5,600</strong></span><span>Followers</span></a>
                    </li>
                    <li><a href="#" title="Facebook"><i
                                class="fa fa-facebook"></i><span><strong>1,986</strong></span><span>Fans</span></a></li>
                    <li><a href="#" title="GooglePlus"><i
                                class="fa fa-google-plus"></i><span><strong>1,300</strong></span><span>In Circle</span></a>
                    </li>
                    <li><a href="#" title="RSS"><i class="fa fa-rss"></i><span><strong>20,000</strong></span><span>Subscribers</span></a>
                    </li>
                </ul>
            </div><!-- .widget .widget_social -->

            <div class="widget widget_newsletter">
                <h3 class="widget-title">Newsletter</h3>

                <div class="newsletter-container">
                    <p>Subscribe to our newsletter to receive breaking news by email.</p>

                    <form role="form">
                        <input type="text" placeHolder="Enter your email...">
                        <button class="btn" type="button">Signup</button>
                    </form>
                </div>
            </div><!-- .widget .widget_newsletter -->

            <div class="widget widget_tabs">

                <!-- Tabs Nav -->
                <ul class="tabs-nav">
                    <li class="active"><a href="#tab1" title="Popular"><i class="fa fa-star"></i></a></li>
                    <li><a href="#tab2" title="Latest"><i class="fa fa-clock-o"></i></a></li>
                    <li><a href="#tab3" title="Comments"><i class="fa fa-comments"></i></a></li>
                    <li><a href="#tab4" title="Tags"><i class="fa fa-tags"></i></a></li>
                </ul>

                <!-- Tabs Container -->
                <div class="tabs-container">

                    <div class="tab-content" id="tab1">
                        <ul>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/41-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Nulla enim consequat amet
                                        congue</a></h2>

                                <div class="entry-meta">16 Aug, 2014</div>
                            </li>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/30-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Will It Shred: iPad Becomes a
                                        Skateboard</a></h2>

                                <div class="entry-meta">15 Aug, 2014</div>
                            </li>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/20-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Phasellus lorem aliquam</a>
                                </h2>

                                <div class="entry-meta">14 Aug, 2014</div>
                            </li>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/10-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Sed do eiusmod tempor
                                        incididunt</a></h2>

                                <div class="entry-meta">13 Aug, 2014</div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="tab2">
                        <ul>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/20-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Fusce volutpat elementum
                                        augue felis</a></h2>

                                <div class="entry-meta">16 Aug, 2014</div>
                            </li>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/21-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Etiam maximus lacinia posuere
                                        nisl</a></h2>

                                <div class="entry-meta">16 Aug, 2014</div>
                            </li>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/22-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Aenean efficitur enim vel
                                        ultrices laoreet</a></h2>

                                <div class="entry-meta">16 Aug, 2014</div>
                            </li>
                            <li class="clearfix">
                                <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/23-64x64.jpg"
                                                                        alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">What are the benefits of
                                        eating oranges?</a></h2>

                                <div class="entry-meta">16 Aug, 2014</div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="tab3">
                        <ul>
                            <li class="clearfix">
                                <a href="post.html#comments"><img class="entry-thumbnail"
                                                                  src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar1.jpg"
                                                                  alt="Author Name"/></a>
                                <a href="post.html#comments"><strong>Jack Lenox</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                            </li>
                            <li class="clearfix">
                                <a href="post.html#comments"><img class="entry-thumbnail"
                                                                  src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar2.jpeg"
                                                                  alt="Author Name"/></a>
                                <a href="post.html#comments"><strong>Kevin Koehler</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                            </li>
                            <li class="clearfix">
                                <a href="post.html#comments"><img class="entry-thumbnail"
                                                                  src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar3.jpeg"
                                                                  alt="Author Name"/></a>
                                <a href="post.html#comments"><strong>Ben Lowery</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                            </li>
                            <li class="clearfix">
                                <a href="post.html#comments"><img class="entry-thumbnail"
                                                                  src="<?php echo get_template_directory_uri('/') ?>/assets/images/comment-avatar4.jpeg"
                                                                  alt="Author Name"/></a>
                                <a href="post.html#comments"><strong>Neha Gajjar</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="tab4">
                        <a href="#">WordPress</a>
                        <a href="#">Themes</a>
                        <a href="#">Plugins</a>
                        <a href="#">Hosting</a>
                        <a href="#">Web Design</a>
                        <a href="#">Web Dev</a>
                        <a href="#">Domain Name</a>
                        <a href="#">WP Engine</a>
                        <a href="#">Affiliates</a>
                        <a href="#">bbPress</a>
                    </div>

                </div>

            </div><!-- .widget .widget_tabs -->

            <div class="widget widget_ads">
                <h3 class="widget-title">Advertisement</h3>
                <a href="http://www.theme-junkie.com/" target="_blank"><img
                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/ad_300x250_2.png"
                        alt="Ad Widget"/></a>
            </div><!-- .widget .widget_ads -->

            <div class="widget widget_twitter">
                <h3 class="widget-title"><strong>Latest Tweets</strong></h3>
                <ul>
                    <li>RT <a href="#">@envato</a>: <a href="#">#WordPress</a> 3.9.2 is now available as a security
                        release. It is strongly advised to update immediately. <a href="#">http://t.co/PPcIPyrkZz</a>
                        <span class="timestamp"><a href="#">3 hours ago</a></span></li>
                    <li>Heatwave Offer. Sign up for an annual plan and get 3 months of free WP Engine <a href="#">#WordPress</a>
                        hosting! Code: "HeatWave14" <a href="#">http://t.co/bsg79FCgvy</a> <span class="timestamp"><a
                                href="#">1 day ago</a></span></li>
                    <li>BOOM! Theme Junkie is now 5 years old and we've got some presents for you! <a href="#">http://t.co/koSdMC7duxy</a>
                        <span class="timestamp"><a href="#">3 days ago</a></span></li>
                </ul>
            </div><!-- .widget .widget_twitter -->

            <div class="widget widget_125">
                <h3 class="widget-title"><strong>Sponsors</strong></h3>
                <a href="#"><img src="<?php echo get_template_directory_uri('/') ?>/assets/images/125x125c.png" alt=""/></a>
                <a href="#"><img class="img-right"
                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/125x125e.jpg" alt=""/></a>
                <a href="#"><img src="<?php echo get_template_directory_uri('/') ?>/assets/images/125x125d.jpg" alt=""/></a>
                <a href="#"><img class="img-right"
                                 src="<?php echo get_template_directory_uri('/') ?>/assets/images/125x125f.png" alt=""/></a>
            </div><!-- .widget.widget_125 -->

            <div class="widget">
                <h3 class="widget-title"><strong>General Widget</strong></h3>
                <ul>
                    <li><a href="#">Just Another List Item 1</a></li>
                    <li><a href="#">Just Another List Item 2</a></li>
                    <li><a href="#">Just Another List Item 3</a></li>
                </ul>
            </div><!-- .widget -->

            <div class="widget widget_ads">
                <h3 class="widget-title">Advertisement</h3>
                <a href="http://www.theme-junkie.com/" target="_blank"><img
                        src="<?php echo get_template_directory_uri('/') ?>/assets/images/ad_300x600.jpeg"
                        alt="Ad Widget"/></a>
            </div><!-- .widget .widget_ads -->

        </div>
        <!-- Secondary / End -->

        <div class="clearfix"></div>

        <!-- Sidebar #2 / End -->

    </main>
    <!-- Site Main / End -->


<?php get_footer();
