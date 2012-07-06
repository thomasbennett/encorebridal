<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
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
    		'name' => 'Sidebar Large Ad',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are advertisements for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>'
    	));

      register_sidebar(array(
    		'name' => 'Sidebar Secondary Ads',
    		'id'   => 'sidebar-ads-2',
    		'description'   => 'These are smaller advertisements for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div><hr />'
    	));

      register_sidebar(array(
    		'name' => 'Primary Ad',
    		'id'   => 'primary-ad',
    		'description'   => 'Primary ad for blog feed.',
    		'before_widget' => '<div id="%1$s" class="primary-feed-ad widget %2$s">',
    		'after_widget'  => '</div>'
    	));
    }


	// CUSTOM WORDPRESS MENU
	// IN FUNCTION.PHP
   function register_menus() {
        register_nav_menus(array(
             'primary-menu' => __('Primary Menu'),
             'footer-about' => __('Footer About'),
             'footer-consignors' => __('Footer Consignors'),
             'footer-customer-service' => __('Footer Customer Service'),
             'footer-for-brides' => __('Footer For Brides')
        ));
   }
   add_action('init', 'register_menus');
	
	// Add Featured image support
	add_theme_support( 'post-thumbnails' );
		
	
	// Custom Comments
	function encore_comments($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; ?>
		<div class="one_comment" id="li-comment-<?php comment_ID(); ?>">
			<div class="span-3">
				<?php echo get_avatar($comment,$size='75'); ?>
			</div>
			<div class="span-12 last">
				<?php if ($comment->comment_approved == '0') : ?>
			         <em><?php _e('Your comment is awaiting moderation.') ?></em>
			         <br />
			      <?php endif; ?>
			
				<h6>ON <?php echo get_comment_date('m.d.Y') . ' '; echo get_comment_author_link(); ?> SAID:<br /></h6>
				<?php edit_comment_link(__('(Edit)'),'  ',''); ?>
				<?php comment_text(); ?>
			</div><br clear="both" />
		</div>
		<?php
	}	

    // EXCEPRTS
    function new_excerpt_more($more) {
       global $post;
       return '<a class="moretag" href="'. get_permalink($post->ID) . '"> READ MORE...</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

?>
