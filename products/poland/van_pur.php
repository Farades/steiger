<?php
	$title = "FIRSTTRADE - Van Pur";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("van_pur_content.php");
?>
<?php else:
	include("../../header.php");
	include("van_pur_content.php");
	include("../../footer.php");
endif; ?>