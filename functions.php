<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' ); 
	
	add_image_size( 'grid', 200, 140 ); // Soft Crop Mode
	add_image_size( 'fullsreen', 1024, 768 ); // Soft Crop Mode
	
	
	if (function_exists('register_field')) { 
	  register_field('Categories_field', dirname(__File__) . '/custom-fields/categories.php'); 
	}
	
	if (function_exists('register_field')) {
	    register_field('Location_field', dirname(__FILE__) . '/custom-fields/location.php');
	}
	
	
	/****** Add Thumbnails in Manage Posts/Pages List ******/
	if ( !function_exists('AddThumbColumn') && function_exists('add_theme_support') ) {
	    // for post and page
	    add_theme_support('post-thumbnails', array( 'post', 'page' ) );
	    function AddThumbColumn($cols) {
	        $cols['thumbnail'] = __('Thumbnail');
	        return $cols;
	    }
	    function AddThumbValue($column_name, $post_id) {
	            $width = (int) 40;
	            $height = (int) 40;
	            if ( 'thumbnail' == $column_name ) {
	                // thumbnail of WP 2.9
	                $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
	                // image from gallery
	                $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
	                if ($thumbnail_id)
	                    $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
	                elseif ($attachments) {
	                    foreach ( $attachments as $attachment_id => $attachment ) {
	                        $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
	                    }
	                }
	                    if ( isset($thumb) && $thumb ) {
	                        echo $thumb;
	                    } else {
	                        echo __('None');
	                    }
	            }
	    }
	    // for posts
	    add_filter( 'manage_posts_columns', 'AddThumbColumn' );
	    add_action( 'manage_posts_custom_column', 'AddThumbValue', 10, 2 );
	    // for pages
	    add_filter( 'manage_pages_columns', 'AddThumbColumn' );
	    add_action( 'manage_pages_custom_column', 'AddThumbValue', 10, 2 );
	}
	
	// Remove items from admin bar
	function wps_admin_bar() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('wp-logo');
	    $wp_admin_bar->remove_menu('about');
	    $wp_admin_bar->remove_menu('wporg');
	    $wp_admin_bar->remove_menu('documentation');
	    $wp_admin_bar->remove_menu('support-forums');
	    $wp_admin_bar->remove_menu('feedback');
	    $wp_admin_bar->remove_menu('view-site');
	}
	add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );
	
	// Remove "Howdy..." from admin bar
	function replace_howdy( $wp_admin_bar ) {
	    $my_account=$wp_admin_bar->get_node('my-account');
	    $newtitle = str_replace( 'Howdy,', 'Logged in as', $my_account->title );            
	    $wp_admin_bar->add_node( array(
	        'id' => 'my-account',
	        'title' => $newtitle,
	    ) );
	}
	add_filter( 'admin_bar_menu', 'replace_howdy',25 );
	
	function my_custom_login_logo() {
	    echo '<style type="text/css">
	        .login h1 a { background-image:url('.get_bloginfo('template_url').'/images/tsd_logo_login.png) !important; background-size: 260px 38px; height:63px !important;}
	    </style>';
	}
	add_action('login_head', 'my_custom_login_logo');
	
	function new_excerpt_length($length) {
	    return 15;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	
	function new_excerpt_more( $more ) {
		return '... [Take a peek]';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	
	
	function autoset_featured() {
	          global $post;
	          $already_has_thumb = has_post_thumbnail($post->ID);
	              if (!$already_has_thumb)  {
	              $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
	                          if ($attached_image) {
	                                foreach ($attached_image as $attachment_id => $attachment) {
	                                set_post_thumbnail($post->ID, $attachment_id);
	                                }
	                           }
	                        }
	      }  //end function
	add_action('the_post', 'autoset_featured');
	add_action('save_post', 'autoset_featured');
	add_action('draft_to_publish', 'autoset_featured');
	add_action('new_to_publish', 'autoset_featured');
	add_action('pending_to_publish', 'autoset_featured');
	add_action('future_to_publish', 'autoset_featured');
	

	
	
?>