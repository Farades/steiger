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
				<img src="<?echo $host_name;?>images/products/special/kachelman.png">
				<p class="prodcust-carousel-list-item-desc">Kachelman<br>3.0% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="<?echo $host_name;?>images/products/special/sitnan.png">
				<p class="prodcust-carousel-list-item-desc">Sitnan<br>5.0% (оборот)<br>Светлое</p>
			</div>
			<div class="item">
				<img src="<?echo $host_name;?>images/products/special/grosak.png">
				<p class="prodcust-carousel-list-item-desc">Grosak<br>3.0% (оборот)<br>Светлое</p>
			</div>
		</div>
	</div>
	<div class="products-desc">

		<div class="element">
			<h2>ПИВО Kachelman 3.0% (оборот)</h2>
			<p class="desc">Мы рекомендуем не обращать внимание на этот текст, а подождать пока владелец компании придумает подходящий. А пока просто попробуйте это незабываемо вкусное пиво.<p>
			<p class="alc">Содержание алкоголя: 3.0% (об.)</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>В стеклянной<br>бутылке</p>
					<p class="time">270 суток</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/special/kachelman_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/special/kachelman_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Sitnan 5.0% (оборот)</h2>
			<p class="desc">Мы рекомендуем не обращать внимание на этот текст, а подождать пока владелец компании придумает подходящий. А пока просто попробуйте это незабываемо вкусное пиво.<p>
			<p class="alc">Содержание алкоголя: 5.0% (об.)</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>В стеклянной<br>бутылке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/special/sitnan_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/special/sitnan_logo.png">
		</div>
		<div class="element">
			<h2>ПИВО Grosak 3.0% (оборот)</h2>
			<p class="desc">Мы рекомендуем не обращать внимание на этот текст, а подождать пока владелец компании придумает подходящий. А пока просто попробуйте это незабываемо вкусное пиво.<p>
			<p class="alc">Содержание алкоголя: 3.0% (об.)</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>В стеклянной<br>бутылке</p>
					<p class="time">270 суток</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/special/grosak_big.png">
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