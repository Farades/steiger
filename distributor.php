<?php
	$title = "FIRSTTRADE - Клиентам";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("dummy_content.php");
?>
<?php else:
	include("header.php");
	include("dummy_content.php");
	include("footer.php");
endif; ?>