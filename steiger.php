<?php
	$title = "FIRSTTRADE - Steiger";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("steiger_content.php");
?>
<?php else:
	include("header.php");
	include("steiger_content.php");
	include("footer.php");
endif; ?>