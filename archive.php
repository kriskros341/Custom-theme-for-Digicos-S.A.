<?php get_header(); ?>


  <div class="row">
    <div class="row"><h1><?php single_cat_title(); ?></h1></div>
    <div class="row">
      <?php if (have_posts()): while(have_posts()): the_post() ?>
        <h1><?php the_title() ?></h1>
        <?php the_excerpt(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
