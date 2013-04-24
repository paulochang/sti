<?php require_header(); ?>	
				<?php body_metadata(); ?>	
				<div class="relative archive-container">
					<div class="archive-info">
						<div class=" background-yellow page-bar uppercase white txt-right">
							geotecnia							
							<?php $pageId = 31?>
							<?php $desarrollo_page = get_page( $pageId )?>
						</div>
						<?php echo get_the_post_thumbnail( $pageId, 'archive-img', array('class'	=> "float-left") ); ?> 
						<!-- <img class="float-left" width="646" height="520" src="<?php echo theme_url ( 'img/vivienda-sample.jpg' ); ?>"></img> -->
						<div class="archive-txt float-left arial">
							<?php echo wpautop( $desarrollo_page->post_content);  ?>
						</div>
						<div class="clear"></div>
					</div>
					<div id="archive-show">
						 <?php 

	                    $query = 'post_type=geotecnia';
	                    $query .= '&posts_per_page=-1';

	                    $recent_projects = new WP_Query ( $query ) ; 
	                    ?>
	                      <?php while ( $recent_projects->have_posts () ) : ?>
	                        <?php $recent_projects->the_post () ; ?>
	                        <?php load_template ( get_template_directory () . '/geotecnia-item.php', false ) ; ?>
	                      <?php endwhile ; ?>
						<div class="clear archive-end"></div>
					</div>
				</div>
<?php require_footer(); ?>