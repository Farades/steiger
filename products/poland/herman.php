<?php
	$title = "FIRSTTRADE - Herman Muller";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("herman_content.php");
?>
<?php else:
	include("../../header.php");
	include("herman_content.php");
	include("../../footer.php");
endif; ?>