<?php
	$title = "FIRSTTRADE - Zahringer";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("zahringer_content.php");
?>
<?php else:
	include("../../header.php");
	include("zahringer_content.php");
	include("../../footer.php");
endif; ?>