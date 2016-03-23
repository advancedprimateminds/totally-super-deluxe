<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<a href="http://www.shoptotallysuperdeluxe.com">
<?php 

$images = get_field('hero_image');

if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
  
<?php endif; ?>
</a>
					
<hr align="right">

<div class="container-one fade-in">
<h2 align="center">SHOP OUR FAVORITES</h2> 
</div>

<div class="container-two fade-in">
<div data-accent_color="ccc7be" data-background_color="a39a93" data-button_background_color="776f6a" data-button_text_color="ccc7be" data-cart_button_text="Cart" data-cart_title="Your cart" data-cart_total_text="Total" data-checkout_button_text="Checkout" data-discount_notice_text="Shipping and discount codes are added at checkout." data-embed_type="cart" data-empty_cart_text="Your cart is empty." data-shop="totally-super-deluxe.myshopify.com" data-sticky="true" data-text_color="ccc7be"></div>
<div data-background_color="a39a93" data-button_background_color="776f6a" data-button_text_color="ccc7be" data-buy_button_out_of_stock_text="Out of Stock" data-buy_button_product_unavailable_text="Unavailable" data-buy_button_text="Buy now" data-collection_handle="frontpage" data-display_size="compact" data-embed_type="collection" data-has_image="true" data-next_page_button_text="Next page" data-product_handle="" data-product_modal="true" data-product_name="" data-product_title_color="5C514A" data-redirect_to="modal" data-shop="totally-super-deluxe.myshopify.com"></div>
</div>

<?php get_footer(); ?>
