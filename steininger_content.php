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
				<img src="images/products/steininger/premium.png">
				<p class="prodcust-carousel-list-item-desc">Steininger Premium<br>4.5% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="images/products/steininger/hefeweisbier.png">
				<p class="prodcust-carousel-list-item-desc">Steininger Hefeweisbier<br>5.2% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="images/products/steininger/schwarzbier.png">
				<p class="prodcust-carousel-list-item-desc">Steininger Schwarzbier<br>4.9% (оборот)<br>Темное</p>
			</div>
		</div>
	</div>
	<div class="products-desc">
		<div class="element">
			<h2>ПИВО Steininger Premium 4.5% (оборот)</h2>
			<p class="desc">Светлое пиво. Непревзойденный, насыщенный вкус пива, полный солода с приятнымы горьковатыми оттенками немецкого хмеля. В очень свежем послевкусии задерживаются цветочные и травяные хмельные нотки.</p>
			<p class="alc">Содержание алкоголя: 4.5% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/steininger/premium_big.png">
			<img class="logo" src="images/products/steininger/steininger_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Steininger Hefeweisbier 5.2% (оборот)</h2>
			<p class="desc">Светлое нефильтрованное пшеничное пиво с очень свежим ароматом и мягким, обвалакивающим вкусом с легким пшеничным послевкусием.</p>
			<p class="alc">Содержание алкоголя: 5.2% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/steininger/hefeweisbier_big.png">
			<img class="logo" src="images/products/steininger/steininger_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Steininger Schwarzbier 4.9% (оборот)</h2>
			<p class="desc">Темное пиво с привлекательным, глубоким коричнево-красноватым цветом и характерным сладковатым солодовым вкусом.</p>
			<p class="alc">Содержание алкоголя: 4.9% (об.)</p>
			<ul class="storage">
				<li>
					<img src="images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="images/products/steininger/schwarzbier_big.png">
			<img class="logo" src="images/products/steininger/steininger_logo.png">
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