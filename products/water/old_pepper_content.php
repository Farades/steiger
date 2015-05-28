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
				<img src="<?echo $host_name;?>images/products/dr_pepper/old_pepper_crew_cherry.png">
				<p class="prodcust-carousel-list-item-desc">Old Pepper's Crew<br>Cherry</p>
			</div>
			<div class="item">
				<img src="<?echo $host_name;?>images/products/dr_pepper/old_pepper_crew_vanilla.png">
				<p class="prodcust-carousel-list-item-desc">Old Pepper's Crew<br>Vanilla</p>
			</div>
			<div class="item">
				<img src="<?echo $host_name;?>images/products/dr_pepper/old_pepper_crew.png">
				<p class="prodcust-carousel-list-item-desc">Old Pepper's Crew<br>Original</p>
			</div>
		</div>
	</div>
	<div class="products-desc">
		<div class="element">
			<h2>Вода Old Pepper's Crew Cherry</h2>
			<p class="desc">Old Pepper’s Crew – вкуснейший вишневый напиток. По легенде, изобретен американским фармацевтом Уильямом Черриваном из Чикаго в <p>
			<p class="alc">Вкус: насыщенный вишневый с послевкусием вишневой косточки.</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>Упаковка<br>12 бутылок</p>
					<p class="time">0.6 л</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/dr_pepper/old_pepper_crew_cherry_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_crew_logo.png">
		</div>
		<div class="element">
			<h2>Вода Old Pepper's Crew Vanilla</h2>
			<p class="desc">Old Pepper’s Crew – вкуснейший вишневый напиток. По легенде, изобретен американским фармацевтом Уильямом Черриваном из Чикаго в <p>
			<p class="alc">Вкус: сочетание вишни и ванили.</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>Упаковка<br>12 бутылок</p>
					<p class="time">0.6 л</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/dr_pepper/old_pepper_crew_vanilla_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_crew_logo.png">
		</div>
		<div class="element">
			<h2>Вода Old Pepper's Crew Original</h2>
			<p class="desc">Оригинальный вкус Old Pepper's Crew - это незабываемое сочетание карамели, миндаля и, конечно же, вишни.<p>
			<p class="alc">Вкус: вишня, карамель, миндаль.</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>Упаковка<br>12 бутылок</p>
					<p class="time">0.6 л</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/dr_pepper/old_pepper_crew_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_crew_logo.png">
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