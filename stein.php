<?php
	$title = "FIRSTTRADE - Stein";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("stein_content.php");
?>
<?php else:
	include("header.php");
	include("stein_content.php");
	include("footer.php");
endif; ?>