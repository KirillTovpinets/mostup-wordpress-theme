<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="логотип мост up">
    </a>
    <h2 class="title">Театр-студия</h2>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
    <?php
            wp_nav_menu(
              array(
                'container' => 'ul',
                'menu_class' => 'navbar-nav ml-auto mt-2 mt-lg-0',
                'add_li_class' => 'nav-item',
                'add_a_class' => 'nav-link'
              )
            );
      ?>
    </div>
  </div>
</nav>
