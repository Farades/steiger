<?php
	$title = "FIRSTTRADE - Karpackie";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("karpackie_content.php");
?>
<?php else:
	include("../../header.php");
	include("karpackie_content.php");
	include("../../footer.php");
endif; ?>