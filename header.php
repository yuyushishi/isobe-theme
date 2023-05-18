<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (is_front_page()) : ?>
		<title>
			<?php bloginfo('name'); ?>
		</title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php else : ?>
		<title>
			<?php echo trim(wp_title('', false)); ?>｜
			<?php bloginfo('name'); ?>
		</title>
		<meta name="description" content="<?php echo trim(wp_title('', false)); ?>｜<?php bloginfo('description'); ?>">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/css/style.css')); ?>">
	<!-- swiper -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/swiper.min.css?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/css/swiper.min.css')); ?>">
	<!-- fontawsome -->
	<link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
	<!-- form ajax -->
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<?php wp_head(); ?>
</head>


<?php get_header(); ?>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<!-- header -->
		<header id="header" class="header">
			<div class="logo">
				<a href="<?php echo esc_url(home_url()); ?>/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="医療法人札幌いそべクリニック">
				</a>
			</div>

			<div class="headerRight">
				<!-- navigation -->
				<nav id="headerNav" class="headerNav">
					<?php
					wp_nav_menu(array(
						'menu' => 'global_navi',
						'menu_class' => 'list',
						'container' => false,
						'add_li_class'  => 'main mainMenu listItem',
						'add_a_class'  => 'listItem__link',
					)); ?>
				</nav>

				<div class="cta">
					<div class="box">
						<a href="tel:0117536000" class="tel">
							<svg viewBox="0 0 512 512">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#telIcon"></use>
							</svg>
							<span class="num">011-753-6000</span>
						</a>
						<div class="inner">
							<p>受付　8:30～12:00 / 13:00～16:30</p>
							<p>休診　水曜午後・土曜午後・日曜・祝日</p>
						</div>
					</div>
				</div>
			</div>

		</header>
		<!-- menu -->
		<div class="headerMenu" id="headerMenu">
			<div id="headerMenuBox" class="headerMenuBox">
				<span class="menuTop"></span>
				<span class="menuCenter"></span>
				<span class="menuBottom"></span>
			</div>
		</div>

		<nav class="fixedMenu">
			<ul class="list">
				<li class="listItem listItem01">
					<a href="<?php echo esc_url(home_url()); ?>/news/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_icon-01.svg" alt="お知らせ">
						<span class="jp">お知らせ</span>
					</a>
				</li>
				<li class="listItem listItem02">
					<a href="<?php echo esc_url(home_url()); ?>/about#aboutAccess">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_icon-02.svg" alt="アクセス">
						<span class="jp">アクセス</span>
					</a>
				</li>
				<li class="listItem listItem03">
					<a href="https://ssc6.doctorqube.com/isobeclinic/index.html?stamp=150946" target="_blank" rel="noopenner">
						<i class="fa-solid fa-globe"></i>
						<span class="jp">Web予約</span>
					</a>
				</li>
				<li class="listItem listItem04">
					<a href="https://isobeclinic.jp/medical/#sheet">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_icon-04.svg" alt="問診票">
						<span class="jp">問診票</span>
					</a>
				</li>
			</ul>
		</nav>