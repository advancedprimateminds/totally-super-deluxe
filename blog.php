<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

			
			<?php
			$temp = $wp_query;
			$wp_query= null;
			$wp_query = new WP_Query();
			$wp_query->query('showposts=5'.'&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post();
			?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h2><span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></h2>

					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<div class="entry">
						<?php the_content(); ?>
					</div>

					<div class="postmetadata">
						<?php the_tags('Tags: ', ', ', '<br />'); ?>
						Posted in <?php the_category(', ') ?> | 
						<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
					</div>

				</div>

			<?php endwhile; ?>
			
		
			<?php $wp_query = null; $wp_query = $temp;?>
			
		</div><!-- .inner -->
	</div><!-- .container -->
</div><!-- #content -->


<?php get_footer(); ?>