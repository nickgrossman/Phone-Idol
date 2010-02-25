<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

	<?php if (is_home()) : ?>
	 <h2 class="page_title">Latest entries:</h2>
	<?php endif; ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php include('post-content.php'); ?>

		<?php endwhile; ?>

		<div class="navigation">
			<?php if(!function_exists('wp_pagenavi')) : ?>
            <div class="alignleft"><?php next_posts_link('Previous') ?></div>
            <div class="alignright"><?php previous_posts_link('Next') ?></div>
            <?php else : wp_pagenavi(); endif; ?>
		</div>

	<?php else : ?>

  <p style="margin: 1em; padding: 1em; font-size: 1.3em; text-align: center">No entries yet!  Be the first to sing a song on Phone Idol!</h2>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
