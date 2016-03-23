<?php
/*
Template Name: Portfolio Gallery
*/
?>
<?php get_header(); ?>


			<div class="portfolio-gallery">
				<?php
				$images = get_field('gallery');
				if( $images ): ?>	
					<div class="gallery royalSlider heroSlider rsMinW">
						<?php foreach( $images as $image ): ?>
						    <img class="rsImg" src="<?php echo $image['sizes']['large']; ?>"  data-rsTmb="<?php echo $image['sizes']['thumbnail']; ?>" data-rsBigImg="<?php echo $image['sizes']['fullsreen']; ?>" alt="" />
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
			
			<div class="clearer"></div>
		</div>
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
	    		enabled: true,
	    		pauseOnHover: true,
				delay:3000
			    },
		    transitionType:'move',
			transitionSpeed:600,
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
	    	fullscreen: {
	    		// fullscreen options go gere
	    		enabled: true,
	    		nativeFS: true
	    	}
		}).data('royalSlider');
				
	
		
	});

</script>


<?php get_footer(); ?>
