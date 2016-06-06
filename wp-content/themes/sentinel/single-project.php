<?php

get_header();

include( "inc/follow-menu-mobile.php" );

?>
    <!-- Page Contents -->
    <div class="pusher project no-hero">
        <header class="header">
            <div class="ui large top fixed menu">
                <div class="ui container">
                    <div class="top">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-symbol">
                            <img class="" src="<?=get_template_directory_uri()?>/images/logo-symbol.png">
                        </a>
                        <a href="#" class="logo">
                            <img class="" src="<?=get_template_directory_uri()?>/images/logo-color.png">
                        </a>
                        <a href="tel:1 801-473-8285" class="phone">(1) 801-473-8285</a>
                        <a class="hamburger" href="#"><i class="sidebar icon"></i></a>
                    </div>
                    <div class="right menu">
                        <?php echo wp_nav_menu( $defaults ); ?>
                    </div>
                </div>
            </div>
        </header>


        <section class="project">
            <div class="ui container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 class="ui center aligned header">
                    <div class="sub header">PROJECT NAME</div>
                    <?php the_title();?>
                </h2>
                <div class="ui centered grid">
                    <div class="sixteen wide mobile eleven wide computer column">
                        <div class="content">
                            <div class="description">
                                <?php the_excerpt(); ?>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="ui sixteen wide column image fluid">
                        <?php the_post_thumbnail('project-size-single');?>
                    </div>
                </div>

                <!--div class="slider">
                    <div class="ui items">
                        <div class="item">
                            <div class="ui image fluid">
                                <img src="http://placehold.it/1170x540">
                            </div>
                        </div>
                        <div class="item">
                            <div class="ui image fluid">
                                <img src="http://placehold.it/1170x540">
                            </div>
                        </div>
                        <div class="item">
                            <div class="ui image fluid">
                                <img src="http://placehold.it/1170x540">
                            </div>
                        </div>
                    </div>
                </div-->

                <div class="case-info">
                    <div class="ui stackable grid">
                        <div class="row">
                            <div class="seven wide column">
                                <div class="text">
                                   <?php the_field('info-text');?>
                                </div>
                            </div>
                            <div class="one column"></div>
                            <div class="four wide column">
                                <div class="text">
                                    <?php the_field('info-data');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>

                <div class="ui equal width grid prev-next">
                    <div class="column">
                        <?php echo previous_post_link('%link', 'PREVIOUS'); ?>
                    </div>
                    <div class="ui right aligned column">
                        <?php echo next_post_link('%link', 'NEXT'); ?>
                    </div>
                </div>
            </div>
        </section>

    </div>

<?php get_footer(); ?>