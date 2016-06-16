
<!DOCTYPE html>
<html>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="Author" content="Sentinel" />
	<meta name="Keywords" content="some, key, words" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!-- Site Properties -->
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title( '' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />

	<?php wp_head(); ?>

</head>

<?php
global $post;
$slug = $post->post_name;
?>

<body <?php body_class($slug); ?>>
	<div class="ui active inverted page dimmer loading">
		<div class="ui medium text loader"><img width="48px" src="<?php echo get_template_directory_uri(); ?>/images/logo-rotate.gif"><br><br>L O A D I N G</div>
	</div>
