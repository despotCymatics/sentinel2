<?php

get_header();


?>
<!-- Page Contents -->
<div class="pusher blog-post no-hero">
    <header class="header">
        <?php include( "inc/follow-menu-mobile.php" ); ?>
    </header>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="blog-post">
        <div class="ui container">
            <h2 class="ui header"><?php the_title(); ?></h2>
            <div class="ui three column grid">
                <div class="ui sixteen wide mobile four wide computer column post-details">
                    <div class="ui middle aligned list">
                        <div class="item date">
                            <img class="ui image" src="<?=get_template_directory_uri()?>/images/icons/calendar.png">
                            <div class="content">
                                <span class="header"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                        <div class="item user">
                            <img class="ui image" src="<?=get_template_directory_uri()?>/images/icons/user.png">
                            <div class="content">
                                <span class="header"><?php echo get_the_author_meta('first_name')." ".get_the_author_meta('last_name'); ;
                                    ?></span>
                            </div>
                        </div>
                        <div class="item category">
                            <img class="ui image" style="vertical-align: top !important;" src="<?=get_template_directory_uri()?>/images/icons/bookmark.png">
                            <div class="content">
                                <span class="header"><?php the_category(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui sixteen wide mobile eight wide computer column post-content">
                    <div class="content">
                        <?php the_content()?>
                    </div>
                    <div class="item share">
                        <a href="#">SHARE THIS POST</a>
                    </div>
                </div>
                <div class="ui sixteen wide mobile four wide computer column">

                </div>
            </div>
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

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>