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
    <?php $count = 1 ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php // set an ad after post 2 ?>
    <?php if ($count == 3): ?>
      <div class="middle-page-ad"><?php get_sidebar('primary-ad') ?></div>
    <?php endif; ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php if (has_post_thumbnail()) { ?>
				<?php the_post_thumbnail(); ?>
				<hr class="single" />
			<?php } ?>

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_excerpt(); ?>
				<br clear="both" />
			</div>

			<div class="postmetadata">
				Posted in <?php the_category(', ') ?> :: 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

			<hr class="space" />
			<hr />
			<hr class="space" />

		</div>

      <?php $count ++; ?>

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
