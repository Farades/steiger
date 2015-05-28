<div class="steiger-top">
	<p class="steiger-top-desc">
		Компания "ФЕРСТТРЕЙД" специлизируются на рознично опто- вой торговле пивом, напитками и продуктами питания. Компания "ФЕРСТТРЕЙД" специлизируются на рознично оптовой торговле пивом, напитками и продуктами питания.
	</p>
</div>

<div class="prodcust-center">
	<div class="prodcust-carousel">
		<div class="prodcust-carousel-top">
			<div class="bottom_line"></div>
		</div>
		<div class="prodcust-carousel-list">
			<div class="item">
				<img src="<?echo $host_name;?>images/products/faxe/faxe.png">
				<p class="prodcust-carousel-list-item-desc">Faxe<br>4.0% (оборот)<br>Светлое</p>
			</div>
		</div>
		</div>
	</div>
	<div class="products-desc">

		<div class="element">
			<h2>ПИВО Faxe 4% (оборот)</h2>
			<p class="desc">Пиво Faxe является классическим светлым датским лагером, производимым из качественного хмеля, солода и воды, добываемой на глубине 80 метров. Этот янтарный напиток пользуется огромной популярностью в Германии и Швеции, имеет много поклонников в нашей стране. Все они отмечают насыщенный золотистый цвет пива, стойкую пену, заметную хмелевую горчинку в его вкусе и аромат с оттенками трав, домашнего хлеба, пивных дрожжей.</p>
			<p class="alc">Содержание алкоголя: 4% (об.)</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/faxe/faxe_big.png">
			<!-- <img class="logo" src="images/products/van_pur/van_pur_logo.png"> -->
		</div>
  	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		 $('.products-desc').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.prodcust-carousel-list'
		});
		$('.prodcust-carousel-list').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  asNavFor: '.products-desc',
		  // dots: true,
		  centerMode: true,
		  variableWidth: true,
		  focusOnSelect: true
		});
	});
</script>