<?php
/**
 * @package WordPress
 * @subpackage WPMedium
 * @since WPMedium 1.0
 */
get_header(); ?>
    
		<div id="home" class="hfeed site">

			<header id="masthead" class="site-header" role="banner" style="background-image:url(<?php wpmedium_the_header_image(); ?>);">

				<!--
					<div class="site-header-overlay"></div>
				-->

				<hgroup>
					<h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<p><?php wpmedium_the_social_links(); ?></p>
				</hgroup>
        
<?php if ( is_active_sidebar( 'header-sidebar' ) ) : ?>
			    <div id="header-sidebar" class="widget-area header-sidebar" role="complementary">
				    <?php dynamic_sidebar( 'header-sidebar' ); ?>
			    </div><!-- #secondary -->
<?php endif; ?>

			</header><!-- #masthead -->

			<div id="main" class="wrapper">
<?php $first_post = true; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( $first_post == true ) :
	get_template_part( 'content', 'first' );
	$first_post = false;

else :

	get_template_part( 'content' ); 
endif;
?>

<?php endwhile; ?>


					</div><!-- #content -->

					<div class="pagination">
						<?php wpmedium_nav_link(); ?>
					</div>
<?php else : ?>
<?php get_template_part( 'content', 'none' ); ?>

					</div><!-- #content -->
<?php endif; // end have_posts() check ?>

				</div><!-- #primary -->

			</div><!-- #main .wrapper -->

<?php get_footer(); ?> 
