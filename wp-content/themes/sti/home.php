<?php require_header(); ?>	
				<?php body_metadata(); ?>	
				<div id="home-div">
					<div id="featured-slide" class="loading">
						<div id="slide-container">
							<?php getSlideImage(); ?>					
						<img id="prev-arrow" class="prev-arrow absolute pointer" src="<?php echo theme_url ( 'img/home/prev_arrow.png' ); ?>" alt="prev-arrow">
						<img id="next-arrow" class="next-arrow absolute pointer" src="<?php echo theme_url ( 'img/home/next_arrow.png' ); ?>" alt="next-arrow">
						</div>
					</div>
					<div id="projects-container" class="float-left">
						<a href="<?php echo get_post_type_archive_link( 'vivienda' ); ?>"><div class="project-type float-left">
							<div class="thumb-container relative">								
								<div class="thumb-title absolute uppercase">vivienda</div>
								<img width="313" height="220" class="item-image absolute" src="<?php echo theme_url ( 'img/home/vivienda-image.jpg' ); ?>" alt="vivienda-image">
								<div class="item-border absolute gray-overlay"></div>
								<div class="more-link item-link absolute uppercase ChaletBook-regular white">ver más</div>
							</div>
							<div class="thumb-caption arial">
								Para ejecutar estas obras podemos 
								hacer desde tratos por administración 
								hasta tratos cerrados.</div>
						</div></a>
						<a href="<?php echo get_post_type_archive_link( 'desarrollo' ); ?>"><div class="project-type float-left">
							<div class="thumb-container relative">								
								<div class="thumb-title absolute uppercase">desarrollos</div>
								<img width="313" height="220" class="item-image absolute" src="<?php echo theme_url ( 'img/home/desarrollo-image.jpg' ); ?>" alt="desarrollo-image">
								<div class="item-border absolute blue-overlay"></div>
								<div class="more-link item-link absolute uppercase ChaletBook-regular white">ver más</div>
							</div>
							<div class="thumb-caption arial">
								La calidad, eficiencia y costo en estas obras 
								es lo más importante.</div>
						</div></a>
						<a href="<?php echo get_post_type_archive_link( 'geotecnia' ); ?>"><div class="project-type float-left extra-margin">
							<div class="thumb-container relative">				
								<div class="thumb-title absolute uppercase">geotecnia</div>
								<img width="313" height="220" class="item-image absolute" src="<?php echo theme_url ( 'img/home/geotecnia-image.jpg' ); ?>" alt="geotecnia-image">
								<div class="item-border absolute yellow-overlay"></div>
								<div class="more-link item-link absolute uppercase ChaletBook-regular white">ver más</div>
							</div>
							<div class="thumb-caption arial">
								La comprensión del funcionamiento de estas 
								obras nos da la seguridad para explorar más 
								oportunidades en este campo.</div>
						</div></a>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
<?php require_footer(); ?>