<?php
	$title = "FIRSTTRADE - Faxe";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("faxe_content.php");
?>
<?php else:
	include("../../header.php");
	include("faxe_content.php");
	include("../../footer.php");
endif; ?>