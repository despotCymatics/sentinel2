<?php
/*
* Template Name: About
 */

get_header();

require_once("menu-fixed.php");

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Page Contents -->
<div class="pusher">
<header class="header">
	<div class="ui inverted vertical masthead center aligned segment"
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

<section class="our-story">
	<div class="ui container">
		<h2 class="ui center aligned header">
			<div class="sub header"><?php the_field('subtitle'); ?></div>
			<?php the_field('title'); ?>
		</h2>
		<div class="ui centered grid">
			<div class="sixteen wide mobile eleven wide computer column">
				<div class="content">
					<div class="description">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<section class="our-team">
	<div class="ui center aligned container">
		<h2 class="ui center aligned header">
			<div class="sub header">Introducing</div>
			Our Team
		</h2>
		<div class="ui grid">
			<?php
			$args = array( 'post_type' => 'team', 'posts_per_page' => 100 );
			$loop = new WP_Query( $args );
			$count = $loop->post_count;
			?>

			<div class="doubling six column row">
				<?php
				while ( $loop->have_posts() ) : $loop->the_post();
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<div class="column team-member">
						<div class="ui center aligned fluid card">
							<div class="ui fluid image">
								<div class="dimmer"><?php the_excerpt();?></div>
								<img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?=$feat_image;?>">
							</div>
							<div class="ui header">
								<div class="content">
									<?php the_title(); ?>
									<div class="sub header"><?php the_field('position'); ?></div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;	?>
				<?php wp_reset_postdata(); ?>

				<div class="column">
					<div class="ui center aligned fluid card">
						<div class="ui fluid image">
							<img src="<?=get_template_directory_uri()?>/images/new-member.png">
						</div>
						<div class="ui header">
							<div class="content">
								This could be you!
								<div class="sub header"><a href="/careers/">Pick your position</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our-process">
	<div class="ui container">
		<h2 class="ui center aligned header">
			<div class="sub header">Our Process</div>
			Our Process Heading
		</h2>
		<div class="ui stackable three column grid">
			<div class="row">
				<div class="column">
					<div class="card">
						<div class="content">
							<h3 class="ui header">
								<div class="mini ui image">
									<img src="<?=get_template_directory_uri()?>/images/process/research.png">
								</div>
								Research
							</h3>
							<div class="description">
								His an errem ludus liberavisse. Sed vocent fierent an, mei ut appareat adolescens
								dissentiet. Diceret atomorum pericula sea id, integre voluptua eam ad.
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="content">
							<h3 class="ui header">
								<div class="mini ui image">
									<img src="<?=get_template_directory_uri()?>/images/process/design.png">
								</div>
								Design
							</h3>
							<div class="description">
								His an errem ludus liberavisse. Sed vocent fierent an, mei ut appareat adolescens
								dissentiet. Diceret atomorum pericula sea id, integre voluptua eam ad.
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="content">
							<h3 class="ui header">
								<div class="mini ui image">
									<img src="<?=get_template_directory_uri()?>/images/process/development.png">
								</div>
								Development
							</h3>
							<div class="description">
								His an errem ludus liberavisse. Sed vocent fierent an, mei ut appareat adolescens
								dissentiet. Diceret atomorum pericula sea id, integre voluptua eam ad.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<div class="card">
						<div class="content">
							<h3 class="ui header">
								<div class="mini ui image">
									<img src="<?=get_template_directory_uri()?>/images/process/monitoring.png">
								</div>
								Monitoring
							</h3>
							<div class="description">
								His an errem ludus liberavisse. Sed vocent fierent an, mei ut appareat adolescens
								dissentiet. Diceret atomorum pericula sea id, integre voluptua eam ad.
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="content">
							<h3 class="ui header">
								<div class="mini ui image">
									<img src="<?=get_template_directory_uri()?>/images/process/optimization.png">
								</div>
								Optimization
							</h3>
							<div class="description">
								His an errem ludus liberavisse. Sed vocent fierent an, mei ut appareat adolescens
								dissentiet. Diceret atomorum pericula sea id, integre voluptua eam ad.
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="content">
							<h3 class="ui header">
								<div class="mini ui image">
									<img src="<?=get_template_directory_uri()?>/images/process/delivey.png">
								</div>
								Delivery
							</h3>
							<div class="description">
								His an errem ludus liberavisse. Sed vocent fierent an, mei ut appareat adolescens
								dissentiet. Diceret atomorum pericula sea id, integre voluptua eam ad.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="careers">
	<div class="ui container">
		<div class="ui stackable grid">
			<div class="row">
				<div class="seven wide column">
					<h2 class="ui left aligned header">
						<div class="sub header">CAREERS</div>
						Come Work With Us
					</h2>
					<div class="content">
						<div class="description">
							Our aim is to simplify the process of implementing your digital requirements, from simple
							WordPress builds to high-end mobile applications and services.  Long-term cost-effective
							relationships with our clients play a key role in our mission to move towards excellence
							in development and digital marketing strategy implementation.
						</div>
						<p>&nbsp;</p>
						<a href="/careers/" class="ui large blue button">apply for a job</a>
					</div>
				</div>
				<div class="one wide column"></div>
				<div class="eight wide column">
					<img class="ui fluid image" src="<?=get_template_directory_uri()?>/images/about-career.jpg">
				</div>
			</div>
			<div class="row">

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>