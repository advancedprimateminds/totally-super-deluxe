<?php get_header(); ?>

			
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h3><?php the_title(); ?></h3>
					<div class="product-info">
						<?php 
							$price = get_field('price');
							$product = get_the_title();
							echo print_wp_cart_button_for_product($product, $price); 
						?>
						<h4>$<?php the_field('price'); ?></h4>
					</div>
					<div class="clearer"></div>
					<?php the_field('description'); ?>
					
					
					
					<div class="clearer"></div>
					<p class="next"><?php previous_post('%','Next Item &raquo;', 'no'); ?></p>
					<p class="previous"><?php next_post('%','&laquo; Previous Item', 'no'); ?></p>
					<div class="clearer"></div>
					<?php
					$images = get_field('product_images');
					if( $images ): ?>	
						<div class="royalSlider heroSlider rsMinW">
							<?php foreach( $images as $image ): ?>
							    <img class="rsImg" src="<?php echo $image['sizes']['large']; ?>" data-rsTmb="<?php echo $image['sizes']['thumbnail']; ?>" data-rsBigImg="<?php echo $image['sizes']['full']; ?>" alt="" />
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					

					
				
				</div>

			<?php endwhile; endif; ?>
			<div class="clearer"></div>
			
		</div> <!-- END .inner -->
	</div> <!-- END .container -->
</div> <!-- END #content -->
			
<script type="text/javascript">
$(document).ready(function() {

	jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.230, 1.000, 0.320, 1.000)';
	var slider = $('.royalSlider').royalSlider({
	    arrowsNav: false,
	    loop: true,
	    keyboardNavEnabled: true,
	    controlsInside: false,
	    imageScaleMode: 'none',
	    arrowsNavAutoHide: false,
	    controlNavigation: 'thumbnails',
	    navigateByClick: true,
	    startSlideId: 0,
	    autoPlay: {
    		// autoplay options go gere
    		enabled: false,
    		pauseOnHover: true,
			delay:3000
		    },
	    transitionType:'move',
		transitionSpeed:500,
	    globalCaption: false,
		slidesSpacing: 0,
		easeInOut: 'easeOutBack',
		thumbs: {
		    		// thumbnails options go gere
		    		spacing: 10,
		    		autoCenter: false
		    	},
		autoScaleSlider: true,
		autoScaleSliderHeight: 572,
		autoScaleSliderWidth: 640,
	}).data('royalSlider');
	

	
	
});

</script>

<?php get_footer(); ?>