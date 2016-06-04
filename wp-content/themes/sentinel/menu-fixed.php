<?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => 'Main menu',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => false,
	'fallback_cb'     => false,
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => new main_walker()
);

?>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
	<div class="ui container">
		<div class="top">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-symbol">
				<img class="" src="<?=get_template_directory_uri()?>/images/logo-symbol.png">
			</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img class="" src="<?=get_template_directory_uri()?>/images/logo-color.png">
			</a>
			<a href="tel:1801-473-8285" class="phone">(1) 801-473-8285</a>
			<a class="hamburger" href="#"><i class="sidebar icon"></i></a>
		</div>
		<div class="right menu">
			<?php echo wp_nav_menu( $defaults ); ?>
		</div>
	</div>
</div>