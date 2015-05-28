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
				<img src="<?echo $host_name;?>images/products/van_pur/lomza.png">
				<p class="prodcust-carousel-list-item-desc">Lomza Export<br>5.7% (оборот)<br>Светлое</p>
			</div>
		</div>
		</div>
	</div>
	<div class="products-desc">
		<div class="element">
			<h2>ПИВО Lomza Export 5.7% (оборот)</h2>
			<p class="desc">Бренд "Ломжа", названный в честь города, в котором он производится, выражает истинный региональный пивной характер. В линейке "Ломжа" представлены 6 вариантов, самым популярным из которых является Lomza Export - посол бренда "Ломжа", самый популярный продукт пивоварни, звезда национальных рекламных кампаний. Пиво Lomza Export обладает благородным, очень приятным вкусом и мягким гармоничным ароматом.</p>
			<p class="alc">Содержание алкоголя: 5.7% (об.)</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/van_pur/lomza_big.png">
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