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
				<img src="images/products/stein/konzumne.png">
				<p class="prodcust-carousel-list-item-desc">Stein Konzumne<br>3.4% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="images/products/stein/vyczpne.png">
				<p class="prodcust-carousel-list-item-desc">Stein Vycapne<br>4.1% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="images/products/stein/leziak.png">
				<p class="prodcust-carousel-list-item-desc">Stein Leziak<br>5.0% (оборот)<br>Светлое</p>
			</div>
		</div>
	</div>
	<div class="products-desc">

		<div class="element">
			<h2>ПИВО Stein Konzumne 3.4% (оборот)</h2>
			<p class="desc">Мы рекомендуем не обращать внимание на этот текст, а подождать пока владелец компании придумает подходящий. А пока просто попробуйте это незабываемо вкусное пиво.<p>
			<p class="alc">Содержание алкоголя: 3.4% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/bottle.png">
					<p>В стеклянной<br>бутылке</p>
					<p class="time">270 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/stein/konzumne_big.png">
			<img class="logo" src="images/products/stein/stein_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Stein Vycapne 4.1% (оборот)</h2>
			<p class="desc">Мы рекомендуем не обращать внимание на этот текст, а подождать пока владелец компании придумает подходящий. А пока просто попробуйте это незабываемо вкусное пиво.<p>
			<p class="alc">Содержание алкоголя: 4.1% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/bottle.png">
					<p>В стеклянной<br>бутылке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/stein/vyczpne_big.png">
			<img class="logo" src="images/products/stein/stein_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Stein Leziak 5.0% (оборот)</h2>
			<p class="desc">Мы рекомендуем не обращать внимание на этот текст, а подождать пока владелец компании придумает подходящий. А пока просто попробуйте это незабываемо вкусное пиво.<p>
			<p class="alc">Содержание алкоголя: 5.0% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/bottle.png">
					<p>В стеклянной<br>бутылке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/stein/leziak_big.png">
			<img class="logo" src="images/products/stein/stein_logo.png">
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