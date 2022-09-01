<article
    class="upcoming-events__event d-flex align-items-center justify-content-between"
>
    <div
    class="upcoming-events__event__content d-flex align-items-center"
    >
    <img src="./img/show.jpg" alt="" />
    <div class="upcoming-events__event__date">
        <span class="upcoming-events__event__date__day-number"
        >06</span
        >
        <div class="upcoming-events__event__date__details">
        <span class="month">Апрель</span>
        <span class="weekday">Понедельник</span>
        </div>
    </div>
    <div class="upcoming-events__event__description">
        <h5 class="upcoming-events__event__description__title">
        <?php the_title(); ?>
        </h5>
        <span class="upcoming-events__event__description__duration"
        ><?php echo get_post_meta(get_the_ID(), 'place', true); ?></span
        >
    </div>
    </div>
    <button class="btn btn-lg btn-warning my-auto">Подробнее</button>
</article>
