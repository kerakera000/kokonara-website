<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">

		<link rel="stylesheet" href="<?php echo get_theme_file_uri('asset/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Roboto&display=swap" rel="stylesheet">
		
		<title><?php wp_title(); ?> test site</title>

    <?php wp_head(); ?>
	</head>
	<body class="body">
		<header class="header">
			<nav class="header__nav">
				<h1 class="header__nav--title">Solvide</h1>
				<ul class="header__nav--list">
					<li class="header__nav--list--item">
						<a class="header__nav--list--item--text" href="#">
							SERVICE
						</a>
					</li>
					<li class="header__nav--list--item">
						<a class="header__nav--list--item--text" href="#">
							ABOUT
						</a>
					</li>
					<li class="header__nav--list--item">
						<a class="header__nav--list--item--text" href="#">
							Q＆A
						</a>
					</li>
					<li class="header__nav--list--item">
						<a class="header__nav--list--item--text" href="#">
							COMPANY
						</a>
					</li>
				</ul>
				<div class="header__nav--contact-box">
					<a class="header__nav--contact-box--text" href="#">
						ご依頼はこちら
						<!-- 色べた塗 -->
					</a>
				</div>
			</nav>
		</header>

		<div class="scroll-down">
			<p class="scroll-down__text">Scrole Down</p>
			<img class="scroll-down__img" src="<?php echo get_stylesheet_directory_uri(); ?>/asset/images/header-img/arow.png" alt="">
		</div>