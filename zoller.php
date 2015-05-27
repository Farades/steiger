<?php
	$title = "FIRSTTRADE - Zoller-Hof";
	if($_SERVER["HTTP_X_PJAX"]): 
		echo "<title>{$title}</title>";
		include("zoller_content.php");
?>
<?php else:
	include("header.php");
	include("zoller_content.php");
	include("footer.php");
endif; ?>