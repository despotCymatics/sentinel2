<?php
/*
* Template Name: Work Projects
 */

get_header();

include( "inc/follow-menu-mobile.php" );

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Page Contents -->
    <div class="pusher">
        <header class="header">
            <div class="ui inverted vertical masthead center aligned segment page"
                <?php if ( has_post_thumbnail() ) {
                    echo 'style="background-image:linear-gradient(rgba(15, 142, 199, 0.85) 100%, rgba(15, 142, 199, 0.85)), url(';
                    the_post_thumbnail_url();
                    echo ');"';
                }
                ?>>
                <div class="ui container">
                    <div class="ui secondary menu">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                            <img class="" src="<?=get_template_directory_uri()?>/images/logo-white.png">
                        </a>
                        <div class="right menu">
                            <?php echo wp_nav_menu( $defaults ); ?>
                        </div>
                    </div>
                </div>
                <h1 class="ui inverted header"><?php the_title(); ?></h1>
            </div>
        </header>

        <!--section class="">
            <div class="ui container">
                <h2 class="ui center aligned header">
                    <div class="sub header"><?php the_field('subtitle'); ?></div>
                    <?php the_field('title'); ?>
                </h2>
                <div class="ui centered grid">
                    <div class="sixteen wide mobile ten wide computer column">
                        <div class="content">
                            <div class="description">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section-->

        <section class="projects">
            <div class="ui centered grid container">
                <div class="thirteen wide column">
                    <!--h2 class="ui center aligned header">
                        <div class="sub header">OUR WORK</div>
                        Page long title
                    </h2-->

                    <div class="ui grid items stackable">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array( 'post_type' => 'project', 'posts_per_page' => 7, 'paged' => $paged );
                        $loop = new WP_Query( $args );
                        $count = $loop->post_count;
                        $count = 0;
                        while ( $loop->have_posts() ) : $loop->the_post();
                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            $count++;
                            if($count == 1){ ?>

                        <div class="column item  sixteen wide">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <div class="ui column image fluid">
                                <?php the_post_thumbnail('project-size'); ?>
                            </div>
                            <?php } ?>
                            <div class="ui hidden divider"></div>
                            <div class="content">
                                <div class="ui two column grid stackable">
                                    <div class="column ui header">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    </div>
                                    <div class="column description">
                                       <?php the_excerpt();?>
                                        <div class="ui link">
                                            <a href="<?php the_permalink();?>">LEARN MORE ABOUT PROJECT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="item column eight wide">
                            <div class="ui row image fluid">
                                <?php the_post_thumbnail('project-size'); ?>
                            </div>
                            <div class="ui hidden divider"></div>
                            <div class="content">
                                <div class="ui header">
                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                </div>
                                <div class="description">
                                    <?php the_excerpt();?>
                                    <div class="ui link">
                                        <a href="<?php the_permalink();?>">LEARN MORE ABOUT PROJECT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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
                </div>
            </div>
        </section>

        <?php include('inc/work-with-us-section.php'); ?>

    </div>
    <?php
endwhile;
endif;
?>
<?php wp_reset_postdata();?>

<?php get_footer(); ?>