<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

	
			
			<div class="post">

				<h2><?php the_title(); ?></h2>

				<div class="entry">
					<?php
					if(get_field('intro_copy')) { ?>
					<div class="intro">
						<?php the_field("intro_copy"); ?>
					</div>
					<?php } ?>
					
					<?php
					if(get_field('content_sections')) {					
						while(has_sub_field('content_sections')) { ?>
							<?php if(get_sub_field('section_title')) { ?>
							<h3><?php the_sub_field('section_title'); ?></h3>
							<?php } ?>
							<div class="section-copy">
								<?php the_sub_field('section_copy'); ?>
							</div>
							<div class="section-image">
								<?php $image = get_sub_field("section_image"); ?>
								<img src="<?php echo $image['sizes']['medium']; ?>" alt="" />
							</div>
							<div class="clearer"></div>
						<?php }
					} ?>
					
				</div>


			</div>
	
			
		</div>
	</div> <!-- END .container -->
</div> <!-- END #content -->




<?php get_footer(); ?>
