<?php $author_archive_link = get_author_posts_url(get_the_author_meta('ID')); ?>
<h5 class="text-center">
  <i>
    Posted by 
    <a class="author-archive-link" href="<?php echo $author_archive_link; ?>"><?php the_author(); ?></a> 
    on 
    <?php the_time('F jS, Y g:i a'); ?>
  </i>
</h5>

<article class="post post-single">
  <div class="post-body text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php the_content(); ?>
  </div>
  <div class="post-comments"><?php comments_template(); ?></div>
</article>
