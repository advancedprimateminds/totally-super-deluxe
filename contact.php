<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="post" id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>
				
				
				
				<div class="entry">	
					
						
					<div id="contact-form-container" class="left">
						<?php the_field('contact_intro'); ?>
						
						<?php echo do_shortcode("[contact_form]"); ?>
					</div>
					<div class="left">
						<?php the_field('contact_info'); ?>
					</div>
					
					
					
				</div>


			</div>
	
			<?php endwhile; endif; ?>
			
		</div>
	</div> <!-- END .container -->
</div> <!-- END #content -->




<?php get_footer(); ?>
