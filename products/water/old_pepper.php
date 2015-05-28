<?php
	$title = "FIRSTTRADE - Old Pepper's";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("old_pepper_content.php");
?>
<?php else:
	include("../../header.php");
	include("old_pepper_content.php");
	include("../../footer.php");
endif; ?>