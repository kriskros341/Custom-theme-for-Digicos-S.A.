<?php get_header(); ?>
<div class="container">
  <div class="row page_header">
    <h1><?php the_title() ?></h1>
  </div>
  <i style="height:40px; width:40px;" class="bi bi-diamond"></i>
  <div class="row page_content">
    <?php the_content() ?>
  </div>
</div>
<?php get_footer(); ?>
