<div class="col-md-3 gallery__photo p-0">
  <a class="gallery__photo__title" href="<?php the_permalink(); ?>">
    <h5 class="gallery__photo__title__content">
      <?php the_title(); ?>
    </h5>
  </a>
  <img
        src="<?php the_post_thumbnail_url(); ?>"
        alt="<?php the_title(); ?>"
        class="gallery__photo__item"
    />
</div>
