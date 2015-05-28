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
				<img src="<?echo $host_name;?>images/products/van_pur/herm_mull.png">
				<p class="prodcust-carousel-list-item-desc">Herman Muller<br>4.0% (оборот)<br>Светлое</p>
			</div>
		</div>
		</div>
	</div>
	<div class="products-desc">

		<div class="element">
			<h2>ПИВО Hermann Muller 4% (оборот)</h2>
			<p class="desc">"Hermann Muller" - очень легкое и достаточно простое пиво, сваренное на пивоварне Browar Jedrzejow, принадлежащей компании Van Pur</p>
			<p class="alc">Содержание алкоголя: 4% (об.)</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/tin_plate.png">
					<p>В жестяной<br>банке</p>
					<p class="time">360 суток</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/van_pur/herm_mull_big.png">
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