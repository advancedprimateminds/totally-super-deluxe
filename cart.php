<?php
/*
Template Name: Cart
*/
?>

<?php get_header(); ?>
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="post" id="shopping-cart">
				
				<h2><span><?php the_title(); ?></span></h2>

				<div class="entry">

					<?php the_content(); ?>
					
				</div>


			</div>
	
			<?php endwhile; endif; ?>
			
		</div>
	</div> <!-- END .container -->
</div> <!-- END #content -->


    

<?php get_footer(); ?>
