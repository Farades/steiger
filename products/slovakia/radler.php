<?php
	$title = "FIRSTTRADE - Steiger Radler";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("radler_content.php");
?>
<?php else:
	include("../../header.php");
	include("radler_content.php");
	include("../../footer.php");
endif; ?>