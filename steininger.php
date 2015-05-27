<?php
	$title = "FIRSTTRADE - Steininger";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("steininger_content.php");
?>
<?php else:
	include("header.php");
	include("steininger_content.php");
	include("footer.php");
endif; ?>