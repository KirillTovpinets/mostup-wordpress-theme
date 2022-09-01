<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="./styles.css">
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
	<header class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/front-image.jpg'); background-size: cover; background-position: 50%;">
		<div class="theater-title">
			<h1 class="theater-title__title">МОСТ UP</h1>
			<span class="theater-title__subtitle">христианский театр</span>
		</div>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="логотип мост up">
				</a>
				<h2 class="title">Христианский театр</h2>
				<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
						aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavId">
				<!-- <?php
								wp_nav_menu(
									array(
										'container' => 'ul',
										'menu_class' => 'navbar-nav ml-auto mt-2 mt-lg-0',
										'add_li_class' => 'nav-item',
										'add_a_class' => 'nav-link'
									)
								);
					?> -->
					<!-- <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Спектакли</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">О нас</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Отзывы</a>
						</li>
					</ul> -->
				</div>
			</div>
		</nav>
	</header>
