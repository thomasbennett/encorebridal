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
    <li><a href="<?php bloginfo('rss2_url') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/rss.jpg" alt="RSS" /></a></li>
  </ul>
  <div class="clear"></div>

  <?php get_search_form(); ?>

  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
  <?php endif; ?>
  
  <div class="clear"></div>

  <h2>Categories</h2>
  <ul>
   <?php foreach(get_categories() as $cat): ?>
    <li>
      <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
      <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a>
    </li>
   <?php endforeach; ?>
  </ul>

  <br clear="both" />

  <h2>Archives</h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

  <br clear="both" />
</div>
