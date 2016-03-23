<?php
/*
Template Name: Press
*/
?>
<?php get_header(); ?>

	
			
			<div class="post">

				<h2><?php the_title(); ?></h2>

				<div class="entry">
					
					<div id="press-links">
					<?php
					if(get_field('press_links')) {					
						while(has_sub_field('press_links')) { ?>
							<a href="<?php the_sub_field('link_url'); ?>" target="_blank">
								
								<div class="link-logo">
									<?php $image = get_sub_field("link_logo"); ?>
									<img src="<?php echo $image['url']; ?>" alt="" />
								</div>
								<div class="link-title">
									<h3><?php the_sub_field('link_title'); ?></h3>
								</div>
						
								<div class="clearer"></div>
							</a>
						<?php }
					} ?>
					</div>
					
				</div>


			</div>
	
			
		</div>
	</div> <!-- END .container -->
</div> <!-- END #content -->




<?php get_footer(); ?>
