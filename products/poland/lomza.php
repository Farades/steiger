<?php
	$title = "FIRSTTRADE - Lomza";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("lomza_content.php");
?>
<?php else:
	include("../../header.php");
	include("lomza_content.php");
	include("../../footer.php");
endif; ?>