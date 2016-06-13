<?php

get_header();

?>
    <!-- Page Contents -->
    <div class="pusher blog no-hero">
    <header class="header">
        <?php include( "inc/follow-menu-mobile.php" ); ?>
    </header>

    <?php if (is_category()) { ?>
    <section class="blog">
        <div class="ui container">
            <h2 class="ui left aligned header">
                <div class="sub header">Category</div>
                <?php single_cat_title(); ?>
            </h2>
            <div class="blog-list">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
	                'post_type' => 'post',
	                'category_name' => get_query_var('category_name'),
	                'posts_per_page' => get_option('posts_per_page'),
	                'paged' => $paged
                );

                $loop = new WP_Query( $args );
                $count = $loop->post_count;
                while ( $loop->have_posts() ) : $loop->the_post();
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>

                    <article class="ui vertical segment">
                        <div class="ui three column grid">
                            <div class="ui sixteen wide mobile five wide computer column">
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="ui left aligned header"><?php the_title(); ?></h3>
                                </a>
                                <div class="content date">
                                    <img class="icon" src="<?=get_template_directory_uri()?>/images/icons/calendar.png">
                                    <?php echo get_the_date(); ?>
                                </div>
                            </div>
                            <div class="ui sixteen wide mobile eight wide computer column">
                                <div class="left floated content description">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="link"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
                            </div>
                            <div class="ui right aligned three wide column">

                            </div>
                        </div>
                    </article><!--segment end-->
                <?php endwhile; ?>

            </div>
            <?php
            $GLOBALS['wp_query']->max_num_pages = $loop->max_num_pages;
            the_posts_pagination( array(
                'screen_reader_text' => ' ',
                'mid_size'           => 2,
                'prev_text'          => __( '<i class="long arrow left icon"></i>', 'sentinel' ),
                'next_text'          => __( '<i class="long arrow right icon"></i>', 'sentinel' ),
            ) );
            ?>
            <?php wp_reset_postdata();?>
            <!--div class="ui equal width grid prev-next">
                <div class="column"><a href="" class="link">PREVIOUS</a></div>
                <div class="ui right aligned column"><a href="" class="link">NEXT</a></div>
            </div-->
        </div>
    </section>
    <?php } ?>

<?php get_footer(); ?>