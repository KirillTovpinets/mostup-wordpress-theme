<article class="show-item">
    <div class="show-item__image-container">
    <div class="show-item__image-container__overlay">
        <i class="fas fa-search fa-3x"></i>
    </div>
    <img
        src="<?php the_post_thumbnail_url(); ?>"
        alt="<?php the_title(); ?>"
        class="show-item__image-container__preview"
    />
    </div>
    <div class="show-item__description">
    <h4 class="show-item__description__title">
        <?php the_title(); ?>
    </h4>
    <span class="show-item__description__type">Спектакль</span>
    <!-- <div class="d-flex justify-content-between align-items-center">
        <a
        href="<?php get_permalink( the_ID() ); ?>"
        class="btn btn-warning show-item__description__read-more my-auto btn-sm"
        >Подробнее</a
        >
    </div> -->
    </div>
</article>
