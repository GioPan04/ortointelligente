<?php
  /* Template Name: Attivita */
  get_header();
  $post_list = new WP_Query([
    'post_type'=>'post',
    'post_status'=>'publish',
    'posts_per_page'=>-1,
    'category_name' => 'attivita'
  ]); 
?>
<?php if ( $post_list->have_posts() ) : ?>
  <div class="container post-container post-list">
      <?php while ( $post_list->have_posts() ) : 
        $post_list->the_post();
        $id = get_the_ID();
        $image = get_the_post_thumbnail_url($id); ?>
        <div class="post-list-item">
          <a href="<?php the_permalink(); ?>"><img class="post-list-image" src="<?php echo $image; ?>" /></a>
          <div>
            <div class="post-list-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <p><?php echo get_the_excerpt($id) ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
  <p><?php _e( 'There no posts to display.' ); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>