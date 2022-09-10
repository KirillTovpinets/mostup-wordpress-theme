<?php get_header(); ?>
<header class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/front-image.jpg'); background-size: cover; background-position: 50%;">
  <div class="theater-title">
    <h1 class="theater-title__title">МОСТ UP</h1>
    <span class="theater-title__subtitle">театр студия</span>
  </div>
    <?php get_template_part('template-parts/navbar'); ?>
</header>
<main class="main-content">
      <section class="get-ticket section">
        <div class="container">
          <div class="get-ticket__row d-flex justify-content-between">
            <div class="get-ticket__text-container">
              <span class="get-ticket__title">Присоединиться к нам</span>
              <p class="get-ticket__description">
                Вы можете зарегистрироваться в системе для получения доступка к прямой трансляции спектаклей
              </p>
            </div>
            <button class="btn btn-warning my-auto btn-lg">Присоединиться</button>
          </div>
        </div>
      </section>
      <section class="section welcome">
        <div
          class="welcome__quote d-flex justify-content-center align-items-center"
        >
          <div class="container">
            <blockquote class="welcome__quote__text">
              <span>Весь мир - театр,</span>
              <span>а люди в нём - актёры</span>
            </blockquote>
          </div>
        </div>
        <div class="container">
          <h2 class="welcome__title">
            Добро пожаловать <br />
            в христианский театр
          </h2>
          <p class="welcome__text">
            Мы иллюстрируем духовные истины, взятые из Библии, на сцене. Вместе
            ищем интересные сценарии или сами пишем их, постепенно воплощая
            задуманное. Спектакль - это своего рода притча, которая учит,
            наставляет, обличает.
          </p>
        </div>
      </section>
      <section class="section gallery pb-0 section-dark">
        <h3 class="section__title-stripe">Обучающие курсы</h3>
        <div class="row m-0 gallery__row">
          <?php
              cources_list();
              while ( $cources->have_posts() ) : $cources->the_post(); ?>
              <?php get_template_part('/template-parts/cource'); ?>
          <?php endwhile; ?>
        </div>
      </section>
      <section class="section featured-shows">
        <div class="container-fluid">
          <h3 class="section__title">Наши спектакли</h3>
          <div class="section__divider">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" alt="разделитель" />
          </div>
          <div class="featured-shows__shows-slider">
              <?php
                  our_plays_list();
                  while ( $our_plays->have_posts() ) : $our_plays->the_post(); ?>
                  <?php get_template_part('/template-parts/our_plays'); ?>
              <?php endwhile; ?>
          </div>
        </div>
      </section>
      <section class="section upcoming-events">
        <div class="container">
          <h3 class="section__title">Уже скоро</h3>
          <div class="section__divider">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" alt="разделитель" />
          </div>
          <div class="upcoming-events__events-container">
            <?php
                  coming_soon_list();
                  while ( $coming_soon->have_posts() ) : $coming_soon->the_post(); ?>
                  <?php get_template_part('/template-parts/coming_soon'); ?>
              <?php endwhile; ?>
          </div>
        </div>
      </section>
      <section class="section our-actors">
        <div class="container-fluid">
          <h3 class="section__title">Наша команда</h3>
          <div class="section__divider">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" alt="разделитель" />
          </div>
          <div class="our-actors__list-slider">
            <?php
              team_member_list();
             while ( $team_members->have_posts() ) : $team_members->the_post(); ?>
              <?php get_template_part('/template-parts/team-member'); ?>
            <?php endwhile; ?>
          </div>
        </div>
      </section>
      
      <section class="section testimonials">
        <div class="container">
          <div class="dots-container"></div>
          <div class="testimonials-slider">
            <?php
              testimonial_list();
             while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
              <?php get_template_part('/template-parts/testimonials'); ?>
            <?php endwhile; ?>
          </div>
        </div>
      </section>
    </main>
<?php
get_footer();
