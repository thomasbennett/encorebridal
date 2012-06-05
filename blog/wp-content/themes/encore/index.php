<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/inc/page-top.php' ); ?>

	<hr />
	<hr class="space" />

	<div class="span-17 append-1" id="blog_post_content">
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
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> :: 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

			<hr class="space" />
			<hr />
			<hr class="space" />

		</div>

	<?php endwhile; ?>

	<div class="span-24 last">
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
	</div>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</div>

	<div class="span-6 last">
	<?php get_sidebar(); ?>
	</div>

	<hr class="space" />

<?php include (TEMPLATEPATH . '/inc/featured-on.php' ); ?>

<?php get_footer(); ?>