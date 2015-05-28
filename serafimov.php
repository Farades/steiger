<?php
	$title = "FIRSTTRADE - Серафимов Дар";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("serafimov_content.php");
?>
<?php else:
	include("header.php");
	include("serafimov_content.php");
	include("footer.php");
endif; ?>