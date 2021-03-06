<article class="post post-preview col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div style="margin: 40px;">
    <?php $author_archive_link = get_author_posts_url(get_the_author_meta('ID')); ?>
    <span class="post-title">
      <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
    </span>
    <h5>
      <i>
        Posted by 
        <a class="author-archive-link" href="<?php echo $author_archive_link; ?>"><?php the_author(); ?></a> 
        on 
        <?php the_time('F jS, Y g:i a'); ?>
      </i>
    </h5>
    <?php the_content(); ?>
  </div>
</article>
