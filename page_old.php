<?php get_header(); ?>


  <div class="row">
    <div class="row title_container bg-image">
      <div class="d-flex pd-20">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <?php if(have_posts()): while(have_posts()): ?>
        <?php the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
