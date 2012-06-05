<?php
/*
Template Name: Text
*/
?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/inc/page-top.php' ); ?>

	<?php the_post_thumbnail(); ?>

	<hr />
	
	<div class="span-8">
		Navgation
	</div>
	
	<div class="span-16 last">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>


		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
