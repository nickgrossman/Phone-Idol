<div class="post" id="post-<?php the_ID(); ?>">

    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link"># <?php echo $post->ID; ?></a></h2>

    <div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
    </div>
    <div class="meta">
    <span class="author">Submitted on <?php the_time('F jS, Y'); ?> at <?php the_time('g:i A'); ?></span>
    <span class="commentcount"><?php comments_popup_link('0 Comments','1 Comment','% Comments'); ?></span>
    <?php edit_post_link(); ?>
    </div>
    
</div>

