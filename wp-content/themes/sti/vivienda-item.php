						<a href="<?php the_permalink(); ?>"  class="item float-left">
							<div class="item-title absolute uppercase"><?php the_title(); ?></div>
							<?php 
								$my_attr = array(
									'class'	=> "item-image absolute"
								);
							?>
							<?php the_post_thumbnail( 'single-thumb' , $my_attr); ?>
							<div class="item-border absolute gray-overlay"></div>
							<div class="more-link item-link absolute uppercase ChaletBook-regular white">ver más</div>
						</a>