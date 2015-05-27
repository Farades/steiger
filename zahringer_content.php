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
				<img src="images/products/zahringer/schwarz.png">
				<p class="prodcust-carousel-list-item-desc">Zahringer Schwarz Bier<br>4.9% (оборот)<br>Темное</p>
			</div>
			<div class="item">
				<img src="images/products/zahringer/hefeweizen.png">
				<p class="prodcust-carousel-list-item-desc">Zahringer Hefeweizen<br>5.0% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="images/products/zahringer/premium.png">
				<p class="prodcust-carousel-list-item-desc">Zahringer Premium<br>4.8% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="images/products/zahringer/lager.png">
				<p class="prodcust-carousel-list-item-desc">Zahringer Lager<br>4.0% (оборот)<br>Светлое</p>
			</div>
		</div>
	</div>
	<div class="products-desc">

		<div class="element">
			<h2>ПИВО Zahringer Schwarz Bier 4.9% (оборот)</h2>
			<p class="desc">Пиво темное, солодовое, пастеризованное, фильтрованное. Темное пиво, при приготовлении которого используются специальные сорта солода. Этот сорт пива имеет мягкий зерновой аромат с легкими медовыми оттенками. Вкус мягкий, обволакивющий, жжено-кофейный. Пиво Zahringer Schwarz Bier придаст сил после тяжелого дня и прекрасно подойдет для приятных длинных вечеров.</p>
			<p class="alc">Содержание алкоголя: 4.9% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/zahringer/schwarz_big.png">
			<img class="logo" src="images/products/zahringer/zahringer_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Zahringer Hefeweizen 5.0% (оборот)</h2>
			<p class="desc">Пиво светлое, солодовое, пастеризованное, нефильтрованное. Пшеничное нефильтрованное пиво, продолжающее традицию настоящего немецкого эля. "Zahringer Hefeweizen" имеет легкий фруктовый (банановый) вкус с приятными нотками гвоздики. Это освежающее пиво особенно подойдет для жаркого летнего дня.</p>
			<p class="alc">Содержание алкоголя: 5.0% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/zahringer/hefeweizen_big.png">
			<img class="logo" src="images/products/zahringer/zahringer_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Zahringer Premium 4.8% (оборот)</h2>
			<p class="desc">Пиво светлое, солодовое, пастеризованное, фильтрованное. Пиво правильного светло-янтарного оттенка с насыщенным вкусом и приятным ароматом. В основном, такие сорта пива варят в Баварии и Баден-Вюртемберге.</p>
			<p class="alc">Содержание алкоголя: 4.8% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/zahringer/premium_big.png">
			<img class="logo" src="images/products/zahringer/zahringer_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Zahringer Lager 4.0% (оборот)</h2>
			<p class="desc">Пиво светлое, солодовое, пастеризованное, фильтрованное. Пиво с небольшим добавлением хмеля, благодаря чему имеет легкий ровный солодовый вкус и мягкое послевкусие. Данный сорт на протяжении нескольких месяцев дополнительно выдерживается в холодных погребах пивоварен.</p>
			<p class="alc">Содержание алкоголя: 4.0% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/zahringer/lager_big.png">
			<img class="logo" src="images/products/zahringer/zahringer_logo.png">
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