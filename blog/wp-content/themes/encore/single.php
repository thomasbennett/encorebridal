<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/inc/page-top.php' ); ?>

	<hr />
	<hr class="space" />

  <div class="span-6 last right">
    <div id="sidebar">
      <?php get_sidebar(); ?>
      <?php get_sidebar('secondary'); ?>
    </div>
  </div>
  <div class="span-16" id="blog_post_content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php if (has_post_thumbnail()) { ?>
				<?php the_post_thumbnail(); ?>
				<hr class="single" />
			<?php } ?>

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
				<br clear="both" />
			</div>

			<div class="postmetadata">
				<?php edit_post_link('Edit this entry','','<br />'); ?>
				Posted in <?php the_category(', ') ?> :: 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

            <?php $cat = get_the_category(); ?>
            <?php $firstCat = $cat[0]->cat_ID; ?>
            <?php query_posts('posts_per_page=4&cat='.$firstCat); ?>
            <?php if(have_posts()): ?>
            <div class="related-posts">
                <h3>Related Posts</h3>
                <ul class="related-items">
                  <?php while(have_posts()): the_post(); ?>
                    <li class="related-post">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(array(150,150)); ?>
                        <?php the_title(); ?>
                      </a>
                    </li>
                  <?php endwhile; ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

			<hr class="space" />
			<hr />
			<hr class="space" />

      <div class="left"><?php previous_post('&laquo; %', '', 'yes'); ?></div>
      <div class="right"><?php next_post('% &raquo; ', '', 'yes'); ?></div>

			<hr class="space" />
      <hr />
			<hr class="space" />


			<?php comments_template(); ?>

		</div>

	<?php endwhile; ?>

	<div class="span-24 last">
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
	</div>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</div>

	<hr class="space" />

<?php include (TEMPLATEPATH . '/inc/featured-on.php' ); ?>

<?php get_footer(); ?>
