<?php
/*
* Template Name: Contact
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

		<section class="contact">
			<div class="ui container">
				<h2 class="ui center aligned header">
					<div class="sub header">Contact Us</div>
					What can we help You with?
				</h2>
				<div class="ui centered stackable grid">

					<div class="four wide column">
						<?php the_field('column1')?>
					</div>

					<div class="four wide column">
						<?php the_field('column2')?>
					</div>

					<div class="eight wide column">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>

		<section class="map">
			<a href="#"><img src="<?=get_template_directory_uri()?>/images/map.jpg"></a>
		</section>

	</div>
<?php
endwhile;
endif;
?>
<?php wp_reset_postdata();?>

<?php get_footer(); ?>