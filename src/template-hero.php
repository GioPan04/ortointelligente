<?php
/* Template Name: Pagina con Hero */
get_header(); ?>
<div class="post-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="post-hero-overlay">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="container post-container">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>