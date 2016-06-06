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

		<section class="contact">
			<div class="ui container">
				<h2 class="ui center aligned header">
					<div class="sub header">Contact Us</div>
					What can we help You with?
				</h2>
				<div class="ui centered stackable grid">

					<div class="four wide column">
						<h5>General</h5>
						<p>hello@sentinelactive.com</p>
						<h5>Careers</h5>
						<p>careers@sentinelactive.com</p>
						<h5>Support</h5>
						<p>support@sentinelactive.com</p>
						<h5>Phone</h5>
						<p>+44 203 3686164</p>
					</div>

					<div class="four wide column">
						<h5>Address</h5>
						<p>Gemini House<br>
							136-140 Old Shoreham Road<br>
							Brighton, BN3 7BD<br>
							United Kingdom</p>
						<h5>Let's be friends</h5>
						<p>
							<a href="#">Twitter</a><br>
							<a href="#">Facebook</a><br>
							<a href="#">LinkedIn</a><br>
						</p>
					</div>

					<div class="eight wide column">
						<form class="ui form">
							<div class="field">
								<input type="text" name="name" placeholder="Name">
							</div>
							<div class="field">
								<input type="email" name="email" placeholder="Email">
							</div>
							<div class="field">
								<input type="text" name="subject" placeholder="Subject">
							</div>
							<div class="field">
								<textarea name="message" placeholder="Your meassage here.."></textarea>
							</div>
							<br>
							<button class="ui large blue button" type="submit">Send message</button>
						</form>

					</div>
				</div>
			</div>
		</section>

		<section class="map">
			<a href="#"><img src="images/map.jpg"></a>
		</section>

	</div>
<?php
endwhile;
endif;
?>
<?php wp_reset_postdata();?>

<?php get_footer(); ?>