<?php get_header(); ?>

			<h2 id="shop-hd">Shop</h2>
			<!--<div class="navigation">
				<div class="next-posts"><?php next_posts_link('Next Page &raquo;') ?></div>
				<div class="prev-posts"><?php previous_posts_link('&laquo; Previous Page') ?></div>
				<div class="clearer"></div>
			</div>-->

			<ul id="products-container">
			<?php if (have_posts()) : ?>

	 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				
				<?php $count = 1; ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<li class="product <?php if($count %3 == 0) { echo "third";	} ?>" >
						<?php
						$images = get_field('product_images' );
						$image = $images[0];
						?>
						<a href="<?php the_permalink() ?>">
							<img src="<?php echo ( $image['sizes']['grid'] ); ?>" />
							<h3 id="post-<?php the_ID(); ?>"><?php the_title(); ?><span>$<?php the_field('price'); ?></span></h3>
						</a>

					</li>
					<?php $count = $count + 1; ?>
				<?php endwhile; ?>


				<?php else : ?>

					<li>Nothing found</li>

			<?php endif; ?>
			</ul>
			<div class="clearer"></div>
			<div class="navigation">
				<div class="next-posts"><?php next_posts_link('Next Page &raquo;') ?></div>
				<div class="prev-posts"><?php previous_posts_link('&laquo; Previous Page') ?></div>
			</div>
		</div>
	</div> <!-- END .container -->
</div> <!-- END #content -->

	

<?php get_footer(); ?>
