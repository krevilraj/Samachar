<?php get_header(); ?>
<main id="main" class="site-main container" role="main" style="display:block">

    <div id="primary" class="content-area column">

        <!-- Headline and slider Content / Start -->
        <div id="featured-content" class="category-box clearfix">

            <div id="news-ticker" class="clearfix">
                <span class="text">Headlines</span>
                <ul class="news-list">

                    <?php
                    // the query
                    $the_query = new WP_Query(array(
                        'category_name' => 'headline',
                        'posts_per_page' => 3,
                    ));
                    ?>

                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="news-item">
                                <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?></a> - <span
                                    class="entry-date"><?php echo get_the_date('H:m'); ?></span>
                            </li>


                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <li class="news-item">
                            <a href="#" rel="bookmark"> Sorry no new headline is available right now - <span
                                    class="entry-date"></span>
                        </li>
                    <?php endif; ?>

                </ul>
						<span class="headline-nav">
							<a class="headline-prev" href="#"><i class="fa fa-angle-left"></i></a>
							<a class="headline-next" href="#"><i class="fa fa-angle-right"></i></a>
						</span><!-- headline-nav -->
            </div><!-- .news-ticker -->


            <!--            Slider News         -->
            <?php $the_query = new WP_Query(array('category_name' => 'slider'));      // the query  ?>
            <?php if ($the_query->have_posts()) : ?>
            <?php ?>
            <div id="carousel-0" class="jcarousel">

                <ul>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                        <article class="hentry clearfix">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail($post_id, 'medium', array('class' => 'entry-thumbnail')); ?>
                            </a>

                            <h2 class="entry-title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>

                            <div class="entry-meta">
                                <span class="entry-stars"></span>
                                <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                <span class="entry-comments"><a href="<?php the_permalink();?>#comments"><?php comments_number();?></a></span>
                            </div><!-- .entry-meta -->
                            <div class="entry-summary">
                                <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                            </div><!-- .entry-summary -->

                            <div class="more-link">
                                <a href="<?php the_permalink();?>">Read More</a>
                            </div><!-- .more-link -->

                        </article><!-- .hentry -->
                    </li><!-- slide #1 -->
                    <?php endwhile;?>
                </ul>

                <p class="jcarousel-pagination-0"></p>

                <a href="#" class="jcarousel-control-prev"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="jcarousel-control-next"><i class="fa fa-chevron-right"></i></a>

            </div><!-- #carousel-0 -->
            <?php else : ?>
                <div id="carousel-0" class="jcarousel">

                    <ul>

                        <li>
                            <article class="hentry clearfix">
                                <a href="post.html"><img class="entry-thumbnail"
                                                         src="<?php echo get_template_directory_uri('/'); ?>/assets/images/42-728x410.jpg"
                                                         alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">A New York City Travel
                                        Guide</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-stars"></span>
                                    <span class="entry-date">Oct. 16, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">5 Comments</a></span>
                                </div><!-- .entry-meta -->
                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read More</a>
                                </div><!-- .more-link -->

                            </article><!-- .hentry -->
                        </li><!-- slide #1 -->

                        <li>
                            <article class="hentry clearfix">

                                <a href="post.html"><img class="entry-thumbnail"
                                                         src="<?php echo get_template_directory_uri('/'); ?>/assets/images/45-728x410.jpg"
                                                         alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">How to Become a Fashion
                                        Photographer</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-stars"></span>
                                    <span class="entry-date">Oct. 16, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">5 Comments</a></span>
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read the rest of this entry</a>
                                </div><!-- .more-link -->

                            </article><!-- .hentry -->
                        </li><!-- slide #2 -->

                        <li>
                            <article class="hentry clearfix">

                                <a href="post.html"><img class="entry-thumbnail"
                                                         src="<?php echo get_template_directory_uri('/'); ?>/assets/images/44-728x410.jpg"
                                                         alt="Post Title"/></a>

                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Will It Shred: iPad Becomes a
                                        Skateboard</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-stars"></span>
                                    <span class="entry-date">Sep. 09, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read the rest of this entry</a>
                                </div><!-- .more-link -->

                            </article><!-- .hentry -->
                        </li><!-- slider #3 -->

                    </ul>

                    <p class="jcarousel-pagination-0"></p>

                    <a href="#" class="jcarousel-control-prev"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="jcarousel-control-next"><i class="fa fa-chevron-right"></i></a>

                </div><!-- #carousel-0 -->
            <?php endif; ?>
            <!--        End Slider News         -->
        </div>
        <!-- Headline and slider Content / End -->


        <!-- Samachar Block #1 / Start -->

        <?php $the_query = new WP_Query(array('category_name' => 'main-news', 'posts_per_page' => 3,));      // the query  ?>
        <?php if ($the_query->have_posts()) : ?>
            <section class="content-block-1 category-box clearfix">

                <h3 class="section-title"><a href="category.html">समाचार</a><span class="see-all"><a
                            href="category.html">More</a></span></h3>

                <ul class="clearfix">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'entry-thumbnail')); ?>
                            </a>



                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="entry-meta">
                                    <span class="entry-date"><i
                                            class="fa fa-clock-o"></i> <?php echo get_the_date('M j,  Y'); ?></span>
                                    <span class="entry-comments"><a
                                            href="<?php the_permalink(); ?>#comments"><?php comments_number() ?></a></span>
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                </div><!-- .entry-summary -->


                                <div class="more-link">
                                    <a href="<?php the_permalink(); ?>">Read More >></a>
                                </div><!-- .more-link -->
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>

            </section>
        <?php else : ?>
            <section class="content-block-1 category-box clearfix">

                <h3 class="section-title"><a href="category.html">समाचार</a><span class="see-all"><a
                            href="category.html">More</a></span></h3>

                <ul class="clearfix">

                    <li>
                        <a href="post.html"><img class="entry-thumbnail"
                                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/1-216x121.jpg"
                                                 alt=""/></a>

                        <h2 class="entry-title"><a href="post.html">Local ice cream shop grand opening</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                            <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                        </div><!-- .entry-meta -->

                        <div class="entry-summary">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                        </div><!-- .entry-summary -->

                        <div class="more-link">
                            <a href="post.html">Read the rest of this entry</a>
                        </div><!-- .more-link -->
                    </li>

                    <li>
                        <a href="post.html"><img class="entry-thumbnail"
                                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/2-216x121.jpg"
                                                 alt=""/></a>

                        <h2 class="entry-title"><a href="post.html">Fruit chemical may prevent organ damage</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                            <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                        </div><!-- .entry-meta -->

                        <div class="entry-summary">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                        </div><!-- .entry-summary -->

                        <div class="more-link">
                            <a href="post.html">Read the rest of this entry</a>
                        </div><!-- .more-link -->
                    </li>

                    <li>
                        <a href="post.html"><img class="entry-thumbnail"
                                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/3-216x121.jpg"
                                                 alt=""/></a>

                        <h2 class="entry-title"><a href="post.html">Sailor's ship was hit by kamikaze</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                            <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                        </div><!-- .entry-meta -->

                        <div class="entry-summary">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                        </div><!-- .entry-summary -->

                        <div class="more-link">
                            <a href="post.html">Read the rest of this entry</a>
                        </div><!-- .more-link -->
                    </li>

                </ul>

            </section>
        <?php endif; ?>

        <!-- Samachar Block #1 / End -->


        <div class="content-ad">
            <a href="http://www.theme-junkie.com/"><img
                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/728x90.png" alt="Post Title"/></a>
        </div><!-- .content-ad -->


        <!-- Rajniti Block #2 / Start -->

        <?php // the query
        $the_query = new WP_Query(array('category_name' => 'politics', 'posts_per_page' => 4,)); ?>
        <?php if ($the_query->have_posts()) : $i = 1; ?>

            <section class="content-block-2 category-box clearfix">

                <h3 class="section-title"><a href="category.html">राजनीति</a> <span class="see-all"><a
                            href="category.html">More</a></span></h3>

                <ul>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php if ($i < 2): ?>
                            <li class="article-first">

                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'medium', array('class' => 'entry-thumbnail')); ?></a>

                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="entry-meta">
                                    <span class="entry-stars"></span>
                                    <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                    <span class="entry-comments"><a
                                            href="<?php the_permalink() ?>#comments"><?php comments_number(); ?></a></span>
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div><!-- .more-link -->

                            </li><!-- .article-first -->

                        <?php else: ?>
                            <li class="article-list">

                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'entry-thumbnail')); ?></a>

                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="entry-meta">
                                    <span class="entry-stars"></span>
                                    <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                    <span class="entry-comments"><a
                                            href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></span>
                                </div><!-- .entry-meta -->

                            </li><!-- .article-list -->
                        <?php endif;
                        $i++; ?>


                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                </ul>

            </section>
        <?php endif; ?>
        <!-- Rajniti Block #2 / End -->


        <div class="content-ad">
            <a href="http://www.theme-junkie.com/"><img
                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/728x90.png" alt=""/></a>
        </div><!-- .content-ad -->


        <!-- bishwa rastriya Block #3 / Start -->
        <section class="content-block-3 category-box clearfix">
            <?php
            // the query
            $the_query = new WP_Query(array('category_name' => 'politics', 'posts_per_page' => 4,)); ?>
            <?php if ($the_query->have_posts()) : $i = 1; ?>
                <div class="block block-left">

                    <h3 class="section-title"><a href="category.html">बिस्व</a><span class="see-all"><a
                                href="category.html">More</a></span></h3>

                    <ul>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php if ($i < 2): ?>
                                <li class="article-first">

                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'medium', array('class' => 'entry-thumbnail')); ?></a>

                                    <h2 class="entry-title"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                        <span class="entry-comments"><a
                                                href="<?php the_permalink() ?>#comments"><?php comments_number(); ?></a></span>
                                    </div><!-- .entry-meta -->

                                    <div class="entry-summary">
                                        <?php echo wp_trim_words(get_the_content(), 18, '...'); ?>
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="<?php the_permalink(); ?>">Read More</a>
                                    </div><!-- .more-link -->

                                </li><!-- .article-first -->

                            <?php else: ?>
                                <li class="article-list clearfix">

                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'entry-thumbnail')); ?></a>

                                    <h2 class="entry-title"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                        <span class="entry-comments"><a
                                                href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></span>
                                    </div><!-- .entry-meta -->

                                </li><!-- .article-list -->
                            <?php endif;
                            $i++; ?>


                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>

                </div><!-- .block .block-left -->
            <?php endif; ?>

            <?php
            // the query
            $the_query = new WP_Query(array('category_name' => 'main-news', 'posts_per_page' => 4,)); ?>
            <?php if ($the_query->have_posts()) : $i = 1; ?>
                <div class="block block-right">

                    <h3 class="section-title"><a href="category.html">राष्ट्रिय</a><span class="see-all"><a
                                href="category.html">More</a></span></h3>

                    <ul>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php if ($i < 2): ?>
                                <li class="article-first">

                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'medium', array('class' => 'entry-thumbnail')); ?></a>

                                    <h2 class="entry-title"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                        <span class="entry-comments"><a
                                                href="<?php the_permalink() ?>#comments"><?php comments_number(); ?></a></span>
                                    </div><!-- .entry-meta -->

                                    <div class="entry-summary">
                                        <?php echo wp_trim_words(get_the_content(), 18, '...'); ?>
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="<?php the_permalink(); ?>">Read More</a>
                                    </div><!-- .more-link -->

                                </li><!-- .article-first -->

                            <?php else: ?>
                                <li class="article-list clearfix">

                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'entry-thumbnail')); ?></a>

                                    <h2 class="entry-title"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                        <span class="entry-comments"><a
                                                href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></span>
                                    </div><!-- .entry-meta -->

                                </li><!-- .article-list -->
                            <?php endif;
                            $i++; ?>


                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>

                </div><!-- .block .block-left -->
            <?php endif; ?>
        </section>
        <!-- bishwa rastriya Block #3 / End -->


        <div class="content-ad">
            <a href="#"><img src="<?php echo get_template_directory_uri('/'); ?>/assets/images/728x90.png" alt=""/></a>
        </div><!-- .content-ad -->


        <!-- manoranjan film pravidi Block #4 / Start -->
        <section class="content-block-4 category-box clearfix">
            <?php
            // the query
            $the_query = new WP_Query(array('category_name' => 'politics', 'posts_per_page' => 4,)); ?>
            <?php if ($the_query->have_posts()) : $i = 1; ?>
                <div class="block block-left">
                    <h3 class="section-title"><a href="category.html">प्रविधि</a><span class="see-all"><a
                                href="category.html">More</a></span></h3>

                    <ul>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php if ($i < 2): ?>
                                <li class="article-first">
                                    <a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'three-thumbnail')); ?></a>

                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    </h2>

                                    <div class="entry-meta">
                                        <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                        <span class="entry-comments"><a href="<?php the_permalink();?>#comments"><?php comments_number();?></a></span>
                                    </div><!-- .entry-meta -->

                                    <div class="entry-summary">
                                        <?php echo wp_trim_words(get_the_content(), 18, '...'); ?>
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="<?php the_permalink();?>">Read More >></a>
                                    </div><!-- .more-link -->

                                </li><!-- .article-first -->
                            <?php else: ?>
                                <li class="article-list">
                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                </li><!-- .article-list -->
                            <?php endif; $i++; ?>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>

                </div>
            <?php endif; ?> <!-- .block .block-left -->


            <?php
            // the query
            $the_query = new WP_Query(array('category_name' => 'politics', 'posts_per_page' => 4,)); ?>
            <?php if ($the_query->have_posts()) : $i = 1; ?>
                <div class="block block-center">
                    <h3 class="section-title"><a href="category.html">प्रविधि</a><span class="see-all"><a
                                href="category.html">More</a></span></h3>

                    <ul>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php if ($i < 2): ?>
                                <li class="article-first">
                                    <a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'three-thumbnail')); ?></a>

                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    </h2>

                                    <div class="entry-meta">
                                        <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                        <span class="entry-comments"><a href="<?php the_permalink();?>#comments"><?php comments_number();?></a></span>
                                    </div><!-- .entry-meta -->

                                    <div class="entry-summary">
                                        <?php echo wp_trim_words(get_the_content(), 18, '...'); ?>
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="<?php the_permalink();?>">Read More >></a>
                                    </div><!-- .more-link -->

                                </li><!-- .article-first -->
                            <?php else: ?>
                                <li class="article-list">
                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                </li><!-- .article-list -->
                            <?php endif; $i++; ?>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>

                </div>
            <?php endif; ?> <!-- .block .block-center -->

            <?php
            // the query
            $the_query = new WP_Query(array('category_name' => 'politics', 'posts_per_page' => 4,)); ?>
            <?php if ($the_query->have_posts()) : $i = 1; ?>
                <div class="block block-right">
                    <h3 class="section-title"><a href="category.html">प्रविधि</a><span class="see-all"><a
                                href="category.html">More</a></span></h3>

                    <ul>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php if ($i < 2): ?>
                                <li class="article-first">
                                    <a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'three-thumbnail')); ?></a>

                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    </h2>

                                    <div class="entry-meta">
                                        <span class="entry-date"><?php echo get_the_date('M j,  Y'); ?></span>
                                        <span class="entry-comments"><a href="<?php the_permalink();?>#comments"><?php comments_number();?></a></span>
                                    </div><!-- .entry-meta -->

                                    <div class="entry-summary">
                                        <?php echo wp_trim_words(get_the_content(), 18, '...'); ?>
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="<?php the_permalink();?>">Read More >></a>
                                    </div><!-- .more-link -->

                                </li><!-- .article-first -->
                            <?php else: ?>
                                <li class="article-list">
                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                </li><!-- .article-list -->
                            <?php endif; $i++; ?>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>

                </div>
            <?php endif; ?> <!-- .block .block-right -->

        </section>
        <!-- manoranjan film pravidi Block #4 / End -->

    </div>
    <!-- Primary / End -->

    <!-- Sidebar #1 / Start -->
    <div class="sidbear sidebar1 column">

        <div class="widget widget_latest_posts">

            <h3 class="widget-title"><strong>Latest News</strong></h3>

            <ul>
                <li>
                    <a href="post.html"><img class="entry-thumbnail"
                                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/20-160x90.jpg"
                                             alt="Post Title"/></a>

                    <h2 class="entry-title"><a href="post.html">Nullam dictum metus in metus auctor</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                    </div><!-- .entry-meta -->
                </li>

                <li>
                    <a href="post.html"><img class="entry-thumbnail"
                                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/21-160x90.jpg"
                                             alt="Post Title"/></a>

                    <h2 class="entry-title"><a href="post.html">Fusce volutpat elementum augue felis</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                    </div><!-- .entry-meta -->
                </li>

                <li>
                    <a href="post.html"><img class="entry-thumbnail"
                                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/22-160x90.jpg"
                                             alt="Post Title"/></a>

                    <h2 class="entry-title"><a href="post.html">Aenean efficitur enim vel ultrices laoreet</a></h2>

                    <div class="entry-meta">
                        <span class="entry-date">Sep. 15, 2014</span>
                    </div><!-- .entry-meta -->
                </li>

                <li>
                    <a href="post.html"><img class="entry-thumbnail"
                                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/23-160x90.jpg"
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
                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar1.jpg"
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
                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar2.jpeg"
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
                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar3.jpeg"
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
                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar4.jpeg"
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
            <a href="#"><img src="<?php echo get_template_directory_uri('/'); ?>/assets/images/ad_160x600.png" alt=""/></a>
        </div><!-- .widget .widget_ads -->

    </div>
    <!-- Sidebar #1 / End -->

    <!-- Sidebar #2 / Start -->
    <div id="secondary" class="widget-area widget-primary sidebar2 column" role="complementary">

        <div class="widget widget_ads">
            <h3 class="widget-title">Advertisement</h3>
            <a href="http://www.theme-junkie.com/" target="_blank"><img
                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/ad_300x250.png"
                    alt="Ad Widget"/></a>
        </div><!-- .widget .widget_ads -->

        <div class="widget widget_social clearfix">
            <ul>
                <li><a href="#" title="Twitter"><i
                            class="fa fa-twitter"></i><span><strong>5,600</strong></span><span>Followers</span></a></li>
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
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/41-64x64.jpg"
                                                                    alt="Post Title"/></a>

                            <h2 class="entry-title"><a href="post.html" rel="bookmark">Nulla enim consequat amet
                                    congue</a></h2>

                            <div class="entry-meta">16 Aug, 2014</div>
                        </li>
                        <li class="clearfix">
                            <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/30-64x64.jpg"
                                                                    alt="Post Title"/></a>

                            <h2 class="entry-title"><a href="post.html" rel="bookmark">Will It Shred: iPad Becomes a
                                    Skateboard</a></h2>

                            <div class="entry-meta">15 Aug, 2014</div>
                        </li>
                        <li class="clearfix">
                            <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/20-64x64.jpg"
                                                                    alt="Post Title"/></a>

                            <h2 class="entry-title"><a href="post.html" rel="bookmark">Phasellus lorem aliquam</a>
                            </h2>

                            <div class="entry-meta">14 Aug, 2014</div>
                        </li>
                        <li class="clearfix">
                            <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/10-64x64.jpg"
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
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/20-64x64.jpg"
                                                                    alt="Post Title"/></a>

                            <h2 class="entry-title"><a href="post.html" rel="bookmark">Fusce volutpat elementum
                                    augue felis</a></h2>

                            <div class="entry-meta">16 Aug, 2014</div>
                        </li>
                        <li class="clearfix">
                            <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/21-64x64.jpg"
                                                                    alt="Post Title"/></a>

                            <h2 class="entry-title"><a href="post.html" rel="bookmark">Etiam maximus lacinia posuere
                                    nisl</a></h2>

                            <div class="entry-meta">16 Aug, 2014</div>
                        </li>
                        <li class="clearfix">
                            <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/22-64x64.jpg"
                                                                    alt="Post Title"/></a>

                            <h2 class="entry-title"><a href="post.html" rel="bookmark">Aenean efficitur enim vel
                                    ultrices laoreet</a></h2>

                            <div class="entry-meta">16 Aug, 2014</div>
                        </li>
                        <li class="clearfix">
                            <a href="post.html" rel="bookmark"><img class="entry-thumbnail"
                                                                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/23-64x64.jpg"
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
                                                              src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar1.jpg"
                                                              alt="Author Name"/></a>
                            <a href="post.html#comments"><strong>Jack Lenox</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                        </li>
                        <li class="clearfix">
                            <a href="post.html#comments"><img class="entry-thumbnail"
                                                              src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar2.jpeg"
                                                              alt="Author Name"/></a>
                            <a href="post.html#comments"><strong>Kevin Koehler</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                        </li>
                        <li class="clearfix">
                            <a href="post.html#comments"><img class="entry-thumbnail"
                                                              src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar3.jpeg"
                                                              alt="Author Name"/></a>
                            <a href="post.html#comments"><strong>Ben Lowery</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                        </li>
                        <li class="clearfix">
                            <a href="post.html#comments"><img class="entry-thumbnail"
                                                              src="<?php echo get_template_directory_uri('/'); ?>/assets/images/comment-avatar4.jpeg"
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
                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/ad_300x250_2.png"
                    alt="Ad Widget"/></a>
        </div><!-- .widget .widget_ads -->

        <div class="widget widget_twitter">
            <h3 class="widget-title"><strong>Latest Tweets</strong></h3>
            <ul>
                <li>RT <a href="#">@envato</a>: <a href="#">#WordPress</a> 3.9.2 is now available as a security
                    release. It is strongly advised to update immediately. <a href="#">http://t.co/PPcIPyrkZz</a>
                    <span class="timestamp"><a href="#">3 hours ago</a></span></li>
                <li>Heatwave Offer. Sign up for an annual plan and get 3 months of free WP Engine <a
                        href="#">#WordPress</a>
                    hosting! Code: "HeatWave14" <a href="#">http://t.co/bsg79FCgvy</a> <span class="timestamp"><a
                            href="#">1 day ago</a></span></li>
                <li>BOOM! Theme Junkie is now 5 years old and we've got some presents for you! <a href="#">http://t.co/koSdMC7duxy</a>
                    <span class="timestamp"><a href="#">3 days ago</a></span></li>
            </ul>
        </div><!-- .widget .widget_twitter -->

        <div class="widget widget_125">
            <h3 class="widget-title"><strong>Sponsors</strong></h3>
            <a href="#"><img src="<?php echo get_template_directory_uri('/'); ?>/assets/images/125x125c.png"
                             alt=""/></a>
            <a href="#"><img class="img-right"
                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/125x125e.jpg"
                             alt=""/></a>
            <a href="#"><img src="<?php echo get_template_directory_uri('/'); ?>/assets/images/125x125d.jpg"
                             alt=""/></a>
            <a href="#"><img class="img-right"
                             src="<?php echo get_template_directory_uri('/'); ?>/assets/images/125x125f.png"
                             alt=""/></a>
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
                    src="<?php echo get_template_directory_uri('/'); ?>/assets/images/ad_300x600.jpeg"
                    alt="Ad Widget"/></a>
        </div><!-- .widget .widget_ads -->

    </div>
    <!-- Secondary / End -->

    <div class="clearfix"></div>

    <!-- Sidebar #2 / End -->

    <!-- Carousel-1 / Start -->
    <section id="carousel-1" class="carousel-loop container clearfix">

        <h3 class="section-title"><a href="category.html">Must See Videos</a></h3>

        <div class="jcarousel">
            <ul>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/24-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">What are the benefits of eating
                                oranges?</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/25-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">How much does it cost to rescue a
                                horse?</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/26-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">Lectures on mountain winter
                                risks</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/27-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">Sea Creatures: 100 waves to help
                                a kid</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/28-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">Top five most scathing book
                                reviews</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/29-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">Nulla enim consequat amet
                                congue</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/30-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">Euismod amet leo cras et
                                massa</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/31-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">Phasellus lorem aliquam</a></h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="hentry post">
                        <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                            <img class="entry-thumbnail"
                                 src="<?php echo get_template_directory_uri('/'); ?>/assets/images/32-222x125.jpg"
                                 alt="Post Title"/>

                            <div class="video-icon"><i class="fa fa-play"></i></div>
                        </a>

                        <h2 class="entry-title"><a href="post.html" rel="bookmark">Tincidunt quam enim ac a pede</a>
                        </h2>

                        <div class="entry-meta">
                            <span class="entry-date">Sep. 15, 2014</span>
                        </div>
                    </article>
                </li>
            </ul>
        </div><!-- .jcarousel -->

        <a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-left"></i></a>
        <a href="#" class="jcarousel-control-next"><i class="fa fa-angle-right"></i></a>

    </section>
    <!-- Carousel-1 / End -->

</main>
<!-- Site Main / End -->


<?php get_footer(); ?>
