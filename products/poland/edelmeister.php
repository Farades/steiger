<?php
	$title = "FIRSTTRADE - Edelmeitser";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("edelmeister_content.php");
?>
<?php else:
	include("../../header.php");
	include("edelmeister_content.php");
	include("../../footer.php");
endif; ?>