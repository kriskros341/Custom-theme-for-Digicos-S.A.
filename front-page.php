<?php get_header(); ?>


  <div class="container">
    <div class="row">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="row">
      <?php if(have_posts()): while(have_posts()): ?>
          <h1><?php the_post(); ?> ddjd</h1>
          <?php the_content(); ?>


      <?php endwhile; endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
