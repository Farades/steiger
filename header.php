<? require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" href="<?echo $host_name;?>images/favicon.ico" />
	<link rel="stylesheet" href="<?echo $host_name;?>css/styles.css" type="text/css">
	<link rel="stylesheet" href="<?echo $host_name;?>css/font_face.css" type="text/css">
	<link rel="stylesheet" href="<?echo $host_name;?>css/fixes.css" type="text/css">
	<link rel="stylesheet" href="<?echo $host_name;?>css/reset.css" type="text/css">
	<link rel="stylesheet" href="<?echo $host_name;?>libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?echo $host_name;?>libs/animate/animate.css" />
	<link rel="stylesheet" type="text/css" href="<?echo $host_name;?>libs/slick/slick.css"/>
</head>

<body>
	<div id="loading">
		<div class="loader-logo">
			<img src="<?echo $host_name;?>images/logo.jpg" alt="">
			<p>FIRSTTRADE</p>
		</div>
		<div id="loader">
			<img src="<?echo $host_name;?>images/load.GIF" alt="">
		</div>
	</div>
	<div id="main_wrap">
		<div id="header">
			<div id="header_container">
				<div id="socials">
					<a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;<a href="http://vk.com/club13050335" target="_blank"><i class="fa fa-vk"></i></a>&nbsp;&nbsp;<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
				</div>
				<div id="wave_1"></div>
				<div id="phone"><a href="tel:+74956448088">(<img src="<?echo $host_name;?>images/phone_icon.png" alt="">) +7 495 644-80-88</a></div>
				<div id="wave_2"></div>
				<div id="search"><input class="search" type="text" placeholder="поиск..."></div>
			</div>
		</div>	
		<div id="logo_menu_container">
			<div class="header-logo"><a href="<?echo $host_name;?>index.php" data-pjax='pjax_container'><img src="<?echo $host_name;?>images/logo.jpg" alt="Лого"></a></div>
			<div class="slogan">Путь к высшей цели!</div>
			<ul id="menu">
				<li class="menu_not_spacer"><a class="header" href="<?echo $host_name;?>index.php" data-pjax='pjax_container'>Главная</a></li>
				<li class="menu_spacer"></li>
				<li class="menu_not_spacer parrent"><a class="header" data-pjax='pjax_container'>Наша продукция</a>
					<ul>
						<li><a>Пиво</a><i class="fa fa-long-arrow-right"></i>
							<ul>
								<li><a>Словакия</a><i class="fa fa-long-arrow-right"></i>
									<ul>
										<li><a href="<?echo $host_name;?>products/slovakia/steiger.php">Steiger</a></li>
										<li><a href="<?echo $host_name;?>products/slovakia/radler.php">Steiger Radler</a></li>
										<li><a href="<?echo $host_name;?>products/slovakia/stein.php">Stein</a></li>
										<li><a href="<?echo $host_name;?>products/slovakia/special.php">Особые бренды</a></li>
									</ul>
								</li>
								<li><a>Германия</a><i class="fa fa-long-arrow-right"></i>
									<ul>
										<li><a href="<?echo $host_name;?>products/germany/zoller.php">Zoller-Hof</a></li>
										<li><a href="<?echo $host_name;?>products/germany/zahringer.php">Zahringer</a></li>
										<li><a href="<?echo $host_name;?>products/germany/steininger.php">Steininger</a></li>
									</ul>
								</li>
								<li><a>Польша</a><i class="fa fa-long-arrow-right"></i>
									<ul>
										<li><a href="<?echo $host_name;?>products/poland/van_pur.php">Van Pur</a></li>
										<li><a href="<?echo $host_name;?>products/poland/herman.php">Herman Muller</a></li>
										<li><a href="<?echo $host_name;?>products/poland/lomza.php">Lomza</a></li>
										<li><a href="<?echo $host_name;?>products/poland/karpackie.php">Karpackie</a></li>
										<li><a href="<?echo $host_name;?>products/poland/edelmeister.php">Edelmeister</a></li>
									</ul>
								</li>
								<li><a>Дания</a><i class="fa fa-long-arrow-right"></i>
									<ul>
										<li><a href="<?echo $host_name;?>products/denmark/faxe.php">Faxe</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a>Вода</a><i class="fa fa-long-arrow-right"></i>
							<ul>
								<li><a href="<?echo $host_name;?>products/water/dr_pepper.php">Dr. Pepper</a></li>
								<li><a href="<?echo $host_name;?>products/water/old_pepper.php">Old Pepper's</a></li>
								<li><a href="<?echo $host_name;?>products/water/serafimov.php">Серафимов дар</a></li>
							</ul>
							
						</li>
					</ul>
				</li>
				<li class="menu_spacer"></li>
				<li class="menu_not_spacer"><a class="header" href="news.php" data-pjax='pjax_container'>Новости</a></li>
				<li class="menu_spacer"></li>
				<li class="menu_not_spacer"><a class="header" href="services.php" data-pjax='pjax_container'>Услуги</a></li>
				<li class="menu_spacer"></li>
				<li class="menu_not_spacer"><a class="header" href="company.php" data-pjax='pjax_container'>О компании</a></li>
			</ul>
			<div id="eng"><a class="eng" href="#">English</a></div>
		</div>
		<div id="pjax_container">