                <div id="news-section">
                  <div id="news-bar" class="uppercase white">
                    Noticias
                    <img id="news-arrow" alt="news-arrow" src="<?php echo theme_url ( 'img/news-arrow.png' ); ?>">
                  </div>
                  <div id="news-container">
                    <?php 

                    $query = 'post_type=post';
                    $query .= '&posts_per_page=-1&orderby=date';

                    $recent_projects = new WP_Query ( $query ) ; 
                    $counter = $recent_projects->post_count;
                    ?>
                      <?php while ( $recent_projects->have_posts () ) : ?>
                        <?php 
                        $recent_projects->the_post () ; 
                        $counter--;
                        if ($counter != 0){
                          load_template ( get_template_directory () . '/news-item.php', false ) ; 
                        } else {
                          load_template ( get_template_directory () . '/news-item-last.php', false ) ; 
                        }
                      ?>

                      <?php endwhile ; ?>
                  </div> <!-- news-container end -->
                </div> <!-- news-section end -->