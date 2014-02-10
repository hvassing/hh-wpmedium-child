
				<div id="single" class="hfeed site">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title">
								<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'wpmedium' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h1>
						</header><!-- .entry-header -->
						
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wpmedium' ), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->
					
<?php if ( get_the_tags() ) : ?>
						<div class="entry-tags">
							<?php wpmedium_the_taxonomy( sprintf( '%s ', __( 'This post also appears in', 'wpmedium' ) ), ', ', '' ); ?>
						</div><!-- .entry-tags -->
<?php endif; ?>
					
						<? if (comments_open()): ?>
						<div class="entry-comment">
							<a class="toggle-comments" id="goto_comments" href="<?php the_permalink(); ?>#comments"><?php _e( 'Show Comments', 'wpmedium' ); ?></a>
						</div>
						<?php endif; ?>
					
					</article>
					<div style="clear:both"></div>
				</div>

				<div id="primary" class="site-content">

					<div id="content" role="main">