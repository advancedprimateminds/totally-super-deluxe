<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<h2>Blog</h2>

			<ul id="posts-container">
				<?php $count = 1; ?>
				<?php while (have_posts()) : the_post(); ?>
					
				<li <?php if($count %3 == 0) { echo "class = 'third'";	} ?>>
					<a href="<?php the_permalink() ?>">
						<?php
						if ( has_post_thumbnail() ) {
						   the_post_thumbnail('grid'); 
						} else {
						    // the current post lacks a thumbnail
						}
						?>
					
						<h3 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>
					
						
						<p class="entry">
							<?php the_excerpt(); ?>
						</p>
						<div class="meta">
							Posted <?php the_time('m.d.y') ?> 
						</div
					</a>
				</li>
				<?php $count = $count + 1; ?>
				<?php endwhile; ?>
			</ul>


			
			<div class="clearer"></div>
			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif; ?>
			</div>
		</div> <!-- END .container -->
	</div> <!-- END #content -->
	
<?php get_footer(); ?>
