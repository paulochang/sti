                  <a href="<?php the_permalink(); ?>">
                    <div class="single-new">
                      <div class="news-thumb float-left"><?php the_post_thumbnail( 'single-thumb' ); ?>
                      </div>
                      <div class="news-info float-left">
                        <div class="absolute">
                          <div class="news-header inline"><?php the_time('d-m-y'); ?> - </div>
                          <div class="news-header inline ChaletBook-regular uppercase"><?php the_title(); ?></div>
                        </div>
                        <div class="news-txt absolute arial"><?php the_excerpt(); ?>
                        </div>
                        <div class="news-link more-link absolute uppercase ChaletBook-regular white">Ver más</div>
                      </div>
                      <div class="clear"></div>
                    </div> <!-- end of single new -->
                  </a>