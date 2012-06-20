<div id="sidebar">
   <h4>Subscribe</h4> 
  <div class="subscribe-detail">
    <strong>Be the First to Know</strong><br />
    <span>
      about new arrivals, <br />
      sales, and events
    </span>
  </div>

  <form>
    <input type="text" class="subscribe-field" alt="Enter your email" />
    <input type="submit" class="subscribe-submit" alt="Sign Up" />
  </form>
  <div class="clear"></div>

  <h4>Follow Me</h4>
  <ul class="socials inline">
    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/social/youtube.jpg" alt="You Tube" /></a></li>
    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook.jpg" alt="Facebook" /></a></li>
    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/social/twitter.jpg" alt="Twitter" /></a></li>
    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/social/pinterest.jpg" alt="Pinterest" /></a></li>
    <li><a href="/feed"><img src="<?php bloginfo('template_directory'); ?>/images/social/rss.jpg" alt="RSS" /></a></li>
  </ul>
  <div class="clear"></div>

  <?php get_search_form(); ?>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php //get_search_form(); ?>
    
    	<?php //wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

      <div class="clear"></div>

      <h2>Categories</h2>
      <ul>
       <?php //wp_list_categories('show_count=1&title_li='); ?>
       <?php $categories = get_categories(); foreach($categories as $category){ ?>
         <?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>
       <?php } ?>
      </ul>

      <br clear="both" />
    
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>

        <br clear="both" />
                
        <?php /*
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
        */ ?>
	
	<?php endif; ?>

</div>
