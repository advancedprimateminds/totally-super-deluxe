<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="content">
	<div class="container">
		<div id="about">
		
			<img src="<?php the_field('image'); ?>" />
			
			<div class="right-copy">
				<?php the_field('intro'); ?>
				<?php the_field('contact_details'); ?>
			</div>
		</div>
	</div> <!-- END .container -->
</div> <!-- END #content -->
	
<?php get_footer(); ?>
