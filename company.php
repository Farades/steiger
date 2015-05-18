<?php
	$title = "FIRSTTRADE - О компании";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("company_content.php");
?>
<?php else:
	include("header.php");
	include("company_content.php");
	include("footer.php");
endif; ?>