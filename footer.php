		</div>
		<div class="page-buffer"></div>
	</div>
	<div id="main_footer_wrap">
		<div id="feedback_container">
			<div class="feedback-contacts">
				<p class="write_to_us">Напишите нам!</p>
				<p class="desc">Мы хотим и готовы зарабатывать вместе и с радостью ответим на все Ваши вопросы.</p>
				<div class="wave_bg_1"></div>
				<div class="contacts">
					<p class="address"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;м. Маяковская, ул. Юлиуса Фучика 17/19<br>офис № 648 (в посольстве Словакии)</p>
					<p class="phone"><a href="tel:+74956448088"><i class="fa fa-phone"></i>&nbsp;&nbsp;+7 (495) 644-80-88</a></p>
					<p class="mail"><i class="fa fa-envelope-o">&nbsp;&nbsp;</i>info@1-td.ru</p>
				</div>
				<div class="wave_bg_2"></div>
			</div>
			<div class="feedback-map">
				<div class="map_wrapper">
					<div id="map"></div>
					<div class="map-desc">
						<p>Центральный Офис<br>"FIRSTTRADE"</p>
						<p>г.Москва, ул. Юлиуса Фучика 17/19</p>
					</div>
				</div>
			</div>
			<div class="feedback-form">
				<form action="#">
					<input type="text" name="name" placeholder="Ваше имя">
					<input type="text" name="phone" placeholder="Телефон">
					<input type="text" name="email" placeholder="E-mail">
					<textarea name="message" placeholder="Сообщение"></textarea>
					<input type="submit" value="Отправить">
				</form>
			</div>
		</div>

		<div class="footer_wrap">	
			<div id="footer">
				<div class="footer-logo"><img src="images/logo.jpg" alt="Лого"></div>
				<div class="slogan">FIRSTTRADE</div>
				<div id="footer_menu">
					<ul>
						<li class="menu_not_spacer"><a class="eng" href="company.php" data-pjax='pjax_container'>О компании</a></li>
						<li class="menu_spacer"></li>
						<li class="menu_not_spacer"><a class="eng" href="news.php" data-pjax='pjax_container'>Новости</a></li>
						<li class="menu_spacer"></li>
						<li class="menu_not_spacer"><a class="eng" href="services.php" data-pjax='pjax_container'>Услуги</a></li>
						<li class="menu_spacer"></li>
						<li class="menu_not_spacer"><a class="eng" href="products.php" data-pjax='pjax_container'>Наша продукция</a></li>
						<div style="clear:both;"></div>					
					</ul>
				</div>
				<div id="footer_socials">
					<a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;<a href="http://vk.com/club13050335" target="_blank"><i class="fa fa-vk"></i></a>&nbsp;&nbsp;<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
				</div>
				<div style="clear: both;"></div>
			</div>		
		</div>
	</div>	
	<script src="libs/jquery/jquery-2.0.3.min.js"></script>
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;load=package.full" type="text/javascript"></script>
	<script src="libs/yamap/yamap.js"></script>
	<script src="libs/pjax/jquery.pjax.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#menu li').hover(function() {
				$(this).addClass('active');
				$('ul:first', this).show("fast");
				},
				function() {
					$(this).removeClass('active');
					$('ul:first', this).hide ("fast"); 
				}
			);
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).pjax('a[data-pjax]', '#pjax_container');
			$.pjax.defaults.timeout = 1200;
			
			$(document).on('pjax:send', function() {
  	  		    var $preloader = $('#loading'),
			        $spinner   = $preloader.find('#loader');
			    $spinner.show();
			    $preloader.show();
			})
			$(document).on('pjax:complete', function() {
	  		    var $preloader = $('#loading'),
			        $spinner   = $preloader.find('#loader');
			    $spinner.fadeOut();
			    $preloader.delay(350).fadeOut('slow');
    	        setTimeout(function(){
					$(".company").addClass('animated rotateInDownLeft');
					$(".philosophy").addClass('animated rotateInDownRight');
					$(".news").addClass('animated slideInLeft');
					$(".distributors").addClass('animated zoomIn');
					$(".shares").addClass('animated slideInRight');
			    }, 450);
			})
		});
		$(window).on('load', function () {
		    var $preloader = $('#loading'),
		        $spinner   = $preloader.find('#loader');
		    $spinner.fadeOut();
		    $preloader.delay(350).fadeOut('slow');
	        setTimeout(function(){
				$(".company").addClass('animated rotateInDownLeft');
				$(".philosophy").addClass('animated rotateInDownRight');
				$(".news").addClass('animated slideInLeft');
				$(".distributors").addClass('animated zoomIn');
				$(".shares").addClass('animated slideInRight');
		    }, 450);
		});
	</script>
</body>
</html>