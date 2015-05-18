<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="css/font_face.css" type="text/css">
	<link rel="stylesheet" href="css/fixes.css" type="text/css">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
</head>

<body>
	<div id="loading">
		<div class="loader-logo">
			<img src="images/logo.jpg" alt="">
			<p>FIRSTTRADE</p>
		</div>
		<div id="loader">
			<img src="images/load.GIF" alt="">
		</div>
	</div>
	<div id="main_wrap">
		<div id="header">
			<div id="header_container">
				<div id="socials">
					<a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;<a href="http://vk.com/club13050335" target="_blank"><i class="fa fa-vk"></i></a>&nbsp;&nbsp;<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
				</div>
				<div id="wave_1"></div>
				<div id="phone"><a href="tel:+74959286827">(<img src="images/phone_icon.png" alt="">) +7 495 928-68-27</a></div>
				<div id="wave_2"></div>
				<div id="search"><input class="search" type="text" placeholder="поиск..."></div>
			</div>
		</div>	
		<div id="logo_menu_container">
			<div class="header-logo"><a href="index.php" data-pjax='main_container'><img src="images/logo.jpg" alt="Лого"></a></div>
			<div class="slogan">Путь к высшей цели!</div>
			<ul id="menu">
				<li class="menu_not_spacer"><a class="header" href="company.php" data-pjax='main_container'>О компании</a></li>
				<li class="menu_spacer"></li>
				<li class="menu_not_spacer"><a class="header" href="#">Новости</a></li>
				<li class="menu_spacer"></li>
				<li class="menu_not_spacer"><a class="header" href="#">Услуги</a></li>
				<li class="menu_spacer"></li>
				<li class="menu_not_spacer parrent"><a class="header" href="#">Наша продукция</a>
					<ul>
						<li>
							Пиво
							<ul>
								<li>
									<a>
										<img src="images/flags/slovakia.png" alt="Словакия"><br>
										Словакия
									</a>
									<ul>
										<li>
											<a href="#">
												<img src="images/label/steiger.png" alt="Словакия"><br><br>
												Steiger
											</a>
										</li>
										<li class="last">
											<a href="">
												<img src="images/label/stein.png" alt="Словакия"><br><br>
												Stein
											</a>
										</li>
										<div style="clear: both;"></div>
									</ul>
								</li>
								<li>
									<a>
										<img src="images/flags/Poland.png" alt="Польша"><br>
										Польша
									</a>
									<ul>
										<li class='last'>
											<a href="">
												<img src="images/label/vanpur.png" alt="Van Pur"><br><br>
												Van Pur
											</a>
										</li>
										<div style="clear: both;"></div>
									</ul>
								</li>
								<li>
									<a>
										<img src="images/flags/Germany.png" alt="Германия"><br>
										Германия
									</a>
								</li>
								<li class="last">
									<a>
										<img src="images/flags/Denmark.png" alt="Дания"><br>
										Дания
									</a>
								</li>
								<div style="clear: both;"></div>
							</ul>
						</li>
						<li>
							Вода
						</li>
						<li class="last">
							Водка
						</li>
					</ul>
				</li>											
			</ul>
			<div id="eng"><a class="eng" href="#">English</a></div>
		</div>
		<div id="pjax_container">