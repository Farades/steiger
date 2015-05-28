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
				<img src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper.png">
				<p class="prodcust-carousel-list-item-desc">Dr Pepper<br>Bottle</p>
			</div>
			<div class="item">
				<img src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_bank.png">
				<p class="prodcust-carousel-list-item-desc">Dr Pepper<br>Can</p>
			</div>
			<div class="item">
				<img src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_cherry.png">
				<p class="prodcust-carousel-list-item-desc">Dr Pepper<br>Cherry</p>
			</div>
		</div>
	</div>
	<div class="products-desc">
		<div class="element">
			<h2>Вода Dr Pepper в бутылке</h2>
			<p class="desc">Сладкий вишневый вкус, будет отличным подарком к любому празднику, столу, или просто для приятного вечера. Вы можете порадовать своих друзей, близких, подарив им вкус детства!<p>
			<p class="alc">Вкус: оригинальный.</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>Упаковка<br>24 бутылок</p>
					<p class="time">0.5 л</p>
				</li>
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/bottle.png">
					<p>Упаковка<br>8 бутылок</p>
					<p class="time">1.5 л</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_logo.png">
		</div>
		<div class="element">
			<h2>Вода Dr Pepper в банке</h2>
			<p class="desc">Сладкий вишневый вкус, будет отличным подарком к любому празднику, столу, или просто для приятного вечера. Вы можете порадовать своих друзей, близких, подарив им вкус детства!<p>
			<p class="alc">Вкус: оригинальный.</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/tin_plate.png">
					<p>Упаковка<br>24 банки</p>
					<p class="time">0.33 л</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_bank_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_logo.png">
		</div>
		<div class="element">
			<h2>Вода Dr Pepper Cherry</h2>
			<p class="desc">Dr Pepper Cherry - это насыщенный вкус вишни и минимум каллорий. Идеально подходит для виски.<p>
			<p class="alc">Вкус: вишневый.</p>
			<ul class="storage">
				<li>
					<img src="<?echo $host_name;?>images/products/steiger/tin_plate.png">
					<p>Упаковка<br>24 банки</p>
					<p class="time">0.33 л</p>
				</li>
			</ul>
			<img class="bottle" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_cherry_big.png">
			<img class="logo" src="<?echo $host_name;?>images/products/dr_pepper/dr_pepper_logo.png">
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