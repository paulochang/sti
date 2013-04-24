<?php require_header(); ?>	
				<?php body_metadata(); ?>	

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="about-div" class="relative">
					<img id="contact-image" alt="about-image" class="absolute" width="542" height="560" src="<?php echo theme_url ( 'img/contact-image.jpg' ); ?>">
					<div class="page-bar white uppercase txt-right absolute background-black">
						contacto
					</div>
					<div id="contact-info" class="absolute arial">
						<?php 
						//If the form is submitted
						if(isset($_POST['submitted'])) {
							$emailTo = 'pigenio@gmail.com';
							$subject = 'Contact Form Submission from '.$name;
							$body = "Name: $name nnEmail: $email nnComments: $comments";
							$headers = 'From: My Site <'.$emailTo.'>' . "rn" . 'Reply-To: ' . $email;
							wp_mail( $emailTo, $subject, $body, $headers);
						} ?>
						<div id="contact-container">		
								<div id="contact-txt-content">
									<?php the_content() ?>
								</div>						
								<div id="contact-field-container">
									<form id="contact-form" method="post" action="<?php the_permalink(); ?>"> 
										<p class="contact-lbl">NOMBRE:</p>
										<input type="text" class="contact-txt contact-field" id="name" name="name" 
										required tabindex="2" /> 
										<p class="contact-lbl">EMAIL:</p>
										<input type="email" class="contact-txt contact-field" id="email" name="email" 
										required tabindex="3" /> 
										<p class="contact-lbl">MENSAJE:</p>
										<textarea name="comment" class="contact-txt contact-field block" id="comment" tabindex="4"></textarea> 

										<input class="contact-txt block contact-btn pointer" name="submit" type="submit" id="submit" tabindex="4" value="ENVIAR MENSAJE" /> 
									</form> 
								</div>									
								<div class="clear"></div>
						</div>
					</div>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
				</div>
<?php require_footer(); ?>