<?php require_header(); ?>	
				<?php body_metadata(); ?>	

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="post-div" class="relative">
					<div id="post-bar" class="page-bar white uppercase txt-left background-black">
						<?php the_title(); ?>
					</div>
					<div id="post-txt" class="arial float-left">
						<?php the_content() ?>
					</div>
					<div class="clear"></div>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
				</div>
<?php require_footer(); ?>