<?php require_header(); ?>	
				<?php body_metadata(); ?>	
				<div class="single-container relative">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="page-bar white uppercase txt-right background-black">
						<div class="float-left">
						<?php the_title(); ?>
						</div>
						<a class="bar-menu-link uppercase txt-right float-right white ChaletBook-regular" href="<?php echo get_post_type_archive_link ( 'vivienda' ); ?>">[Regresar a proyectos]</a>
						<div class="clear"></div>
					</div>
					<div class="single-info">
						<div class="left-info float-left">
							
							<div class="single-data background-black white arial">
								<div class="single-data-txt">
									<?php data_the_content( $page -> ID); ?>									
								</div>
							</div>
							<div class="single-description arial">
								<?php the_content();?>
							</div>
							<?php endwhile; ?>
                            <?php endif; ?>
						</div>
						<div class="right-info float-left">
							<?php getPostImages(); ?>
							<div class="clear"></div>
						</div>
						<div class="clear archive-end"></div>
					</div>
				</div>
<?php require_footer(); ?>