<?php
	$title = "FIRSTTRADE - Главная";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("index_content.php");
?>
<?php else:
	include("header.php");
	include("index_content.php");
	include("footer.php");
endif; ?>