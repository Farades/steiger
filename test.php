<? 
	$sum = 0;
	for ($i = 0; $i < 100; $i++) {
		if ($i < 50) {
			$arr[$i] = $i * 4.4;
		} else {
			$arr[$i] = 220 - (( $i - 50) * 4.4);
		}
		$sum += $arr[$i];
	}
	echo "<pre>";print_r($arr);echo "</pre>";
	echo $sum / 100;
?>