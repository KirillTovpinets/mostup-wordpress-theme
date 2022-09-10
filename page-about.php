
<?php get_header(); ?>
<div class="header page-header">
  <?php get_template_part('template-parts/navbar'); ?>
  <div class="page-banner" style="
  background: url('<?php echo get_the_post_thumbnail_url(); ?>');
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;">
  </div>

  <div class="container">
    <div class="page-content">
      <?php the_content(); ?>
    </div>
  </div>
  
</div>
