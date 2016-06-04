<?php

get_header();

require_once("menu-fixed.php");

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

	<section class="our-work">
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
	</section>

	<?php if(is_page('what-we-do')) require_once('services-section.php'); ?>

	<section class="work-with-us">
		<div class="ui center aligned container">
			<div class="ui centered grid">
				<div class="ten wide column"><div class="ui fitted divider"></div></div>
			</div>
			<!--section header-->
			<h2 class="ui header blue">
				Want to work with us?
				<div class="description sub header">Sint omittam voluptatibus pri an, exerci bonorum impedit in nam</div>
			</h2><!--section header-->
			<a href="/contact/" class="ui large blue button">get in touch now</a>
		</div>
	</section>


</div>
<?php
	endwhile;
	endif;
?>

<?php get_footer(); ?>