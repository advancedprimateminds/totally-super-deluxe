<?php get_header(); ?>

			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h2 class="post-title"><?php the_title(); ?></h2>
					<a class="addthis_button" href="//addthis.com/bookmark.php?v=300">Share [+]</a>
					<div class="clearer"></div>
					<div class="meta">
						Posted <?php the_time('m.d.y') ?> 
					</div
					
					<div class="entry">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					</div>
			

				</div>

			<?php endwhile; endif; ?>
			<div class="clearer"></div>
			
		</div> <!-- END .inner -->
	</div> <!-- END .container -->
</div> <!-- END #content -->
			

<?php get_footer(); ?>