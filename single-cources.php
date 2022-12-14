
<?php get_header(); ?>
<div class="header page-header">
  <?php get_template_part('template-parts/navbar'); ?>
  <div class="single-banner">
    <h1 class="single-title"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div class="page-content">
      <?php the_content(); ?>
    </div>
    <h5>Отправить заявку на обучающий курс</h5>
    <?php echo do_shortcode('[contact-form-7 id="97" title="Записаться на курс"]'); ?>
  </div>
  
</div>
