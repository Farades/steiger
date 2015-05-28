<?php
	$title = "FIRSTTRADE - Dr. Pepper";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("dr_pepper_content.php");
?>
<?php else:
	include("../../header.php");
	include("dr_pepper_content.php");
	include("../../footer.php");
endif; ?>