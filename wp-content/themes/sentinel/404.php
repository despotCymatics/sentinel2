<?php get_header();

require_once( "inc/follow-menu-mobile.php" );

?>

	<div class="pusher">
		<header class="header">
			<div class="ui inverted vertical masthead center aligned segment page">
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
				<h1 class="ui inverted header">Page not found</h1>
			</div>
		</header>

		<section class="">
			<div class="ui container">
				<div class="ui centered grid">
					<div class="sixteen wide mobile ten wide computer column">
						<div class="content">
							<div class="description">
								<img src="<?=get_template_directory_uri()?>/images/page-not-found.png" title="404">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

<?php get_footer(); ?>