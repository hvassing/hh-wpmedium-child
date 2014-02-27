<?php
/**
 * @package WordPress
 * @subpackage WPMedium
 * @since WPMedium 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">

		<?php 
		$bloginfo_description = get_bloginfo( 'description' );
		if( empty( $bloginfo_description  ) ) : ?>
		<title><?php is_home() ? printf( '%s', get_bloginfo( 'name' ) ) : printf( '%s | %s', trim( the_title() ), get_bloginfo( 'name' ) ); ?></title>
		
		<?php else: ?>
		<title><?php is_home() ? printf( '%s | %s', get_bloginfo( 'name' ), get_bloginfo( 'description' ) ) : printf( '%s | %s', trim( the_title() ), get_bloginfo( 'name' ) ); ?></title>

		<?php endif; ?>


		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/basic.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

		<?php if( is_single() ) : ?>

		<meta property="og:title" content="<?php trim( the_title() ) ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<meta property="og:description" content="" />
			<?php if( has_post_thumbnail() ) : ?>
			<?php
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			?>

		<meta property="og:image" content="<?php print $large_image_url[0]; ?>" />
			<?php endif; ?>
		<?php endif; ?>


<?php wp_head(); ?>

<script type="text/javascript">
jQuery(window).load(function($) {
	if(window.location.hash) {
		//Puts hash in variable, and removes the # character
		var hash = window.location.hash.substring(1); 
		if( hash == 'comments') {
			jQuery('#show_comments').click();
		}
	}
});
</script>

	</head>
	
	<body <?php body_class(); ?>>