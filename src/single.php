<?php get_header(); ?>
<div class="post-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <h1><?php the_title(); ?></h1>
</div>
<div class="container post-container">
</div>
<?php get_footer(); ?>