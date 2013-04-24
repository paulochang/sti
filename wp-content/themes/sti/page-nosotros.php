<?php require_header(); ?>	
				<?php body_metadata(); ?>	

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="about-div" class="relative">
					<img id="about-image" alt="about-image" class="absolute" width="334" height="560" src="<?php echo theme_url ( 'img/sample-image3.jpg' ); ?>">
					<div id="about-bar" class="page-bar white uppercase txt-right absolute">
						nosotros
					</div>
					<div id="about-txt" class="absolute arial">
						<?php the_content() ?>
					</div>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
				</div>
<?php require_footer(); ?>