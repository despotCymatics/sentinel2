<?php
/*
* Template Name: Homepage
 */

get_header();

include( "inc/follow-menu-mobile.php" );

?>

<!-- Page Contents -->
<div class="pusher">
<header class="header">
	<div class="ui inverted vertical masthead center aligned segment">
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
		<div class="ui container">
			<div class="pop-holder">
				<div class="pop pop1"><span>25%</span>roi increase</div>
				<div class="pop pop2"><span>25%</span>roi increase</div>
				<div class="pop pop3"><span>25%</span>roi increase</div>
			</div>
			<div class="call-to-action">
				<h1 class="ui inverted header">Digital is nothing without a roadmap</h1>
				<p>Feugiat lobortis hendrerit cu mea, ei duo mutat partem nusquam. Ex ridens audiam latine pri, pri porro incorrupte no. Melius appetere vulputate te mea.
				</p>
				<div class="ui large white button"><a href="/work/">See our work</a></div>
			</div>
		</div>

	</div>

	<div class="clients">
		<div class="ui container">
			<div class="ui equal width column doubling grid">
				<div class="row">
					<?php
					$args = array( 'post_type' => 'client', 'posts_per_page' => 6 );
					$loop = new WP_Query( $args );
					$count = $loop->post_count;
					while ( $loop->have_posts() ) : $loop->the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<div class="column">
							<img class="ui centered image" src="<?php echo $feat_image; ?>">
						</div>
					<?php endwhile;	?>
					<?php wp_reset_postdata(); ?>
				</div>

			</div>
		</div>
	</div>

</header>

<?php include( 'inc/services-section.php' ); ?>

<section class="projects">

	<?php
	$args = array( 'post_type' => 'project', 'posts_per_page' => 6 );
	$loop = new WP_Query( $args );
	$count = $loop->post_count;
	?>
	<div class="nav-holder">
		<a class="ui label prev-slide">
			<img class="ui image" src="<?=get_template_directory_uri()?>/images/arrow-left.png">
		</a>
		<a class="ui label next-slide">
			<img class="ui image" src="<?=get_template_directory_uri()?>/images/arrow-right.png">
		</a>
	</div>

	<div class="ui items">
		<?php
		while ( $loop->have_posts() ) : $loop->the_post();
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
		<div class="big-bg" style="background-image: url(<?=$feat_image?>)">
			<div class="ui container centered grid">
				<div class="ten wide center aligned column">
					<div class="item">
						<h2 class="ui center aligned header">
							<div class="sub header">WHAT WE DO</div>
							<?php the_title(); ?>
						</h2>
						<div class="extra">
							<a href="<?php the_permalink();?>" class="ui large blue button">view project</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile;	?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>

<?php
$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
$count = $loop->post_count;

if($count > 0) { ?>

<section class="testimonials">
	<div class="ui container">
		<h2 class="ui center aligned header">
			<div class="sub header">TESTIMONIALS</div>
			Our customers love us
		</h2>

		<div class="ui centered stackable right aligned grid">
			<div class="three wide right aligned column">
				<img class="ui image inline q" src="<?=get_template_directory_uri()?>/images/quote-left.png">
			</div>
			<div class="ten wide center aligned column">
				<?php
				$tab = 1;
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="ui tab <?php echo ($tab == 1) ? 'active ' : '';?>" data-tab="t<?=$tab?>">
						<?php the_excerpt(); ?>
						<p class="testimonial-name"><?php the_title(); ?></p>
					</div>
					<?php $tab++; ?>
				<?php endwhile;	?>
			</div>
			<div class="three wide column">
				<img class="ui image inline q" src="<?=get_template_directory_uri()?>/images/quote-right.png">
			</div>
			<div class="ten wide center aligned column row" style="padding-top: 0;">
				<div class="ui tabular compact menu">
					<?php
					$tab = 1;
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<a class="<?php echo ($tab == 1) ? 'active ' : '';?> item" data-tab="t<?=$tab?>">
							<?php
							if ( has_post_thumbnail() ) { ?>
								<img class="ui circular image" src="<?php the_post_thumbnail_url('thumbnail')?>">
							<?php }else {?>
								<img class="ui circular image" src="http://placehold.it/35x35">
							<?php } ?>
						</a>
						<?php $tab++; ?>
					<?php endwhile;	?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php include( 'inc/work-with-us-section.php' );?>

<?php get_footer(); ?>
