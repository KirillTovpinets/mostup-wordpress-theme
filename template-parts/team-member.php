<div class="our-actors__list-slider__list-item">
    <div class="our-actors__list-slider__list-item__avatar-container">
    <div class="overlay"></div>
    <div class="icons-container">
        <i class="fab fa-instagram"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-vk"></i>
    </div>
    <img
        src="<?php the_post_thumbnail_url(); ?>"
        alt="<?php the_title(); ?>"
        class="our-actors__list-slider__list-item__avatar-container__avatar"
    />
    </div>
    <h5 class="our-actors__list-slider__list-item__name">
    <?php the_title(); ?>
    </h5>
    <span class="our-actors__list-slider__list-item__role"
    ><?php echo get_post_meta(get_the_ID(), 'role', true); ?></span
    >
</div>
