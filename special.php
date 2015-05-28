<?php
	$title = "FIRSTTRADE - Особые бренды";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("special_content.php");
?>
<?php else:
	include("header.php");
	include("special_content.php");
	include("footer.php");
endif; ?>